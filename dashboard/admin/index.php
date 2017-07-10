<?php 
session_start();  
//require_once '../../config/helperURL.php';
//require_once helperURL::includeURL().'header.php'; 
include_once '../includes/header.php';
//var_dump(helperURL::baseURL());
  if(isset($_SESSION['admin'])){
     header('location: ../../index.php');    
  } 
?>
<body>

<div class="main-container">
  <div class="dash-main">
    <?php require_once helperURL::includeURL().'sidebar.php'; ?>
    <section>
        <div class="dash-rightSection">
            <h2>Welcome Admin</h2> 
        </div>
    </section>
  </div> 
</div>
</body>


<?php require_once '../includes/footer.php'; ?>