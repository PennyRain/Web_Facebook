
<!DOCTYPE html>
<html>
<head>
	<title>Thay đổi mật khẩu</title>
    <link rel="shortcut icon" href="../images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/change-pass.css">
</head>
<body class="my-body">
    


    <div class="box-form">
	
	<form action="change-p.php" method="post" class="row needs-validation" novalidate>
     	
	<h2>Thay đổi mật khẩu</h2>
	<hr>
     	        <div class="col-md-12">
                       <input type="password" class="form-control" minlength="8" id="validationCustom01" name="password" placeholder="Mật khẩu mới" required>
                       <div class="valid-feedback"></div>
                </div>

				<div class="col-md-12">
                       <input type="password" class="form-control" minlength="8" id="validationCustom01" name="cpassword" placeholder="Nhập lại mật khẩu" required>
                       <div class="valid-feedback"></div>
                </div>
  
                <hr>
     	        <div class="btn-my d-flex">
                 <div class="fake-btn">
                   <a href="../App/index.php">Về trang chủ</a>
                 </div>
				         <button type="submit"  name="btnSendMail" class="btn btn-primary" >Thay đổi</button>
				      </div>
     </form>
	</div>





	          <?php if (isset($_GET['error'])) { ?>
     		          <p class="error"><?php echo $_GET['error']; ?></p>
     	        <?php } ?>
				    <?php if (isset($_GET['success'])) { ?>
     		          <p class="success"><?php echo $_GET['success']; ?></p>
     	        <?php } ?>



	 <?php
	 
	     require "./footer.php";
	 
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

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

<?php 
