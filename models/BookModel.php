<?php

class BookModel
{
	public $Model;
	function __construct()
	{
		require_once 'Model.php';
		$this->Model = new Model();
	}

	public function getList()
	{
		$sql = "SELECT * FROM books";
		$result = $this->Model->query($sql);
		$books = [];
		while ($row = $result->fetch_assoc()) {
			$books[] = $row;
		}

		return $books;
	}
	public function search($searchText)
	{
		$sql = "SELECT * FROM books WHERE title LIKE '%$searchText%'";
		$result = $this->Model->query($sql);
		$books = [];
		while ($row = $result->fetch_assoc()) {
			$books[] = $row;
		}

		return $books;
	}


	public function getById($id)
	{
		$sql = "SELECT * FROM books WHERE id = $id";
		$result = $this->Model->query($sql);
		return $result->fetch_assoc();

	}

	public function store($title, $author, $description)
	{
		$sql = "INSERT INTO books (title, author, description) VALUES ('$title', '$author', '$description')";
		$this->Model->query($sql);

	}

	public function update($id, $title, $author, $description)
	{
		$sql = "UPDATE books SET title = '$title', author = '$author', description = '$description' WHERE id = $id";
		$this->Model->query($sql);

	}

	public function destroy($id)
	{
		$sql = "DELETE FROM books WHERE id = $id";
		$this->Model->query($sql);

	}




}