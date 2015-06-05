<?php

use yii\helpers\Html;
  // do some validation here to ensure id is safe

  //$link = mysql_connect("127.0.0.1", "root", "");
  //mysql_select_db("hos");
  //$sql = "SELECT * FROM patient_image";
  //$result = mysql_query("$sql");
  //$row = mysql_fetch_assoc($result);
  //mysql_close($link);


  if (isset($model->image)) {
        header("Content-type: image/jpeg");
      echo $model->image;
  }else{
      $fp = fopen('./blank.jpg', 'rb');
      $file_content = file_get_contents('./blank.jpg');
      echo $file_content;
      //  echo $model->image;
      //$imagedata = file_get_contents("./blank.jpg");
             // alternatively specify an URL, if PHP settings allow
      //$base64 = base64_encode($imagedata);
      //echo $base64;
    //  echo "<img src=\"./blank.jpg\"/blank.jpg\">";
  }