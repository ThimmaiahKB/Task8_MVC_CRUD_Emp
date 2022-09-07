<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/loginpageadmin.css">
<script type="text/javascript" src="<?php echo URLROOT ; ?>/js/admin_validation.js"></script> 
<?php require APPROOT . '/views/inc/header.php'; ?>


  <div id="invalid_credentials"><?php echo $data['ee']; ?></div>
  <div class="outteradmin">
    <div class="inneradmin">
      <form name="adminloginform" class="alog" action="<?php echo URLROOT . 'pages/adminlogincheck' ?>" method="post">
        <h1>Admin login</h1>  
        <label>Username</label>
        <input class="input100" type="text" name="adminname" placeholder="type your username">
        <p class="error adminname-error"></p>
        <label>password</label>
        <input type="password" name="adminpassword" placeholder="type your password">
        <p class="error adminpassword-error"></p>
        <input type="submit" name="adminloginform" value="Login">
      </form>
    </div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>