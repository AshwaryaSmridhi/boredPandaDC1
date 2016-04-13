<?php
/**
 * Created by PhpStorm.
 * User: YANG LU
 * Date: 10/04/2016
 * Time: 3:22 PM
 */

class SqlTool
{
    private $host;
    private $user;
    private $password;
    private $db;

    private $conn;


    function SqlTool(){
        $host = 'localhost';
        $user="root";
        $password="ricky123";
        $db="phpmyadmin";
        $this->conn=mysqli_connect($host,$user,$password,$db);
        if(!$this->conn){
            die("connect errorl".mysqli_error());
        }
    }

    //select
    public function execute_dql($sql){
        $result=mysqli_query($this->conn,$sql) or die(mysqli_error());

        return $result;
    }

    public function execute_dml($sql){
        $result=mysqli_query($this->conn,$sql);

        if(!$result){
            mysqli_free_result($result);
            return 0; //failed
        }else{
            if(mysqli_affected_rows($this->conn)>0){
                mysqli_free_result($result);
                return 1; //success
            }
            else{
                mysqli_free_result($result);
                return 2; //success but no rows changed
            }
        }
    }



}