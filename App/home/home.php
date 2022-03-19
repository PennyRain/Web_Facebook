<?php 
session_start();
  include("db_conn.php");
  include("Database.php");
  include("post.php");
  $status = get_all_status($conn);

  if(isset($_SESSION['id']) /*&& is_numeric($_SESSION['id'])*/
  && isset($_SESSION['email']) && isset($_SESSION['password']) && isset($_SESSION['last_name']))
  {
    $id = $_SESSION['id'];
    if($_SERVER['REQUEST_METHOD']=="POST") 
    {
    
      $post = new Post();
      $id = $_SESSION['id'];
      $result = $post->create_post($id, $_POST, $_FILES);

    }
    // $post = new Post();
    // $id = $_SESSION['id'];
    // $posts = $post->get_posts($id, $_POST);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Facebook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/logo-fb.png">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body class="my-body">
    

    <div class="header">
           <div class="box-header">
           <div class="header-left">
                  <div class="box-icon1">
                  <i class="bi bi-facebook"></i>
                  </div>
                  <form class="box-icon"
                        action="search.php"
                        method="get">
                    <button><i class="bi bi-search text-muted"></i></button>
                    <input type="text"  name="key" placeholder="Tìm kiếm trên Facebook">
                  </form>
            </div>
            <div class="header-middle">
                          <button onclick="window.location.href='home.php'" data-tooltip="Home"><i class="fas fa-home"></i></button>
                          <button data-tooltip="Watch"><i class="fas fa-tv"></i></button>
                          <button data-tooltip="Nhóm"><i class="fas fa-users"></i></button>
                          <button data-tooltip="Game"><i class="bi bi-columns"></i></button>  
            </div>
            <div class="nav-right nav justify-content-end">
            <div class="avata"></div>
            <p class="fw-bold" href="#"><?php echo $_SESSION['last_name'] ?></p>
            <button><i class="fas fa-th"></i></button>
            <button><i class="fab fa-facebook-messenger"></i></button>
            <button><i class="fas fa-bell"></i></button>
            <button onclick="menuToggle()"><i class="fas fa-caret-down"></i></button>
            </div>
            </div>
    </div>
                 <div class="box-logout">
                 <button>
                    <div class="avata tcn"></div>
                    <div class="avt-text">
                     <p class="fw-bold text-start"><?php echo $_SESSION['last_name'] ?></p>
                     <p class="text-muted">Xem trang cá nhân của bạn</p>
                   </div>
                 </button>
                      <hr>
                      <div class="idel">
                           <i class="bi bi-chat-left-dots-fill"></i>
                           <div class="idel-text">
                           <p class="fw-bold fs-6">Đóng góp ý kiến</h9>
                           <p class="text-muted">Góp phần cải thiện phiên bản Facebook mới.</p>
                           </div>
                      </div>
                      <hr>
                      <div class="idel">
                           <i class="fas fa-cog"></i>
                           <h11>Cài đặt & quyền riêng tư</h11>
                           <i class="bx bx-chevron-left bx-rotate-180"></i>
                      </div>
                      <div class="idel">
                           <i class="bi bi-question-circle-fill"></i>
                           <h11>Trợ giúp & hỗ trợ</h11>
                           <i class="bx bx-chevron-left bx-rotate-180"></i>
                      </div>
                      <div class="idel">
                           <i class="bi bi-moon-fill"></i>     
                           <h11>Màn hình & trợ năng</h11>
                           <i class="bx bx-chevron-left bx-rotate-180"></i>
                      </div>
                      <div class="idel">
                            <i class="bx bxs-log-out bx-rotate-180"></i>
                            <a href="../logout.php">Đăng xuất</a>            
                      </div>
                      <div class="footer-logout">
                          <a href="">Quyền riêng tư.<a href="">Điều khoản.<a href="">Quảng cáo.<a href="">Lựa chọn quảng cáo.<a href="">Cookie.<a>Xem thêm.</a><a>Meta © 2021 | by Duy</a></a></a></a></a></a>
                      </div>
                  </div>
                  <div class="container-fluid menu">
        <div class="imp-links"> 
                <div class="av">
                  <div class="avata"></div>
                  <p class="fw-bold" href="#"><?php echo $_SESSION['last_name'] ?></p>
                </div>
                <form action="friend.php">
                <button><i class="fas fa-user-friends"></i><p class="fw-bold">Bạn bè</p></button></form>
                <button><i class="fas fa-users"></i><p class="fw-bold">Nhóm</p></button>
                <button><i class="fas fa-store"></i><p class="fw-bold">Marketplace</p></button>
                <button><i class="fas fa-tv-alt"></i><p class="fw-bold">Watch</p></button>
                <button><i class="fas fa-history"></i><p class="fw-bold">History</p></button>
                <button><i class="fas fa-angle-down"></i><p class="fw-bold">Xem thêm</p></button>
                <hr>
                <div class="shortcut-links">
                <p>Your Shortcuts</p>
                <div> <img src="images/shortcut-1.png" alt="">Web Developers</div>
                <div> <img src="images/shortcut-2.png" alt="">Web Design Course</div>
                <div> <img src="images/shortcut-3.png" alt="">Full Stack Development</div>
                <div><img src="images/shortcut-4.png" alt="">Website Experts</div>
                </div>
        </div>
        <div class="main-content">
          <div class="story-gallery">
            <div class="story story-1">
              <p><img src="images/upload.png" alt="" href="#"></p>
              <p>Tạo tin</p>
            </div>
            <div class="story story-2">
              <div class="avata avt-2"></div>
              <p>ABC</p>
            </div>
            <div class="story story-3">
              <div class="avata avt-3"></div>
              <p>DEF</p>
            </div>
            <div class="story story-4">
             <div class="avata avt-4"></div>
              <p>IJK</p>
            </div>
            <div class="story story-5">
              <div class="avata avt-5"></div>
              <p>OPQ</p>
            </div>
          </div>
          <div class="post-status">
            <div class="post">
              <div class="avata"></div>
              <div class="text">
                <button onclick="STT()">
                  <p class="text-muted">Bạn đang nghĩ gì thế?</p>
                </button>
              </div>
            </div>
            <div class="hr"><hr></div>
            <div class="status-img">
              <button>
                <i class="fas fa-video"></i>
                <p class="text-muted">Video trực tiếp</p>
              </button>
              <button>
                <i class="fas fa-images"></i>
                <p class="text-muted">Ảnh/Video</p>
              </button>
              <button>
                <i class="fas fa-grin"></i>
                <p class="text-muted">Cảm xúc/Hoạt động</p>
              </button>
            </div>
          </div>
          
          <!-----------------------------------------------Bài đăng---------------------------------------------------------->
            <div class="post-box">
            <?php foreach ($status as $stt) { ?>
            <div class="baiViet">
            <div class="baiViet-avt">
              <button>
                <div class="avata"></div>                 
                  <div class="ctt">
                    <p class="fw-bold bv-ct text-start" href="#"><?php echo $_SESSION['last_name'] ?></p>
                    <p class="text-muted" href="#">Hôm qua lúc 12:00<i class="fas fa-globe-americas"></i></p>
                </div>
              </button>
              <a href="php/delete-stt.php?id_status=<?=$stt['id_status']?>" class="d-flex"><i class="fas fa-times-circle text-end" ></i></a>
            </div>
            <div class="cam-nghi">
              <p><?=$stt['content']?></p>
            </div>
            <div class="anh">
              <p><img class="img-fluid" src="uploads/<?=$stt['images']?>"></p>
             
            </div>
            <div class="sl-like">
              <div class="like-count">
                <i class="fas fa-thumbs-up like-up" herf="#"></i>
                <p class="text-muted" herf="#">10</p>
                <h7 class="text-muted text-end" herf="#">1 bình luận</h7>
              </div>
            </div>
            <hr>
            <div class="like">
             
                <button>
                  <p><i class="fas fa-thumbs-up"></i></p>
                  <p class="text-muted fw-bold">Thích</p>
                  </button>
                <button>
                <p><i class="far fa-comment-alt"></i></p>
                  <p class="text-muted fw-bold">Bình luận</p>
                </button>

                <button>
                <p><i class="fas fa-share"></i></p>
                  <p class="text-muted fw-bold">Chia sẻ</p>
                </button>
              
            </div>
            <hr>
            <div class="comment-box">
              <div class="avata"></div>
              <div class="box-icon">
                    <input type="text" name="search" placeholder="Tìm kiếm trên Facebook">
              </div>
            </div>
            </div>
            <?php } ?>
            </div>


          <!--------------------------------------------------------------------------------------------------------->
        </div>
        <div class="right-sidebar">
          <div class="box">
            <div class="heading-link">
                <h4>Events</h4>
                <a href="">See All</a>
            </div>

            <div class="events">
                <div class="left-event">
                    <h4>13</h4>
                    <span>august</span>
                </div>
                <div class="right-event">
                    <h4>Social Media</h4>
                    <p> <i class="fas fa-map-marker-alt"></i> wisdom em Park</p>
                    <a href="#">More Info</a>
                </div>
            </div>
            <div class="events">
                <div class="left-event">
                    <h4>18</h4>
                    <span>January</span>
                </div>
                <div class="right-event">
                    <h4>Mobile Marketing</h4>
                    <p><i class="fas fa-map-marker-alt"></i> wisdom em Park</p>
                    <a href="#">More Info</a>
                </div>
            </div>

            <div class="heading-link">
                <h4>Advertisement</h4>
                <a href="">Close</a>
            </div>
            <div class="advertisement">
                <img src="images/advertisement.png" class="advertisement-image" alt="">
            </div>

            <div class="heading-link">
                <h4>Conversation</h4>
                <a href="">Hide Chat</a>
            </div>

            <div class="online-list">
                <div class="online">
                    <img src="images/status-2.jpg" alt="">
                </div>
                <p>Alison Mina</p>
            </div>

            <div class="online-list">
                <div class="online">
                    <img src="images/status-5.jpg" alt="">
                </div>
                <p>Jackson Aston</p>
            </div>
            <div class="online-list">
                <div class="online">
                    <img src="images/status-1.jpg" alt="">
                </div>
                <p>Samona Rose</p>
            </div>
            <div class="online-list">
                <div class="online">
                    <img src="images/status-2.jpg" alt="">
                </div>
                <p>Alison Mina</p>
            </div>
          </div>
        </div>
    </div>
    <div>

    <form method="post" enctype="multipart/form-data">
      <div class="dangSTT" id="popupForm">
        <div class="taoBV">
            <p class="fw-bold text-center">Tạo bài viết </p>
            <i class="fas fa-times-circle text-end" onclick="Dong()"></i>
        </div>
        <hr>
        <button>
          <div class="avata"></div>
          <div class="avt-text av-bv">
            <div class="ctt"><p class="fw-bold text-muted" href="#"><?php echo $_SESSION['last_name'] ?></p></div>
            <div class="ck"><p class="text-muted" href="#"><i class="fas fa-globe-americas "></i> Công khai</p></div>
          </div>
        </button>
        <textarea class="camNghi" placeholder="Bạn đang nghĩ gì thế?" id="content" name="post"></textarea>
        <p class="chenFile"><input type="file" id="my_image" name="my_image"></p>
        <div class="chenAnh">
          <p>Thêm vào bài viết</p>
          <i class="fas fa-images i1"></i>
          <i class="fas fa-user i2" href="#"></i>
          <i class="fas fa-grin i3" href="#"></i>
          <i class="fas fa-map-marker-alt i4" href="#"></i>
          <i class="fas fa-microphone-alt i5" href="#"></i>
          <i class="fas fa-ellipsis-h i6" href="#"></i>
        </div>
        <div class="nutDang" type="submit" name="submit" value="Upload">
          <button class="Dang" type="submit"><p class="fw-bold text-center">Đăng</p></button>
        </div>
      </div>
    </form>



    <script src="scrip.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
<?php }else{
  header("Location: ../index.php");

}?>

