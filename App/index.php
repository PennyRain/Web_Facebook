<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập/ Đăng ký | Facebook</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="../images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="my-body">
                <?php if (isset($_GET['error'])) { ?>
     		          <p class="error"><?php echo $_GET['error']; ?></p>
     	        <?php } ?>
      <div class="my-container">
		  <div class="row-text">
			  <h1>facebook</h1>
			  <div class="text-h8">
				  <h8>Facebook giúp bạn kết nối và chia sẻ với mọi người trong cuộc sống của bạn.</h8>
			  </div>
		  </div>
		  
		  <div class="box-row">
			  <form action="login.php" method="POST" class="row needs-validation" novalidate>
         
				<div class="col-md-12">
                       <input type="text" class="form-control" id="validationCustom01" name="email" placeholder="Email hoặc số điện thoại" required>
                       <div class="valid-feedback"></div>
                </div>
                <div class="col-md-12">
                     <input type="password" class="form-control" id="validationCustom02" name="password" placeholder="Mật khẩu" required>
                     <div class="valid-feedback"></div>
                </div>
				<div class="input-login">
				      <input type="submit" value="Đăng nhập" class="btn btn-primary">
				</div>
				
				<div class="forgot-pass">
				     <a href="./forgot-pass.php">Quên mật khẩu?</a>
				</div>
				<div class="create-ac">
				     <hr>
					 <button onclick="popup('register-popup')" type="submit" >Tạo tài khoản mới</button>
				</div>
              </form>
			  
		  </div>
		  
	  </div>  
	  <div class="create-page mt-4">
			  <a href="https://www.facebook.com/pages/create/?ref_type=registration_form">Tạo trang</a>
			  <h9>dành cho người nổi tiếng, thương hiệu hoặc doanh nghiệp.</h9>
	  </div>

	

      <div class="popup-container" id="register-popup">
            <div class="popup">
                <form action="signup-check.php" method="POST" class="needs-validation" novalidate>
                    <div class="form-register">
                    <h2>Đăng ký</h2>
                    <button type="reset" onclick="popup('register-popup')"><i class="fas fa-times"></i></button>
                    </div>
                    <h10>Nhanh chóng và dễ dàng</h10>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group is-invalid">
                                <input type="text" name="firts_name" class="form-control " placeholder="Họ" required>
                                <div class="valid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group is-invalid">
                                <input type="text" name="last_name" class="form-control " placeholder="Tên" required>
                                <div class="valid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group is-invalid">
                                <input type="email" name="email" class="form-control " placeholder="Số di động hoặc email" required>
                                <div class="valid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group is-invalid">
                                <input type="password" name="password" minlength="8" class="form-control " placeholder="Mật khẩu mới" required>
                                <div class="valid-feedback"></div>
                            </div>
                        </div>
                        <label  for="floatingInput" style="color: rgb(97, 96, 96); font-size: .8rem;">Sinh nhật <i class="fas fa-question-circle"></i></label>
                        <div class="col-md-4">
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                        <option disabled selected value="">1</option>
                            <option value="1">01</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                            <option value="4">04</option>
                            <option value="5">05</option>
                            <option value="6">06</option>
                            <option value="7">07</option>
                            <option value="8">08</option>
                            <option value="9">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="39">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                  
                        </div>
                        <div class="col-md-4">
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                        <option disabled selected value="">Tháng 1</option>
                            <option value="thang1">Tháng 1</option>
                            <option value="thang2">Tháng 2</option>
                            <option value="thang3">Tháng 3</option>
                            <option value="thang4">Tháng 4</option>
                            <option value="thang5">Tháng 5</option>
                            <option value="thang6">Tháng 6</option>
                            <option value="thang7">Tháng 7</option>
                            <option value="thang8">Tháng 8</option>
                            <option value="thang9">Tháng 9</option>
                            <option value="thang10">Tháng 10</option>
                            <option value="thang11">Tháng 11</option>
                            <option value="thang12">Tháng 12</option>
                        </select>
                     
                        </div>
                        <div class="col-md-4">
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                        <option disabled selected value="">2004</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                        </select>
                     
                        </div>
                        <label  for="floatingInput" style="color: rgb(97, 96, 96); font-size: .8rem; margin-top:10px;">Giới tính <i class="fas fa-question-circle"></i></label>
                        <div class="col-md-4">
                        <div class="form-group-sex">
                            <label class="form-check-label" for="female" style="margin-right:65px; margin-left:5px;">
                                Nữ
                            </label>
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female" class="form-control" required>

                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="form-group-sex">
                            <label class="form-check-label" for="male" style="margin-right:50px; margin-left:5px;">
                                Nam
                            </label>
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male" class="form-control" required>

                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="form-group-sex">
                            <label class="form-check-label" for="other" style="margin-right:20px; margin-left:5px;">
                                Tùy chọn
                            </label>
                            <input class="form-check-input" type="radio" name="gender" id="other" value="other" class="form-control" required>
                        </div>
                        </div>
                    </div>
                    <div class="register-info">
                        <p>Bằng cách nhấp vào Đăng ký,bạn đồng ý với <a href="#">Điều khoản,</a><a href="#">Chính sách dữ liệu</a>và <a href="#">Chính sách cookie</a>của chúng tôi. Bạn có thể nhận được thông báo của chúng tôi qua SMS và hủy nhận bất kỳ lúc nào.</p>
                    </div>
                   
                    <div class="register-btn">
                        <button type="submit">Đăng ký</button>
                    </div>
                </form>
        
            </div>
        </div>

<!-- POPUP REGISTER -->
<?php
	  
	  require "./footer.php";
	 
	 ?>

	  <script src="../js/login.js"></script>
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>


      