<?php session_start(); ?>
<?php
  class Pages extends Controller {
    
    public function __construct(){


    }
    
    public function index(){
      $data = [
        'title' => 'Employee Management',
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }
    public function showloginpage()
    {
        if(isset($_SESSION['name']))
        {
          $redirectURI = URLROOT.'pages/go';
          header('Location: '. $redirectURI);
          exit();
        
        }
        else
        {
          $this->view('pages/loginforadmin');
        }
    }
    public function go()
    {
      if(isset($_SESSION['name'])){
        $print = $this->model('display');
        $fetchedres = $print->fetchalldata();
        $this->view('pages/adminpage',$fetchedres);
      }
      else{
        $redirectURI = URLROOT.'pages/showloginpage';
        header('Location: '. $redirectURI);
        exit();
      }

    }
    public function adminlogincheck()
    {

      if(!isset($_SESSION['name'])){

        $adminname = $_POST['adminname'];
          $adminpassword = $_POST['adminpassword'];
          if(admin_name==$adminname && admin_password==$adminpassword){

            $_SESSION['name']=$adminname;
            $print = $this->model('display');
            $fetchedres = $print->fetchalldata();
            $this->view('pages/adminpage',$fetchedres);
        
          }
          else{
             $loginerror = [
               'loginerror' => "wrong username or password"
             ];
            $this->view('pages/loginforadmin',$loginerror);
          }

      }
      else{
        $redirectURI = URLROOT.'pages/go';
        header('Location: '.$redirectURI);
        exit();
      }
     
        
          
       
    }
    public function addnewemp()
    {
      if(isset($_SESSION['name'])){
        $connectmodel=$this->model('addnewdetails');
        $outcome=$connectmodel->insert();
        if($outcome){
          $print = $this->model('display');
          $fetchedres = $print->fetchalldata();
          $this->view('pages/adminpage',$fetchedres);
        }
        else{
            
           $error_email1 = "email already exist";
        
          $this->view('pages/adminpage',$error_email1);
        }
      }
      else{
        $this->view('pages/loginforadmin');
      }
    }
    
    
    public function display()
    {
      if(isset($_SESSION['name'])){
        $print = $this->model('display');
        $fetchedres = $print->fetchalldata();
        $this->view('pages/adminpage',$fetchedres);
      }
      else{
        $this->view('pages/loginforadmin');
      }
    }
    public function delete($emp_id)
    {
      if(isset($_SESSION['name'])){
        $del = $this->model('delete');  
        $del->delete_emp($emp_id);
        $print = $this->model('display');
        $fetchedres = $print->fetchalldata();
        $this->view('pages/adminpage',$fetchedres);
      }
      else{
        $redirectURI = URLROOT.'pages/showloginpage';
        header('Location: '.$redirectURI);
        exit();
      }
      
    }


    public function update($emp_id)
    {
      
      if(isset($_SESSION['name'])){
        
        $up = $this->model('update');
        $found = $up->find($emp_id);

        if($found){
          if(isset($_POST['edit'])){
              
              $c =$this->model('update');
              $c->update_data($found);
              $this->view('pages/adminpage',$this->getData());
          }
          else{
            $this->view('pages/edit',$found);
          }       
        }
        else{
          $this->view('pages/adminpage',$this->getData());
        }
      }
      else{
         $this->view('pages/loginforadmin');
      }
    }
    public function getData()
    {
      $print = $this->model('display');
      $fetchedres = $print->fetchalldata();
      return $fetchedres;

    }
    public function logout()
    { 

      session_unset();
      session_destroy();
      $redirectURI = URLROOT.'pages/showloginpage';
      header('Location: '. $redirectURI);
      exit();
    }
    
  }
  ?>