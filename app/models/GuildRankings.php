<?php
    class GuildRankings {

        public function __construct(){
            $this->MSSQL   =   new Classes\DB\MSSQL;
        }

        public function getGuildRankings(){
            $sql    =   ("
                            SELECT TOP 15* FROM PS_GameData.dbo.Guilds AS [G]
                            INNER JOIN PS_GameData.dbo.GuildDetails AS [GD] ON [GD].[GuildID] = [G].[GuildID]
                            WHERE DEL=:del AND GuildPoint!=:point ORDER BY GuildPoint DESC"
            );
            $this->MSSQL->query($sql);
            $this->MSSQL->bind(':del', 0);
            $this->MSSQL->bind(':point', 0);
            $res = $this->MSSQL->resultSet();
            return $res;
        }
    }