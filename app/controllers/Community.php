<?php
    Class Community extends Core\Controller {
        public function __construct(){
            $this->newsModel            =   $this->model('News');
            $this->patchNotesModel      =   $this->model('PatchNotes');
            $this->guildRankingsModel   =   $this->model('GuildRankings');
        }

        public function discord(){
            $data = array(
              'pageData' => array (
                'index' =>  'index',
                'title' =>  'Home',
                'zone' =>  'CMS',
                'nav' =>  true
              )
            );
            $this->view('community/discord', $data);
        }

        public function downloads(){
            $data = array(
              'pageData' => array (
                'index' =>  'index',
                'title' =>  'Home',
                'zone' =>  'CMS',
                'nav' =>  true
              )
            );
            $this->view('community/downloads', $data);
        }

        public function guildrankings(){
            $data = array(
              'pageData' => array (
                'index' =>  'index',
                'title' =>  'Home',
                'zone' =>  'CMS',
                'nav' =>  true
              ),
                'guildrankings' => $this->guildRankingsModel->getGuildRankings(),
            );
            $this->view('community/guildrankings', $data);
        }

        public function guilds(){
            $data = array(
              'pageData' => array (
                'index' =>  'index',
                'title' =>  'Home',
                'zone' =>  'CMS',
                'nav' =>  true
              )
            );
            $this->view('community/guilds', $data);
        }

        public function news(){
            $data = array(
              'pageData' => array (
                'index' =>  'index',
                'title' =>  'Home',
                'zone' =>  'CMS',
                'nav' =>  true
              ),
                'news' => $this->newsModel->getNews(),
            );
            $this->view('community/news', $data);
        }

        public function patchnotes(){
            $data = array(
              'pageData' => array (
                'index' =>  'index',
                'title' =>  'Home',
                'zone' =>  'CMS',
                'nav' =>  true
              ),
                'patchnotes' => $this->patchNotesModel->getPatchNotes(),
            );
            $this->view('community/patchnotes', $data);
        }

        public function pvprankings(){
            $data = array(
              'pageData' => array (
                'index' =>  'index',
                'title' =>  'Home',
                'zone' =>  'CMS',
                'nav' =>  true
              )
            );
            $this->view('community/pvprankings', $data);
        }

        public function staffteam(){
            $data = array(
              'pageData' => array (
                'index' =>  'index',
                'title' =>  'Home',
                'zone' =>  'CMS',
                'nav' =>  true
              )
            );
            $this->view('community/staffteam', $data);
        }
    }