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
          header('Location: http://localhost/mvc/Pages/go');
          exit();
        }
        else
        {
          $this->view('pages/loginforadmin');
        }
    }
    public function go()
    {
      $print = $this->model('display');
      $fetchedres = $print->fetchalldata();
      $this->view('pages/adminpage',$fetchedres);
    }
    public function adminlogincheck()
    {

      if(!isset($_SESSION['name']))
      {
        $adminname = $_POST['adminname'];
          $adminpassword = $_POST['adminpassword'];
          if(admin_name==$adminname && admin_password==$adminpassword)
          {
            $_SESSION['name']=$adminname;
            $print = $this->model('display');
            $fetchedres = $print->fetchalldata();
            $this->view('pages/adminpage',$fetchedres);
        
          }
          else
          {
             $e = [
               'ee' => "wrong username or password"
             ];
             $this->view('pages/loginforadmin',$e);
          }

      }
      else
      {
        header('Location: http://localhost/mvc/Pages/go');
        exit();

      }
     
        
          
       
    }
    public function addnewemp()
    {
      if(isset($_SESSION['name']))
      {
        $connectmodel=$this->model('addnewdetails');
        $outcome=$connectmodel->insert();
        if($outcome)
        {
          $print = $this->model('display');
          $fetchedres = $print->fetchalldata();
          $this->view('pages/adminpage',$fetchedres);
        }
        else
        {
          
           $error_email = [
           'error' => 'Email exists'
          ];
          $this->view('pages/adminpage',$error_email);
        }
      }
      else
      {
        $this->view('pages/loginforadmin');
      }
    }
    
    
    public function display()
    {
      if(isset($_SESSION['name']))
      {
        $print = $this->model('display');
        $fetchedres = $print->fetchalldata();
        $this->view('pages/adminpage',$fetchedres);
      }
      else
      {
        $this->view('pages/loginforadmin');
      }
    }
    public function delete($emp_id)
    {

      $del = $this->model('delete');  
      $del->delete_emp($emp_id);

      $print = $this->model('display');
      $fetchedres = $print->fetchalldata();

      $this->view('pages/adminpage',$fetchedres);
    }


    public function update($emp_id)
    {
      if(isset($_SESSION['name']))
      {
        $up = $this->model('update');
        $found = $up->find($emp_id);
        
        if(isset($_POST['edit']))
        {
            
            $c =$this->model('update');
            $c->update_data($found);
            $this->view('pages/edit');
        }
        else
        {
          $this->view('pages/edit',$found);
        }
      }
      else
      {
         $this->view('pages/loginforadmin');
      }
    }
    public function logout()
    {
      
      session_unset();
      session_destroy();
      $this->view('pages/loginforadmin');
     
    }
    
  }
  ?>