<!DOCTYPE html>
<html>

<head>
    <title>Quên mật khẩu | Không thể đăng nhập</title>
    <link rel="shortcut icon" href="../images/logo.png">
    <link rel="shortcut icon" href="../images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/forgot-pass.css">
</head>

<body class="my-body">
    <div class="my-header">
        <h2>facebook</h2>
        <form action="login.php" method="POST">
            <div class="input-box">
                <input type="text" name="email" placeholder="Email hoặc số điện thoại">
                <input type="password" name="password" placeholder="Mật khẩu">
                <button type="submit">Đăng nhập</button>
                <a href="../admin/resetPassword.php">Bạn quên mật khẩu ư?</a>
            </div>
        </form>
    </div>

  

                    <?php if (isset($_GET['status'])) { ?>
                    <p class="status"><?php echo $_GET['status']; ?></p>
                    <?php } ?>         
        <div class="box-row">
			  <form action="forgot-pass-conn.php" method="POST" class="row needs-validation" novalidate>
                <div class="box-text">
                    <h5>Tìm tài khoản của bạn</h5>
                   
                </div>
                <hr>
				<div class="col-md-12">
                       <label>Vui lòng nhập email hoặc số di động để tìm kiếm tài khoản của bạn.</label>
                       <input type="email" class="form-control" id="validationCustom01" name="email" placeholder="Email hoặc số điện thoại" required>
                       <div class="valid-feedback"></div>
                </div>
                <br><br><br><br>
                <hr>
				<div class="create-ac d-flex">
                     <div class="fake-input">
                         <a href="./index.php">Hủy</a>
                     </div>
					 <button onclick="popup('register-popup')" type="submit" name="btnSendMail" class="btn btn-primary" >Tìm kiếm</button>
				</div>
              </form>
			  
		  </div>




    <?php
    
    require './footer.php';
     
    ?>


<script>
            (function () {
    'use strict'
  
   
    var forms = document.querySelectorAll('.needs-validation')
  

    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()
       </script>

    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
