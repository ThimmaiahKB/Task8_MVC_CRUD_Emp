<?php

    class delete extends Database{

        public function delete_emp($emp_id)
        {
            $this->query("delete from emp_details where emp_id='$emp_id'");
            return $this->execute();
        }
    }

?>