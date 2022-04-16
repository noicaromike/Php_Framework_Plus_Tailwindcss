<?php 

    class Pages extends Controller {
        public function __construct(){
            $this->pageModel = $this->model('Page');
        }
        


        public function page(){
        
            $data=[
    
                'title' => 'this is home',
            ];
            $this->view('page',$data);
        }


    }

   