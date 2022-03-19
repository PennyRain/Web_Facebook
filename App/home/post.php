<?php
    class Post{
        private $error="";
        
        public function create_post($userid, $data, $files){
            if(!empty($data['post']) && isset($_FILES['my_image'])){
                
                $img_name = $_FILES['my_image']['name'];
	            $img_size = $_FILES['my_image']['size'];
	            $tmp_name = $_FILES['my_image']['tmp_name'];

                if ($img_size > 5097152)
                {
                        $em = "Kích thước file không được lớn hơn 2MB.";
                        header("Location: home.php?error=$em");
                }else 
                {
                    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);
        
                    $allowed_exs = array("jpg", "jpeg", "png"); 
        
                    if (in_array($img_ex_lc, $allowed_exs)) 
                    {
                        $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                        $img_upload_path = 'uploads/'.$new_img_name;
                        move_uploaded_file($tmp_name, $img_upload_path);
        
                        // Insert into Database
                        $post = addslashes($data['post']);
                        $postid = $this->create_postid();
                        $query = "insert into baiviet (id_status, id_nguoidung, content, images) values ('$postid', '$userid', '$post', '$new_img_name')";
                        $DB = new Database();
                        $DB->save($query);
                        header("Location: home.php");
                    }else 
                    {
                        $em = "You can't upload files of this type";
                        header("Location: index.php?error=$em");
                    }
                }

                
            }
            else{
                $this->error .= "Bạn chưa nhập nội dung gì!<br>";
                
            }
            return $this->error;
        }

        
        
        private function create_postid(){
            $length = rand(4,19);
            $number = "";
            for($i=0; $i < $length; $i++){
                $new_rand = rand(0,9);
                $number = $number . $new_rand;
            }
            return $number;
        }
    }

    function get_all_status($con){
        $sql  = "SELECT * FROM baiviet";
        $stmt = $con->prepare($sql);
        $stmt->execute();
     
        if ($stmt->rowCount() > 0) {
              $status = $stmt->fetchAll();
        }else {
           $status = 0;
        }
     
        return $status;
     }
?>