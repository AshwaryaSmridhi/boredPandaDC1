<?php
/**
 * Created by PhpStorm.
 * User: YANG LU
 * Date: 16/3/29
 * Time: PM4:32
 */

include_once "SqlTool.class.php";

datasetResult();

function datasetResult(){
    //later change to search db according to id;

    $name=null;
    $category=null;
    $postcode=null;

    if (isset($_GET["category"]) && strcmp($_GET["category"], 'undefined') != 0 && strcmp($_GET["category"], '0') != 0) {
        $category = $_GET["category"];
    }

    if (isset($_GET["postcode"]) && strcmp($_GET["postcode"], 'undefined') != 0) {
        $postcode = intval($_GET["postcode"]);
    }

    if (isset($_GET["activityName"]) && strcmp($_GET["activityName"], 'undefined') != 0) {
        $activityName = $_GET["activityName"];
    }

    $columnSql = "select COLUMN_NAME from information_schema.COLUMNS
                where table_name = 'OpenData'
                and table_schema = 'phpmyadmin'";

    $sqlTool = new SqlTool();

    $result = $sqlTool->execute_dql($columnSql);

    $returnTxt = '';
    //get result
    while ($row = mysqli_fetch_row($result)) {
        //  echo "<br/> $row[0]--$row[1]--$row[2]";
        foreach ($row as $cell) {
            $returnTxt .= "$cell^";
        }
    }
    $returnTxt = substr($returnTxt, 0, -1);


    echo $returnTxt . "\n";

    mysqli_free_result($result);

    //$dataSql = "select * from Activity";
    $dataSql = "select * from OpenData ";
    $flag = 0;

    if ($activityName != null && strcmp($activityName, 'undefined')!=0) {
        $dataSql .= " WHERE Name LIKE '%$activityName%' or Business like '%$activityName%'";
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

        } else {
            $dataSql .= " and categoryId =" . $category . " ";

        }
    }


    $result = $sqlTool->execute_dql($dataSql);


    while ($row = mysqli_fetch_row($result)) {
        //  echo "<br/> $row[0]--$row[1]--$row[2]";
        for ($i = 0; $i < count($row); $i++) {
            if ($i == count($row) - 1) {
                echo "$row[$i]";
            } else {
                echo "$row[$i]^";
            }
        }
        echo "\n";
    }


    mysqli_free_result($result);


}