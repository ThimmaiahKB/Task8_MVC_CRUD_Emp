<?php

    class Export extends Database{
        public function fetch_to_export()
        {
                $this->query("Select * from emp_details order by emp_id asc");
                return $this->resultSet();
        }
    }
?>