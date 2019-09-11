<?php

require_once 'models/BookModel.php';

class BookController
{
	
	public $BookModel;
	function __construct()
	{
		$this->BookModel = new BookModel();
	}

	public function invoke()
	{

		if (!isset($_GET['action'])) {
			$books = $this->BookModel->getList();
			include 'views/booklist.php';
		} else {
			$action = $_GET['action'];

			switch ($action) {
				case 'viewbook':
					$book = $this->BookModel->getById($_GET['id']);
					include 'views/viewbook.php';
					break;
				case 'add':
					if (isset($_POST['btnAdd'])) {
						$this->BookModel->store($_POST['title'], $_POST['author'], $_POST['description']);
						header("Location: index.php");

					}
					include 'views/add.php';
					break;
				case 'edit':
					if (isset($_POST['btnEdit'])) {
						$this->BookModel->update($_GET['id'], $_POST['title'], $_POST['author'], $_POST['description']);
						header("Location: index.php");

					}
					$book = $this->BookModel->getById($_GET['id']);
					include 'views/edit.php';
					break;
				case 'delete':
					$this->BookModel->destroy($_GET['id']);
					header("Location: index.php");
					break;
				case 'search':
					if (isset($_POST['btnSearch'])) {
						$books = $this->BookModel->search($_POST['textSearch']);
						include 'views/booklist.php';
					}
					break;
				
				default:
					# code...
					break;
			}

			
		}
	}
}