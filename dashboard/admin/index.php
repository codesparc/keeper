<?php 
session_start();  
include_once '../../core/init.php';

if(!isset($_SESSION['admin'])){     
    header('location: ../../index.php');    
} 
?>
<body>

<div class="main-container">
  <div class="dash-main">
    <?php require_once helperURL::basepath().'/includes/sidebar.php'; ?>
    <section>
        <div class="dash-rightSection">
            <h2>Welcome Admin</h2> 
        </div>
    </section>
  </div> 
</div>
</body>


<?php require_once '../includes/footer.php'; ?>