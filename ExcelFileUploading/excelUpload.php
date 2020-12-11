<?php


require('library/php-excel-reader/excel_reader2.php');
require('library/SpreadsheetReader.php');
require('db_connect.php');


if(isset($_POST['Submit'])){


  $file_name1 = $_FILES['file']['name'];
  $file_parts = explode('.',$file_name1);
  $file_ext=strtolower(end($file_parts));
  $extensions= array("xls","xlsx");
  if(in_array($file_ext,$extensions)){

    $uploadFilePath = 'upload/'.basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath);


    $Reader = new SpreadsheetReader($uploadFilePath);


    $totalSheet = count($Reader->sheets());


    echo "You have total ".$totalSheet." sheets".


    $html="<table border='1'>";
    $html.="<tr><th>Title</th><th>Description</th></tr>";


    /* For Loop for all sheets */
    for($i=0;$i<$totalSheet;$i++){


      $Reader->ChangeSheet($i);


      foreach ($Reader as $Row)
      {
        $html.="<tr>";
        $title = isset($Row[0]) ? $Row[0] : '';
        $description = isset($Row[1]) ? $Row[1] : '';
        $html.="<td>".$title."</td>";
        $html.="<td>".$description."</td>";
        $html.="</tr>";


        $query = "insert into items(title,description) values('".$title."','".$description."')";
        $mysqli->query($query);
       }


    }


    $html.="</table>";
    echo $html;
    echo "<br />Data Inserted in dababase";


  }else { 
    die("<br/>Sorry, File type is not allowed. Only Excel file."); 
  }


}


?>
