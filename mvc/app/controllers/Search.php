<?php session_start(); ?>
<?php
  class Search extends Controller {
    
    public function __construct(){


    }
    public function search_emp()
    {
        if(isset($_SESSION['name'])){

        $search = $this->model('search_emp');
        $keyname=$_POST['searchemployee'];
        $searchresult = $search->find_data($keyname);
        
        if($searchresult){
            $this->view('pages/adminpage',$searchresult);
        }
        else{
            $search_error = [
                's_error' => "user not found"
            ];
            $this->view('pages/adminpage',$search_error);
        }
    }
    else{
        $this->view('pages/loginforadmin');
    }

    }
}