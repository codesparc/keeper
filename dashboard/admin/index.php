<?php 
session_start();  
include_once '../../core/init.php';
require_once Url::basepath().'/template/common/header.php';
if(!isset($_SESSION['admin'])){     
    header('location: ../../index.php');    
} 
?>
<body>

<div class="main-container">
  <div class="dash-main">
    <?php require_once Url::basepath().'/template/common/sidebar.php'; ?>
    <section>
        <div class="dash-rightSection">
            <h2>Welcome Admin</h2> 
        </div>
    </section>
  </div> 
</div>
</body>


<?php require_once Url::basepath().'/template/common/footer.php'; ?>