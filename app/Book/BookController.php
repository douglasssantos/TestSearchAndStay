<?php

namespace App\Book;

use App\Book\Http\Requests\BookRequest;
use App\Book\Http\Requests\BookSyncRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
	public BookService $service;

	public function __construct(BookService $service)
	{
		$this->service = $service;
	}
	public function getAll()
	{
		return $this->service->getAll();
	}
	public function find($id)
	{
		return $this->service->find($id);
	}
	public function create(BookRequest $request)
	{
		return $this->service->create($request->validated());
	}
	public function update(BookRequest $request, $id)
	{
		return $this->service->update($request->validated(), $id);
	}
    public function assignToStore(BookSyncRequest $request)
    {
        return $this->service->assignToStore($request->validated());
    }

	public function destroy($id)
	{
		return $this->service->destroy($id);
	}
}
