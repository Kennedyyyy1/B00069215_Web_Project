<?php
/**
 * Created by PhpStorm.
 * User: Ross
 * Date: 02/05/2016
 * Time: 20:46
 */

namespace Itb;


class DB_Manager
{

    private $host = 'DB_HOST';

    private $user = 'DB_USER';

    private $pass = 'DB_PASS';

    private $dbname = 'DB_NAME';

    private $dbhandler;

    private $error;

    public function _construct(){
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;
        try{
            $options = array(
                \PDO::ATTR_PERSISTENT => true,
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            );
            $this->dbhandler = new \PDO($dsn, $this->user, $this->pass, $options);
        }catch(\PDOException $e){
            $this->error = $e->getMessage();
            print 'sorry and error has occured, please contact the site administrator';
            print $e->getMessage();
        }
    }

    public function getDBH(){
        return $this->dbhandler;
    }

}