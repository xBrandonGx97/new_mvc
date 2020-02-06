<?php
    class Bootstrap{
        private static $debug = true;
        public static function run(){
			self::init();
			self::autoload();
		}
		private static function init(){
            # Load Vendor autoloader
            require(dirname(__DIR__) . '/vendor/autoload.php');
            // Load Config
            require_once 'config/config.php';
			# Define path constants
			define("DS",DIRECTORY_SEPARATOR);
			define("ROOT_PATH",getcwd().DS);
			define("APP_PATH",ROOT_PATH.'../App'.DS);
			define("CLASSES_PATH",APP_PATH."Classes".DS);
			define("FRAMEWORK_PATH",ROOT_PATH."Framework".DS);
			define("PUBLIC_PATH",ROOT_PATH."Public".DS);
			define("CONFIG_PATH",APP_PATH."Config".DS);
			define("CONTROLLER_PATH",APP_PATH."Controllers".DS);
			define("MODELS_PATH",APP_PATH."Models".DS);
			define("VIEWS_PATH",APP_PATH."Views".DS);
			define("CORE_PATH",FRAMEWORK_PATH."Core".DS);
			define('DB_PATH',FRAMEWORK_PATH."Database".DS);
			define("LIB_PATH",FRAMEWORK_PATH."Libraries".DS);
			define("HELPER_PATH",FRAMEWORK_PATH."Helpers".DS);
			define("UPLOAD_PATH",PUBLIC_PATH."Uploads".DS);
			define('SEPARATOR','\\');
			// Define platform, controller, action, for example:
			// index.php?p=admin&c=Goods&a=add
			define("PLATFORM",isset($_REQUEST['p'])?$_REQUEST['p']:'Pages');
			define("CONTROLLER",isset($_REQUEST['c'])?$_REQUEST['c']:'Index');
			define("ACTION",isset($_REQUEST['a'])?$_REQUEST['a'] :'index');
		#	define("CURR_CONTROLLER_PATH",CONTROLLER_PATH.PLATFORM.DS);
		#	define("CURR_VIEW_PATH",VIEWS_PATH.PLATFORM.DS);
			// Load core classes
		#	require(CORE_PATH."Controller.class.php");
		#	require(CORE_PATH."Loader.class.php");
		#	require(DB_PATH."Mysql.class.php");
		#	require(CORE_PATH."Model.class.php");
			// Load configuration file
		#	$GLOBALS['config'] = include CONFIG_PATH . "config.php";
			// Start session
		#	session_start();
		}
		private static function _load_helpers(){
            foreach (scandir(dirname(__FILE__) . '/helpers/') as $filename) {
                $path = dirname(__FILE__) . '/helpers/' . $filename;

                if (is_file($path)) {
                    require_once $path;
                }
            }
        }
        private static function autoload(){
			spl_autoload_register(array(__CLASS__,'load'));
		}
		private static function load($classname){
			$classFile		=	$classname.'.class.php';
			$classPath		=	'';

			if(self::$debug){echo '===> '.__METHOD__.': classname('.$classname.')'.__LINE__.'<br>';}
			if(substr($classname,-10)=="Controller"){
				if(is_file(CONTROLLER_PATH.$classFile)){
					if(self::$debug){echo $classFile.' exists..'.__LINE__.'<br>';}
					$classPath=CONTROLLER_PATH;
				}
				elseif(is_file(CORE_PATH.$classFile)){
					if(self::$debug){echo $classFile.' exists..'.__LINE__.'<br>';}
					$classPath=CORE_PATH;
				}
			}
			elseif(substr($classname,-5)=="Model"){
				if(is_file(MODEL_PATH.$classFile)){
					if(self::$debug){echo $classFile.' exists..'.__LINE__.'<br>';}
					$classPath=MODEL_PATH;
				}
			}
			else{
				$classDir=self::getNamespace($classname);
				$classFile=self::getClassname($classname).'.class.php';
				if(self::$debug){
					echo 'classDir: '.$classDir.'<br>';
					echo 'classFile: '.$classFile.'<br>';
					echo 'Class Path: '.APP_PATH.$classDir.DS.$classFile.' '.__LINE__.'<br>';
				}

				if(is_file(APP_PATH.$classDir.DS.$classFile)){
					if(self::$debug){
						echo $classFile.' exists..'.__LINE__.'<br>';
					}
					$classPath=APP_PATH.$classDir.DS;
				}
			}

			if(!$classPath==''){
				require_once($classPath.$classFile);
				if(self::$debug){echo 'Class '.$classFile.' loaded..'.__LINE__.'<br><br>';}
			}
			else{
				echo $classFile.' does not exist'.__LINE__.'<br>';
			}

			#self::_error();
		}
		private static function getNamespace($path){
			$parts=explode(SEPARATOR,$path);
			array_pop($parts);
			return implode(SEPARATOR,$parts);
		}
		private static function getClassname($path){
			$parts=explode(SEPARATOR,$path);
			return array_pop($parts);
		}
    }






		
