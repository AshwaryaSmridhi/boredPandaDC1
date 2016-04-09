<?php 
//include("inc/header.php");
session_start();
$email = $_SESSION["email1"];

// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";




        
    
try{
  $db = new PDO("mysql:host=localhost;dbname=boredPanda","root","root");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");
  echo "connected";
    
}
catch(Exception $e){
    echo"Could not connect to the database";
    exit;
}

try{
    $results = $db->query("SELECT name, email FROM user WHERE email='$email' ORDER BY id ASC");
    
   echo"here";
}catch(Exception $e){
    echo"Data could not be retrieved";
    exit;
}

echo "<pre>";
var_dump($results->fetchAll(PDO::FETCH_ASSOC));