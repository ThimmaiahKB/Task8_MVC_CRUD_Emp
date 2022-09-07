<?php

    class update extends Database{

        public function find($emp_id)
        {

            $this->query("select * from emp_details where emp_id='$emp_id'");
            return $this->single();
           
        }

        public function update_data($found)

        {
                 
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $street = $_POST['street'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $country = $_POST['country'];
            $zip = $_POST['zip'];
            $filename= $_FILES['file']['name'];
            

            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      		$randstring = '';
        	for ($i = 0; $i < 10; $i++) 
        	{
            	    $randstring = $characters[rand(0, strlen($characters))];
        	}
            $extension=explode(".", $filename);
			$tmp = end($extension);

            $newfilename="$fname"."_"."$randstring".".".$tmp;

            move_uploaded_file($_FILES['file']['tmp_name'],'../public/img/'.$newfilename);
            


            $this->query("update emp_details set firstname='$fname' ,lastname='$lname' ,email='$email' ,phone='$phone' ,
            street='$street' ,city='$city' ,state='$state' ,country='$country', zip='$zip', imagepath='$newfilename' where emp_id='$found->emp_id'");
            return $this->execute();
            
        }
}

?>