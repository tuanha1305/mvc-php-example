<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Book</title>
	<link rel="stylesheet" type="text/css" href="views/style/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<form action="" method="POST" role="form">
					<legend>Add book</legend>
				
					<div class="form-group">
						<label for="">Title</label>
						<input type="text" class="form-control" name="title">
					</div>
					<div class="form-group">
						<label for="">Author</label>
						<input type="text" class="form-control" name="author">
					</div>
					<div class="form-group">
						<label for="">Description</label>
						<input type="text" class="form-control" name="description">
					</div>
				
					<button name="btnAdd" type="submit" class="btn btn-primary">Add</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>