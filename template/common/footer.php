<script>
      var BASE = "<?php echo $_SERVER['HTTP_HOST']; ?>",
      WEB_SITE = "<?php echo ($_SERVER['HTTP_HOST'] == 'localhost')?"/keeper":""; ?>";      
</script>   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo Url::assets(); ?>js/jquery-1.12.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo Url::plugins(); ?>bootstrap/js/bootstrap.min.js"></script>
    <!-- main application script -->
    <script src="<?php echo Url::assets(); ?>js/login.js"></script>
    <script src="<?php echo Url::assets(); ?>js/addcategory.js"></script>
    <script src="<?php echo Url::assets(); ?>js/app.js"></script>
    
  </body>
</html>