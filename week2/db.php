<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2019/2/26
 * Time: 10:13
 */

namespace db;


class db
{
    private static $db;
    private static $dsn;

    private  function __construct($sj)
    {
        print_r($sj);die;
        $dsn = "mysql:host=localhost;dbname=oms";
        $db = new PDO($dsn, 'root', 'root');
    }

    private  function __clone()
    {
        // TODO: Implement __clone() method.
    }


    public static function  git(){
        echo 111;
    }


}

db();