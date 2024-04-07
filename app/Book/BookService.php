<?php

namespace App\Book;

class BookService
{
	protected BookRepository $repos;

	public function __construct(BookRepository $repos)
	{
		$this->repos = $repos;
		//$this->repos->viewResponse(false); //For disable response json.
	}

	public function getAll()
	{
		return $this->repos->getAll();
	}

	public function find($id)
	{
		return $this->repos->find($id);
	}

	public function create($data)
	{
		return $this->repos->create($data);
	}

	public function update($data, $id)
	{
		return $this->repos->update($data, $id);
	}

	public function assignToStore($data = [])
	{
		return $this->repos->assignToStore($data['book_id'], $data['stores_id']);
	}

	public function destroy($id)
	{
		return $this->repos->destroy($id);
	}
}
