<!DOCTYPE html>
<html>
<head>
	<title>update</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

	<div class="container" style="margin-top: 20px;">
	  <h2 align="center">Update Example</h2>
	  <form method="post">
	    	<input class="form-control" type="text" name="name" placeholder="Name" required>
			<input class="form-control" type="date" name="dob" placeholder="Date of Birth" required>
			<input class="form-control" type="number" name="std" placeholder="Standard" required>
			<input class="form-control" type="number" name="rollno" placeholder="Roll no" required>
			<input class="form-control" type="text" name="branch" placeholder="Branch" required>
			<input class="btn btn-primary" type="submit" name="submit">
			<input class="btn btn-danger" type="reset" name="reset">	    	
	  </form>
	</div>
	<div class="container">
		  <h2 align="center">Data</h2>        
		  <table class="table table-striped">
		    <thead>
		      <tr>
		        <th>Name</th>
		        <th>DOB</th>
		        <th>Standard</th>
		        <th>Roll no</th>
		        <th>Branch</th>
		        <th>Update</th>
		      </tr>
		    </thead>


		    <?php 

		    	$conn = mysqli_connect('localhost','root','','your_database_name');

		    	$result = "SELECT * FROM `student`";

		    		$select = mysqli_query($conn, $result);

		    		if(mysqli_num_rows($select) == 0){
		    			echo "<tr><td colspan = '6' align='center' >no data found</td></tr>";
		    		}else{
		    			while($data=mysqli_fetch_assoc($select)){
		    				$id = $data['id'];
						  		$name = $data['name'];
						  		$dob = $data['DOB'];
						  		$std = $data['standard'];
						  		$rollno = $data['roll no.'];
						  		$branch = $data['branch'];
						  		
						  		echo "<tr>
						  				<td>$name</td>
						  				<td>$dob</td>
						  				<td>$std</td>
						  				<td>$rollno</td>
						  				<td>$branch</td>
						  				<td><a href='updation_form.php?id=$id'>Update</a></td>
						  			</tr>";				
		    			}
		    		}

		    	if(isset($_POST['submit'])){
		    		if($_POST['name'] && $_POST['dob'] && $_POST['std'] && $_POST['rollno'] && $_POST['branch']){
		    			$name = $_POST['name'];
		    			$dob = $_POST['dob'];
		    			$std = $_POST['std'];
		    			$rollno = $_POST['rollno'];
		    			$branch = $_POST['branch'];

		    			
		    			if(!$conn){
		    				die("connection error");
		    			}
		    			else{

		    				$query = "INSERT INTO `student` (`name`, `DOB`, `standard`, `roll no.`, `branch`) values ('$name' , '$dob' , $std , $rollno , '$branch')";
		    				
		    				$runn = mysqli_query($conn,$query);
		    				if($runn){

		    					header('location:index.php');
		    					
		    				}else{
		    					
		    					echo '<script> alert("query error"); </script>';
		    				}
		    			}  			

		    		}
		    		else{
		    			echo '<script> alert("enter valid input"); </script>';
		    		}
		    	}

		     ?>

		  </table>
		</div>
</body>
</html>
