<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/edit.css">
<div class="E_main">
    <div class="E_i_registerdiv">
    <form class="E_ef" action='' method="post" enctype="multipart/form-data">
        <h2 class="E_fill">update employee details</h2>
        <div class="E_udetails">
            <div class="E_inputbox">
                <span class="details">Firstname</span>
                <input type="text" name="fname" placeholder="first name" value='<?=$data->firstname ?>' >
            </div>
            <div class="E_inputbox">
                <span class="details">Lastname</span>
                <input type="text" name="lname" placeholder="last name" value='<?=$data->lastname ?>'>
            </div>
            <div class="E_inputbox">
                <span class="details">Email</span>
                <input type="email" name="email"placeholder="email" value='<?=$data->email ?>'>
            </div>
            <div class="E_inputbox">
                <span class="details">Phone Number</span>
                <input type="number" name="phone" placeholder="Phone" value='<?=$data->phone ?>'>
            </div>
            <div class="E_inputbox">
                <span class="details">Street</span>
                <input type="text" name="street"placeholder="street" value='<?=$data->street ?>'>
            </div>
            <div class="E_inputbox">
                <span class="details">City</span>
                <input type="text" name="city"placeholder="city" value='<?=$data->city ?>'>
            </div>
            <div class="E_inputbox">
                <span class="details">State</span>
                <input type="text" name="state"placeholder="state" value='<?=$data->state?>'>
            </div>
            <div class="E_inputbox">
                <span class="details">Country</span>
                <input type="text" name="country"placeholder="country" value='<?=$data->country ?>'>
            </div>
            <div class="E_inputbox">
                <span class="details">Zip</span>
                <input type="number" name="zip"placeholder="zip" value='<?=$data->zip ?>'>
            </div>
            <div class="E_inputbox">
                <span class="details">upload photo</span>
                <input type="file" name="file" accept=".jpg , .jpeg , .JPG, .JPEG, .PNG , .png" >
            </div>
            <div class="E_submitbox">
                <input type="submit" name="edit" value="update">
            </div>
            <div class="E_submitbox">
            <button><a href="<?php echo URLROOT .'pages/showloginpage' ?>">go back<a></button>
            </div>
            
        </form>
   
    </div>
    </div>
