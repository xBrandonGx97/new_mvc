<?php
    class PatchNotes {

        public function __construct(){
            $this->MSSQL   =   new Classes\DB\MSSQL;
        }

        public function getPatchNotes(){
            $this->MSSQL->query('SELECT * FROM ShaiyaCMS.dbo.PATCH_NOTES ORDER BY Date DESC');
            $res = $this->MSSQL->resultSet();
            return $res;
        }
    }