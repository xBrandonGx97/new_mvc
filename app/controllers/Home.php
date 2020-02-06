<?php
    Class Home extends Core\Controller {

        public function index(){
            #Display->_load();
            $this->newsModel    =   $this->model('News');
            $this->serverInfo   =   $this->model('ServerInfo');

            $data = array(
              'pageData' => array (
                  'index' =>  'index',
                  'title' =>  'Home',
                  'zone' =>  'CMS',
                  'nav' =>  true
              ),
                'Browser' => Browser::run(),
             # ,
            #    'news' => $this->newsModel->getNews(),
             #   'serverinfo' => $this->serverInfo
            );
            #$ViewData=$this->view('home/homepage', $data);
            #$this->Display->pData =$ViewData;
            #$this->Display->_load();
        }
    }