<?php
/**
 * Created by PhpStorm.
 * User: Minava
 * Date: 16/3/29
 * Time: PM4:32
 */


datasetResult();


function datasetResult(){
    //later change to search db according to id;

    $category=$_GET['category'];
    $postcode=$_GET['postcode'];
    
    $row = 1;
    $file_name='dataset/'.$category.'.csv';
    $flag = false;
    
    if(!file_exists($file_name)){
        echo"no such activity information";
    }else{
        $flag = true;
    }


    if ($flag){
    $file_open=fopen($file_name,"r") or die("Unable to open file!");

    $dataset='';
    //loop part get from php documentation (php.net)
    while (($data = fgetcsv($file_open, 1000, ",")) != FALSE) {
        $num = count($data);
        $row++;


        $onePoint='';
        for ($c=0; $c < $num; $c++) {
            $onePoint.=$data[$c].',';
        }
        $dataset.=substr($onePoint,0,-1)."##";
        
    }
    $dataset = substr($dataset,0,-2);
    fclose($file_open);
    //return $dataset;
    print $dataset;
    }
}