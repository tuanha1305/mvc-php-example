<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Book</title>
	<link rel="stylesheet" type="text/css" href="views/style/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<form action="" method="POST" role="form">
					<legend>Edit book</legend>
				
					<div class="form-group">
						<label for="">Id</label>
						<input type="text" class="form-control" name="title" value="<?php echo $book['id'] ?>" disabled>
					</div>
					<div class="form-group">
						<label for="">Title</label>
						<input type="text" class="form-control" name="title" value="<?php echo $book['title'] ?>">
					</div>

					<div class="form-group">
						<label for="">Author</label>
						<input type="text" class="form-control" name="author" value="<?php echo $book['author'] ?>">
					</div>
					<div class="form-group">
						<label for="">Description</label>
						<input type="text" class="form-control" name="description" value="<?php echo $book['description'] ?>">
					</div>

				
					
				
					<button name="btnEdit" type="submit" class="btn btn-primary">Edit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>