<?php 
session_start();

if(isset($_SESSION['id']) /*&& is_numeric($_SESSION['id'])*/
  && isset($_SESSION['email']) && isset($_SESSION['password']) && isset($_SESSION['last_name']))
  {
?>
<!DOCTYPE html>
<html>

<head>
    <title>Bạn bè | Facebook</title>
    <link rel="shortcut icon" href="images/logo-fb.png">
    <link rel="stylesheet" href="friend.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="my-body">
    

    <div class="header">
           <div class="box-header">
           <div class="header-left">
                  <div class="box-icon1">
                  <i class="bi bi-facebook"></i>
                  </div>
                  <form  action="search.php"
                            method="get">
                      <div class="box-icon">
                          <button type="submit" name="btnSearch"><i class="bi bi-search text-muted"></i></button>
                          <input type="text" name="key" placeholder="Tìm kiếm trên Facebook">
                          
                      </div>
                  </form>
            </div>
            <div class="header-middle">
                  <div class="btn">
                          <button onclick="window.location.href='home.php'" data-tooltip="Home"><i class="fas fa-home"></i></button>
                          <button data-tooltip="Watch"><i class="fas fa-tv"></i></button>
                          <button data-tooltip="Nhóm"><i class="fas fa-users"></i></button>
                          <button data-tooltip="Game"><i class="bi bi-columns"></i></button>  
                  </div>
            </div>
            <div class="header-right">
                <div class="header-right-box">
                <div class="btn-img">
                    <div class="avata"></div>
                    <p class="fw-bold" href="#"><?php echo $_SESSION['last_name'] ?></p>
                  </div>
                  <div class="btn-icon">
                     <button data-tooltip="Menu"><i class="bi bi-grid-3x3-gap-fill"></i></button>
                     <button data-tooltip="Messages"><i class="bx bxl-messenger"></i></button>
                     <button data-tooltip="Thông báo"><i class="fas fa-bell"></i></button>
                     <button data-tooltip="Tài khoản" onclick="menuToggle();"><i class="fas fa-sort-down"></i></button>
                  </div>
              
                </div>
            </div>
           </div>
    </div>
                 <div class="box-logout">
                      <div class="box-avata">
                        <div class="avata"></div>
                          <div class="box-avata-text">
                              <h9><?php echo $_SESSION['last_name'] ?></h9>
                              <p>Xem trang cá nhân của bạn</p>
                          </div>
                      </div>
                      <hr>
                      <div class="idel">
                           <i class="bi bi-chat-left-dots-fill"></i>
                           <div class="idel-text">
                           <h9>Đóng góp ý kiến</h9>
                           <p>Góp phần cải thiện phiên bản Facebook mới.</p>
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
                             <a href="../admin/logout.php">Đăng xuất</a>            
                      </div>
                      <div class="footer-logout">
                          <a href="">Quyền riêng tư.<a href="">Điều khoản.<a href="">Quảng cáo.<a href="">Lựa chọn quảng cáo.<a href="">Cookie.<a>Xem thêm.</a><a>Meta © 2021 | by Duy</a></a></a></a></a></a>
                      </div>
                  </div>

    <div class="sidebar">
        <div class="box-sidebar">
            <div class="box-setting">
                <h5>Bạn bè</h5>
                <button><i class="fas fa-cog"></i></button>
            </div>
            <div class="btn-setting">
               <div class="icon-setting1">
                    <i class="fas fa-user-friends"></i><h6>Trang chủ</h6>
               </div>
               <div class="icon-setting">
                    <i class="bi bi-person-fill"></i><h6>Lời mời kết bạn</h6>
                    <div class="icon-chevron">
                       <i class="fas fa-chevron-right"></i>
                    </div>
               </div>
               <div class="icon-setting">
                    <i class="bi bi-person-plus-fill"></i><h6>Gợi ý</h6>
                    <div class="icon-chevron">
                       <i class="fas fa-chevron-right"></i>
                    </div>
               </div>
               <div class="icon-setting">
                    <i class="bi bi-person-lines-fill"></i><h6>Tất cả bạn bè</h6>
                    <div class="icon-chevron">
                       <i class="fas fa-chevron-right"></i>
                    </div>
               </div>
               <div class="icon-setting">
                    <i class="bi bi-gift-fill"></i><h6>Sinh nhật</h6>
               </div>
               <div class="icon-setting">
                    <i class="bi bi-person-lines-fill"></i><h6>Danh sách tùy chỉnh</h6>
                    <div class="icon-chevron">
                       <i class="fas fa-chevron-right"></i>
                    </div>
               </div>
            </div>
        </div>
    </div>


    <main class="main">
            <div class="box-main-text">
                <h7>Lời mời kết bạn</h7>
                <a href="#">Xem tất cả</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ảnh</th>
                        <th>Tên người dùng</th>
                        <th>Chỉnh sửa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><div class="avata"></div></td>
                        <td><?php echo $_SESSION['last_name'] ?></td>
                        <td>
                            <a href=""><i class="bi bi-pencil-square"></i></a>
                            <a href=""><i class="bi bi-trash-fill"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
    </main>




    <script src="../js/logout.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
<?php  }else{
    header("Location: ../index.php");
  
  }?>
  