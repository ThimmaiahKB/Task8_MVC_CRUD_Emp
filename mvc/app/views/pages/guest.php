<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/guest.css">
<div class="guesttop">
    <h3>welcome to guest page</h3>
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
        
                            </tr>
                    <?php } ?>
                 </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<button class="goback"><a href="<?php echo URLROOT . 'guest/showlog' ?>">Go back</a></button>   
<?php require APPROOT . '/views/inc/footer.php'; ?>