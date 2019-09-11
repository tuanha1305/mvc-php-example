<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Book List</title>
	<link rel="stylesheet" type="text/css" href="views/style/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Title</th>
							<th>Author</th>
							<th>Description</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($books as $book): ?>
						<tr>
							<td><a href="index.php?id=<?php echo $book['id'] ?>&action=viewbook"><?php echo $book['title'] ?></a></td>
							<td><?php echo $book['author'] ?></td>
							<td><?php echo $book['description'] ?></td>
							<td>
								<a class="btn btn-info btn-xs" href="index.php?action=edit&id=<?php echo $book['id'] ?>">Sửa</a>
								<a class="btn btn-danger btn-xs" onclick="return confirm('Bạn chắc chắn xóa?')" href="index.php?action=delete&id=<?php echo $book['id'] ?>">Xóa</a>
							</td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
				<div class="">
				<a href="index.php?action=add" class="btn btn-primary pull-left">Thêm mới</a>
				<form action="index.php?action=search" method="POST" class="form-inline pull-right" role="form">
				
					<div class="form-group">
						<label class="sr-only" for="">Tìm kiếm</label>
						<input name="textSearch" type="text" class="form-control" id="" placeholder="Tìm kiếm">
					</div>
				
					
				
					<button name="btnSearch" type="submit" class="btn btn-primary">Submit</button>
				</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>