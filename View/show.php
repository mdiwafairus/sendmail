<?php require_once("../Controller/showController.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>List Email</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<body>
		<div class="container">
			<div class="header">
				<center><h1>Data Email</h1></center>
			</div>
			<div class="container">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Email</th>
							<th>Sender</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; foreach ($data as $data) { ?>
							<tr>
								<td> <?= $no; ?> </td>
								<td> <?= $data["email"] ?> </td>
								<td> <?= $data["sender"] ?> </td>
							</tr>
							<?php $no++;
						} ?>
					</tbody>
				</table>
				<a href="../home.php" class="btn btn-primary btn-block">Back</a>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
	</html>