<?php
    namespace Classes\Base;
    class Content {
        public function __construct($Browser,$MSSQL){
            $this->Browser  =   $Browser;
            $this->MSSQL    =   $MSSQL;
        }
        public function _load(){
            echo $this->PageData;
        }
        public function _set_local($var,$data){
			$err	=	'Fatal error in <b>'.get_class($this).'<br>';
			$err	.=	'Error: Var '.$var.' was called, but it doesn\'t exist!';
			$err2	=	'Var '.$var.' isn\'t empty. Unable to set..';

			$err3	=	'Var doesn\'t exist..';

			try{
			#	echo "Var ($var) has been set to ($data)<br>";
				$this->$var=$data;
			}
			catch(exception $e){
				throw new \Classes\Exception\SystemException($err,0,0,__FILE__,__LINE__);
			}
		}
    }
