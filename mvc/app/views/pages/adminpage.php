<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/adminpage.css">

<div class="topbar">
    <div class="searchdiv">  
        <form class="search" action="<?php echo URLROOT .'Search/search_emp' ?>" method="post" >
            <input type="text" name="searchemployee" placeholder="search with name">
            <button type="submit" name="searchbutton"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <a href="<?php echo URLROOT .'pages/display'?>"><button type="button" name="viewemp" id="newemp" onclick="myFunction()">View Data</button></a>
    <button type="button" name="new" id="addnew" onclick="myFunction1()">Add new</button> 
    <a href="<?php echo URLROOT .'pages/logout' ?>"><button type="button" name="logout">Logout</button></a>
</div>
<div class="o_registerdiv" id="o_registerdiv">
    <h4><?php echo $data['error']; ?>
    <div class="main">
    <div class="i_registerdiv">
    <form class="ef" action="<?php echo URLROOT .'pages/addnewemp' ?>" method="post" enctype="multipart/form-data">
        <h2 class="fill">Fill employee details</h2>
        <div class="udetails">
            <div class="inputbox">
                <span class="details">Firstname</span>
                <input type="text" name="fname" placeholder="first name">
            </div>
            <div class="inputbox">
                <span class="details">Lastname</span>
                <input type="text" name="lname" placeholder="last name">
            </div>
            <div class="inputbox">
                <span class="details">Email</span>
                <input type="email" name="email"placeholder="email">
            </div>
            <div class="inputbox">
                <span class="details">Phone Number</span>
                <input type="number" name="phone" placeholder="Phone">
            </div>
            <div class="inputbox">
                <span class="details">Street</span>
                <input type="text" name="street"placeholder="street">
            </div>
            <div class="inputbox">
                <span class="details">City</span>
                <input type="text" name="city"placeholder="city">
            </div>
            <div class="inputbox">
                <span class="details">State</span>
                <input type="text" name="state"placeholder="state">
            </div>
            <div class="inputbox">
                <span class="details">Country</span>
                <input type="text" name="country"placeholder="country">
            </div>
            <div class="inputbox">
                <span class="details">Zip</span>
                <input type="number" name="zip"placeholder="zip">
            </div>
            <div class="inputbox">
                <span class="details">upload photo</span>
                <input type="file" name="file" accept=".jpg , .jpeg , .JPG, .JPEG, .PNG , .png">
            </div>
            <div class="submitbox">
                <input type="submit" name="addnew" value="Add">
            </div>
        </div>
    </form>
    </div>
    </div>
</div>
<div class="viewdiv"id="viewdiv">
<div class="container mt-9" id="container">
    <div class="row">
        <div class="col-md-14">
            <div class="card">
                <div class="d-flex card-header bg-primary">
                    <div class="mt"><h3 class="text-white">Employee details</h3></div>
                    <div class="ml-5 justify-content-end"><a href="<?php echo URLROOT .'exportdata/export' ?>"><button class="btn btn-success">Export data</button></a></div>
                </div>
                <div class="card-body">

                </div>
                <table class="table">
                 <thead>
                     <tr> 
                         <th>Id</th>
                         <th>Firstname</th>
                         <th>Lastname</th>
                         <th>Email</th>
                         <th>Phone</th>
                         <th>Street</th>
                         <th>City</th>
                         <th>State</th>
                         <th>country</th>
                         <th>zip</th>
                         <th>image</th>
                         <th>EDIT</th>
                         <th>DELETE</th>
                    </tr>
                 </thead>
                 <tbody>
                    <?php 
                        foreach($data as $value)
                        { ?>
                            <tr>
                                <td><?php echo $value->emp_id; ?></td>
                                <td><?php echo $value->firstname; ?></td>
                                <td><?php echo $value->lastname; ?></td>
                                <td><?php echo $value->email; ?></td>
                                <td><?php echo $value->phone; ?></td>
                                <td><?php echo $value->street; ?></td>
                                <td><?php echo $value->city; ?></td>
                                <td><?php echo $value->state; ?></td>
                                <td><?php echo $value->country; ?></td>
                                <td><?php echo $value->zip; ?></td>
                                <td>
                                    <img src="<?php echo URLROOT ."img/".$value->imagepath; ?>" width="100px" height="100px">
                                </td>
                                <td><a href="<?php echo URLROOT . 'pages/update/'.$value->emp_id; ?>" class="btn btn-info">Edit</a></td>
                                <td><a href="<?php echo URLROOT . 'pages/delete/'.$value->emp_id; ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                    <?php } ?>
                 </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
