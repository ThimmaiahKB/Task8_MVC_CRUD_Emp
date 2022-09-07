<?php

    class display extends Database{

        public function fetchalldata()
        {
            $this->query("select * from emp_details");
            return $this->resultSet();
        }
    }
?>