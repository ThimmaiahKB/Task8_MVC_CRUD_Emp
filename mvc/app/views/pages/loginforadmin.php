<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/loginpageadmin.css">
<?php require APPROOT . '/views/inc/header.php'; ?>

<div id="invalid_credentials"><?php echo $data['loginerror'] ?></div>
  <div class="outteradmin">
    <div class="inneradmin">
      <form name="adminloginform" class="alog" action="<?php echo URLROOT . 'pages/adminlogincheck' ?>" method="post" onsubmit="return validation()">
        <h1>Admin login</h1> 
         
        <label>Username</label>
        <input id="username" type="text" name="adminname" placeholder="type your username">
        <label>password</label>
        <input id="password" type="password" name="adminpassword" placeholder="type your password">
        <input type="submit" id="submit" name="adminloginform" value="Login">
      </form>
    </div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>