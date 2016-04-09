<?php
/**
 * Created by PhpStorm.
 * User: Minava
 * Date: 16/3/30
 * Time: PM3:45
 */


dbConnect();

function dbConnect()
{

    $category = null;
    $postcode = null;
    $activityName = null;

    if (isset($_GET["category"]) && strcmp($_GET["category"], 'undefined') != 0) {
        $category = $_GET["category"];
    }

    if (isset($_GET["postcode"]) && strcmp($_GET["postcode"], 'undefined') != 0) {
        $postcode = intval($_GET["postcode"]);
    }

    if (isset($_GET["activityName"]) && strcmp($_GET["activityName"], 'undefined') != 0) {
        $activityName = $_GET["activityName"];
    }

    //create database connect and choose database
    $connect = mysqli_connect('localhost', 'root', 'ricky123', 'phpmyadmin');

    if (!$connect) {
        die("connect error" . mysqli_error());
    }

    //$suburb = $_GET['suburb'];
    //$category = $_GET['category'];

    //sql
    //$sql="select * from user where suburb=".$suburb;

    //wrong typings
    $columnSql = "select COLUMN_NAME from information_schema.COLUMNS
                where table_name = 'Activity'
                and table_schema = 'phpmyadmin'";

    $result = mysqli_query($connect, $columnSql);

    $returnTxt = '';
    //get result
    while ($row = mysqli_fetch_row($result)) {
        //  echo "<br/> $row[0]--$row[1]--$row[2]";


        foreach ($row as $cell) {
            $returnTxt .= "$cell,";
        }

    }
    $returnTxt = substr($returnTxt, 0, -1);


    echo $returnTxt . "\n";
    
    mysqli_free_result($result);

    //$dataSql = "select * from Activity";
    $dataSql = "select * from Activity ";
    $flag = 0;

    if ($activityName != null && strcmp($activityName, 'undefined')!=0) {
        $dataSql .= " WHERE ActivityName LIKE '%$activityName%' ";
        $flag++;
    }

    if ($postcode != null && strcmp($postcode, "undefined") != 0) {
        if ($flag == 0) {
            $dataSql .= " where postcode =" . $postcode . " ";
            $flag++;
        } else {
            $dataSql .= " and postcode =" . $postcode . " ";
            $flag++;
        }
    }

    if ($category != null && strcmp($category, '0')!=0 && strcmp($category, 'undefined')!= 0) {
        if ($flag == 0) {
            $dataSql .= " where categoryId =" . $category . " ";
            $flag++;
        } else {
            $dataSql .= " and categoryId =" . $category . " ";
            $flag++;
        }
    }




    // SELECT * FROM `activity` WHERE activityName like '%ball%'

    // and Suburb='".$suburb."'";

    //echo $suburb;

        $result = mysqli_query($connect, $dataSql);
        $flagTwo = false;


            while ($row = mysqli_fetch_row($result)) {
                //  echo "<br/> $row[0]--$row[1]--$row[2]";
                for ($i = 0; $i < count($row); $i++) {
                    if ($i == count($row) - 1) {
                        echo "$row[$i]";
                    } else {
                        echo "$row[$i],";
                    }
                }
                echo "\n";
            }


            mysqli_free_result($result);
        
    

    mysqli_close($connect);

}
