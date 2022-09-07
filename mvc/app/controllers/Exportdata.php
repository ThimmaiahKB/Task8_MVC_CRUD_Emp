<?php session_start(); ?>
<?php

    class Exportdata extends Controller{

        public function __construct()
        {
            
        }
        public function export()
        {
            if(isset($_SESSION['name']))
            {
                
                $exp =$this->model('export');
                $result=$exp->fetch_to_export();
                $filename="Exported_data.csv";
                $field=array('id','firstname','lastname','email','phone','street','city','state','country','zip','imagepath');
                
                $output = fopen("php://output", "w"); 
                fputcsv($output,$field);
                foreach($result as $value) {
            
                    fputcsv($output,array($value->emp_id,$value->firstname,$value->lastname,$value->email,$value->phone,$value->street,$value->city,
                                          $value->state,$value->country,$value->zip,$value->imagepath));
                }
                header("Content-type: text/csv");
                header("Content-Disposition: attachment; filename=\"$filename\""); 
                fclose($output); 
            }
            else
            {
                 $this->view('pages/loginforadmin');
            }
    }
}
?>