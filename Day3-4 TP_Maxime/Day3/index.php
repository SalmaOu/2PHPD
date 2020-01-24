<!Doctype>
<html>

	<head>
		<title>Exercice Day 3</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>

	<body>
		<div class="form">
			<form action="insert_series.php" method="post">
				<div class="row">
					<div class="form-group col-md-6">
						<input name="Titre" type="text" class="form-control" placeholder="Titre">
					</div>
					<div class="col">
						<input name="Auteur" type="text" class="form-control" placeholder="Auteur">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputEmail4">Note</label>
						<input name="Note" type="number" class="form-control" id="inputEmail4">
					</div>
				</div>
				<div class="form-group">
					<label for="inputAddress">Created Date</label>
					<input name="Date" type="Date" class="form-control" id="inputAddress" placeholder="Date de Création">
				</div>
				<input name="submit" type="submit" class="btn btn-primary">
			</form>
		</div>
	</body>
</html>

<?php include "select_series.php" ?>