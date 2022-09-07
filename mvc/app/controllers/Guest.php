<?php

    class Guest extends Controller{

        public function __construct()
        {
            
        }
        public function guestdata()
        {
            $print = $this->model('guestdisplay');
            $fetchedres = $print->fetchalldata();
            $this->view('pages/guest',$fetchedres);
        }
        public function showlog()
        {
            $this->view('pages/index');
        }
    }
?>