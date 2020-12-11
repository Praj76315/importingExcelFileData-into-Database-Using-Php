
<!--   Section for displaying alert of success or error  -->

<?php
if(isset($_GET['uploadfail']) && $_GET['uploadfail']=="true"){
	echo ' <div class="ml-5 mr-5 text-center alert alert-warning alert-dismissible fade show my-0" role="alert">
		   <strong>Error!</strong> Sorry, File type is not allowed. Only CSV file.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		   <span aria-hidden="true">&times;</span>
		 </button>
			</div>';
  }
if(isset($_GET['import']) && $_GET['import']=="true"){
	echo ' <div class="ml-5 mr-5 text-center alert alert-success alert-dismissible fade show my-0" role="alert">
		   <strong>Success!</strong> CSV File, imported successfully in database.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		   <span aria-hidden="true">&times;</span>
		 </button>
			</div>';
  }
?>

<!-- Section of alert ends here -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Excel Uploading PHP</title>
</head>
<body>
<div class="container">
	<h1>Excel Upload</h1>
	<form method="POST" action="csvUpload.php" enctype="multipart/form-data">
		<div class="form-group">
			<label>Upload Excel File</label>
			<input type="file" name="file" class="form-control" >
		</div>
		<div class="form-group">
			<button type="submit" name="Submit" class="btn btn-success">Upload</button>
		</div>
	</form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>