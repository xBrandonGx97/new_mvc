<?php
    namespace Classes\Settings;
    use Classes\DB\MSSQL;
    class Settings {
        public static function initSettings(){
            $settings = [];
            MSSQL::query('SELECT * FROM ShaiyaCMS.dbo.CMS_MAIN');
            $datas    =   MSSQL::resultSet();
            foreach($datas as $data) {
                $settings[$data->SETTING] = $data->VALUE;
            }
            $_SESSION['Settings'] = $settings;
        }
    }
