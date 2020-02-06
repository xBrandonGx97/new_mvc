<?php
    namespace Classes\Base;
    class Display {
        public $pData;
        public function __construct($Browser,$MSSQL){
            $this->Browser  =   $Browser;
            $this->MSSQL    =   $MSSQL;
        }
        public function _load(){
            $this->_load_content();
        }

        private function _load_content(){
            $this->Content	=	new Content($this->Browser,$this->MSSQL);
            $this->Content->_set_local("PageData",$this->pData);
            $this->Content->_load();
        }
    }
