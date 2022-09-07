<?php

    class search_emp extends Database{
        public function find_data($keyname)
        {
                $this->query("select * from emp_details where firstname='$keyname'");
                return $this->resultSet();
        }
    }