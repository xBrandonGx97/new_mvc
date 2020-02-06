<?php
    namespace Core;
    use Jenssegers\Blade\Blade;
    use Classes\Utils\Browser;
    use Classes\Utils\Data;
    use Classes\Utils\Helpers;
    use Classes\Utils\Modal;
    use Classes\DB\MSSQL;
    use Classes\utils\PHP;
    use Classes\Settings\Settings;
    use Classes\DB\SQL;
    use Classes\Utils\Template;
    use Classes\Base\Display;
    class Controller {

        // Load model
        public static function model($model){
            // Require model file
            require_once '../app/models/' . $model . '.php';

            // Instantiate model
            return new $model();
        }

        // Load view
        public static function view($view, $data = []){
            $blade = new Blade('../app/views', 'cache');
            // Check for view file
            if(file_exists('../app/views/' . $view . '.blade.php')){
                $page=$blade->make($view, ['data' => $data])->render();
                return $page;
                #require_once '../app/views/' . $view . '.php';
            } else {
                // View does not exist
                die('View does  not exist');
            }
        }
    }