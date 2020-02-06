<?php
    Class User extends Core\Controller {
        public function __construct(){

        }

        public function user($id){
            $data = array(
              'pageData' => array (
                'index' =>  'index',
                'title' =>  'Home',
                'zone' =>  'CMS',
                'nav' =>  true
              ),
                'id' => $id
            );
            $this->view('user/user', $data);
        }
    }