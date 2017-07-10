<?php 
require_once __DIR__.'/core/init.php';
include_once Url::basepath().'template/common/header.php';
?>

  <body>
   <div class = "container">
    <div class="wrapper login">
     <div class="form-signin-wrapper">
      <form action="" method="post" name="Login_Form" class="form-signin">       
          <h3 class="form-signin-heading">Welcome Admin! Please Sign In</h3>
          <hr class="colorgraph">

          <div class="alert error alert-danger">            
            <span class="errorMsg">Some error msg</span>
          </div>

          <div class="alert alert-success success" data-dismiss="alert" aria-label="Close logMsg">
            <span aria-hidden="true" class="close" >&times;</span>
            <span class="successMsg">Success Msg</span>
          </div>

          <input type="text" class="form-control" name="Username" placeholder="Username"  autofocus="" id="email" />
         
          <input type="password" class="form-control" name="Password" placeholder="Password" id="password" />          
         
          <button class="btn btn-lg btn-primary btn-block login-btn"  name="Submit" value="Login" type="Submit" id="login" >Login</button>        
      </form>
     </div>      
    </div>
  </div>
  
<?php include_once Url::basepath().'template/common/footer.php'; ?>
  