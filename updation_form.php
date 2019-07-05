<?php 
	
	$id = $_REQUEST['id'];

	$conn = mysqli_connect('localhost','root','','training');

	$sql = " SELECT * FROM `student` where id='$id'";
	$runn = mysqli_query($conn, $sql);

	$data = mysqli_fetch_assoc($runn);
		$id = $data['id'];
		$name = $data['name'];
		$dob = $data['DOB'];
		$std = $data['standard'];
		$rollno = $data['roll no.'];
		$branch = $data['branch'];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Update</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 </head>
 <body>

 	<div class="container">
	  <h2>Update Example</h2>
	  <form action="updating.php"  method="post">
	    	<input class="form-control" type="text" name="name" value="<?php echo($name) ?>" placeholder="Name" required>
			<input class="form-control" type="date" name="dob" value="<?php echo($dob) ?>" placeholder="Date of Birth" required>
			<input class="form-control" type="number" name="std" value="<?php echo($std) ?>" placeholder="Standard" required>
			<input class="form-control" type="number" name="rollno" value="<?php echo($rollno) ?>" placeholder="Roll no" required>
			<input class="form-control" type="text" name="branch" value="<?php echo($branch) ?>" placeholder="Branch" required>
			<input type="hidden" name="id" value="<?php echo($id) ?>">
			<input class="btn btn-primary" type="submit">	    	
	  </form>
	</div>
 
 </body>
 </html>