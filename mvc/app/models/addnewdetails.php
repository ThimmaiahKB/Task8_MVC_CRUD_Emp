<?php

    class addnewdetails extends Database{
        
        public function insert()
        {
            $fname   = $_POST['fname'];
            $lname   = $_POST['lname'];
            $email   = $_POST['email'];
            $phone   = $_POST['phone'];
            $street  = $_POST['street'];
            $city    = $_POST['city'];
            $state   = $_POST['state'];
            $country = $_POST['country'];
            $zip     = $_POST['zip'];
            $filename= $_FILES['file']['name'];

            $this->query("select email from emp_details where email='$email'");
            $emailcheck = $this->Single();
            if($emailcheck)
            {
                return false;
            }
            else
            {
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

                $this->query("insert into emp_details(firstname,lastname,email,phone,street,city,state,country,zip,imagepath)
                values('$fname','$lname','$email','$phone','$street','$city','$state','$country','$zip','$newfilename')");
                return $this->execute();
            }
        }

    }