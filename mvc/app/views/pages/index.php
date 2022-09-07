<?php
 if(isset($_SESSION['name']))
 {
  header('Location: http://localhost/mvc/Pages/go');
  exit();
}
 ?>
<html>
  <head>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
  </head>
  <body>

  <div class="outerdiv">
  
    <div class="innerdiv">
      
      <form class="index" action="<?php echo URLROOT . 'pages/showloginpage'?>">
        <h1><?php echo $data['title']; ?></h1>
        <img class="emppic" src="<?php echo URLROOT; ?>/img/pic.jpg"></img>
        <input type="submit" name="admin" value="Login as admin">
        <button><a href="<?php echo URLROOT . 'guest/guestdata' ?>">Guest Login</a></button>
      </form>
    </div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>