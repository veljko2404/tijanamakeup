<?php
session_start();
$pass = $_SESSION['pas'];
$true_pass = 'termini94';
if($pass==$true_pass){
require 'connect.php';
if(isset($_GET['action'])){
	if($_GET['action']=='delete'){
		$id = $_GET['id'];
		$query = "DELETE FROM termini WHERE id=".$id."";
		$query_run = mysqli_query($conn, $query);
	}
}
	?>

<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <style type="text/css">
  	td, td, th {
  		padding:10px;
  	}
  </style>
</head>
<body>
<div class="container">
	<table class="table-striped" width="100%">
		<tr style="background-color:#8c1aff !important; color:white;">
			<th width="25%" class="text-center">Име</th>
			<th width="25%" class="text-center">Број</th>
			<th width="25%" class="text-center">Време</th>
			<th width="25%" class="text-center">Брисање</th>
		</tr>

<?php

$query = 'SELECT * FROM `termini` ORDER BY `id` ASC';
$query_run = mysqli_query($conn, $query);
if(mysqli_num_rows($query_run) > 0) {
	while($row = mysqli_fetch_array($query_run)){
?>
			<tr style="border-bottom:1px solid rgba(0,0,0,0.5);">
				<td width="25%" class="text-center"><?php echo $row['ime']; ?></td>
				<td width="25%" class="text-center"><?php echo $row['broj']; ?></td>
				<td width="25%" class="text-center"><?php echo $row['vreme']; ?></td>
				<td width="25%" class="text-center"><a href="termini.php?action=delete&id=<?php echo $row['id']; ?>">Обриши</a></td>
			</tr>

<?php } } ?>

	</table>
</div>
</body>
</html>
<?php } ?>
