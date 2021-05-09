<?php 
include_once('config.php');


?>

<!doctype html>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Midterm CRUD</title>
	
	<link rel="shortcut icon" href="https://demo.learncodeweb.com/favicon.ico">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Nova Flat' rel='stylesheet'>

<style>
body{
	font-family: 'Nova Flat';
	background-image: url(image4.gif);
}
</style>
</head>

<body>

	
	<?php
	
	?>
   	<div class="container pt-4">
		<center><h1>Midterm CRUD</h1></center>	
		<div class="card pt-4">
			<div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>Browse User</strong> <a href="add-employee.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i> Add Users</a></div>
			<div class="card-body">
				<div class="col-sm-12">
					<h5 class="card-title"><i class="fa fa-fw fa-search"></i> Find User</h5>
					<form method="get">
						<div class="row">
							<div class="col-sm-2">
								<div class="form-group">
									<label>First Name</label>
									<input type="text" name="firstname" id="firstname" class="form-control" value="<?php echo isset($_REQUEST['firstname'])?$_REQUEST['firstname']:''?>" placeholder="Enter first name">
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Middle Name</label>
									<input type="middlename" name="middlename" id="middlename" class="form-control" value="<?php echo isset($_REQUEST['middlename'])?$_REQUEST['middlename']:''?>" placeholder="Enter middlename">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label>&nbsp;</label>
									<div>
										<button type="submit" name="submit" value="search" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-search"></i> Search</button>
										<a href="http://192.168.0.28/AIS_WEBAPI/delete-all.php" class="btn btn-danger"><i class="fa fa-fw fa-sync"></i> Clear</a>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<hr>
		
		<div>
			<table class="table table-striped table-bordered">
				<thead>
					<tr class="bg-primary text-white">
					<th>ID</th>
					<th>FIRST NAME</th>
					<th>MIDDLE NAME</th>
					<th>LAST NAME</th>
					<th>ADDRESS</th>
					<th>AGE</th>
					<th>GENDER</th>
					<th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					
					$sql = "SELECT * FROM employee";

					//execute the query

					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
                        //output data of each row
                        while ($row = $result->fetch_assoc()) {
					?>
					<tr>
						<td><center><?php echo $row['id']; ?></center></td>
						<td><center><?php echo $row['firstname']; ?></center></td>
						<td><center><?php echo $row['middlename']; ?></center></td>
						<td><center><?php echo $row['lastname']; ?></center></td>
						<td><center><?php echo $row['employeeAddress']; ?></center></td>
						<td><center><?php echo $row['age']; ?></center></td>
						<td><center><?php echo $row['gender']; ?></center></td>
						<td align="center">
							<a href="edit-employee.php?editId=<?php echo $row['id'];?>" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> | 
							<a href="http://192.168.0.28/AIS_WEBAPI/delete-employee.php?delId=<?php echo $row['id'];?>" class="text-danger"><i class="fa fa-fw fa-trash"></i> Delete</a>
						</td>

					</tr>
					<?php 
						}
					}else{
					?>
					<tr>
						<td colspan="8" align="center">No Record(s) Found!</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div> <!--/.col-sm-12-->
		
	</div>
	
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/jquery.caret/0.1/jquery.caret.js"></script>
	<script src="https://www.solodev.com/_/assets/phone/jquery.mobilePhoneNumber.js"></script>
	<script
  src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
  crossorigin="anonymous"></script>
    <script>
		$(document).ready(function() {
			jQuery(function($){
				  var input = $('[type=tel]')
				  input.mobilePhoneNumber({allowPhoneWithoutPrefix: '+1'});
				  input.bind('country.mobilePhoneNumber', function(e, country) {
					$('.country').text(country || '')
				  })
			 });
			 
			 //From, To date range start
			var dateFormat	=	"yy-mm-dd";
			fromDate	=	$(".fromDate").datepicker({
				changeMonth: true,
				dateFormat:'yy-mm-dd',
				numberOfMonths:2
			})
			.on("change", function(){
				toDate.datepicker("option", "minDate", getDate(this));
			}),
			toDate	=	$(".toDate").datepicker({
				changeMonth: true,
				dateFormat:'yy-mm-dd',
				numberOfMonths:2
			})
			.on("change", function() {
				fromDate.datepicker("option", "maxDate", getDate(this));
			});
			
			
			function getDate(element){
				var date;
				try{
					date = $.datepicker.parseDate(dateFormat,element.value);
				}catch(error){
					date = null;
				}
				return date;
			}
			//From, To date range End here	
			
		});
	</script>
</body>
</html>
