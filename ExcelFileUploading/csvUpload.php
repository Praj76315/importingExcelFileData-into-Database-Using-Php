<body>
<div id="container">
<div id="form">

<?php
include'db_Connect.php';
if (isset($_POST['Submit'])) {
    $file_name1 = $_FILES['file']['name'];
    $file_parts = explode('.',$file_name1);
    $file_ext=strtolower(end($file_parts));
    $extensions= array("csv");
    if(in_array($file_ext,$extensions)){
    //Import uploaded file to Database
    $handle = fopen($_FILES['file']['tmp_name'], "r");
    $i=0;
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    if($i>0){
        $import="INSERT into importing(text,number)values('".$data[0]."','".$data[1]."')";
        mysqli_query($mysqli,$import) or die(mysqli_error($mysqli));
        header('location:index.php?import=true');
    }
    $i+=1;
    }

    fclose($handle);

//view upload form
} 
else { 
        echo"<br/>Sorry, File type is not allowed. Only CSV file.";
        header('location:index.php?uploadfail=true'); 
      }

}

?>

</div>
</div>
</body>