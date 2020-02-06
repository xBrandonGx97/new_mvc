<?php
    Class ServerInfo extends Core\Controller {
        public function __construct(){
            $this->bossRecords   =   $this->model('BossRecords');
        }

        public function about(){
            $data = array(
              'pageData' => array (
                'index' =>  'index',
                'title' =>  'Home',
                'zone' =>  'CMS',
                'nav' =>  true
              )
            );
            $this->view('serverinfo/about', $data);
        }

        public function bossrecords(){
            $data = array(
              'pageData' => array (
                'index' =>  'index',
                'title' =>  'Home',
                'zone' =>  'CMS',
                'nav' =>  true
              ),
                'bossrecords' => $this->bossRecords,
            );
            $this->view('serverinfo/bossrecords', $data);
        }

        public function dropfinder(){
            $data = array(
              'pageData' => array (
                'index' =>  'index',
                'title' =>  'Home',
                'zone' =>  'CMS',
                'nav' =>  true
              )
            );
            $this->view('serverinfo/dropfinder', $data);
        }

        public function drops(){
            $data = array(
              'pageData' => array (
                'index' =>  'index',
                'title' =>  'Home',
                'zone' =>  'CMS',
                'nav' =>  true
              )
            );
            $this->view('serverinfo/drops', $data);
        }

        public function terms(){
            $data = array(
              'pageData' => array (
                'index' =>  'index',
                'title' =>  'Home',
                'zone' =>  'CMS',
                'nav' =>  true
              )
            );
            $this->view('serverinfo/terms', $data);
        }
    }