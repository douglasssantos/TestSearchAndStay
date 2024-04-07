<?php

namespace App\Book;

use Larakeeps\LaraDriven\Traits\ApiResponses;
use App\Book\Models\Book;
use App\Book\Contracts\BookRepositoryInterface;

class BookRepository implements BookRepositoryInterface
{
    use ApiResponses;

    protected Book $model;

    public function __construct(Book $model)
    {
        $this->model = $model;
    }

    public function viewResponse(bool $status = null)
    {
        $this->viewResponse = ( $status ?? ( $this->viewResponse ?? true ));

        return $this;

    }

    public function model(bool $status = null): Book
    {
        return $this->model;

    }

    public function getAll($viewResponse = null)
    {
        $this->viewResponse(false);

        try {

            $all = $this->model->orderBy('id')->with(['stores' => function($query){
                $query->whereActive(true);
            }])->get();

            if ($all->count() > 0)
                return $this->success("Books returned.", $all);

            return $this->fail("No books returned.");

        }catch (\Exception $e) {

            return $this->fail("There was a failure when returning to books", $e);

        }
    }

    public function find($id, $viewResponse = null)
    {
        $this->viewResponse($viewResponse);

        try {

            $find = $this->model->whereId($id);

            if ($find->exists())
                return $this->success("Books returned.", $find->first());

            return $this->fail("No Books returned.");

        }catch (\Exception $e) {

            return $this->fail("There was a failure when returning to book", $e);

        }
    }

    public function findMany($ids, $viewResponse = null)
    {
        $this->viewResponse($viewResponse);

        try {

            $find = $this->model->whereIn('id', $ids);

            if ($find->exists())
                return $this->success("Books returned.", $find->get());

            return $this->fail("No Books returned.");

        }catch (\Exception $e) {

            return $this->fail("There was a failure when returning to books", $e);

        }
    }

    public function create($data, $viewResponse = null)
    {
        $this->viewResponse($viewResponse);

        try {

            $create = $this->model->create($data);

            if (!$create)
                return $this->fail("Failed to create book.");

            return $this->success("book created successfully.", $create);

        }catch (\Exception $e) {

            return $this->fail("There was an error creating the book", $e);

        }
    }

    public function update($data, $id, $viewResponse = null)
    {
        $this->viewResponse($viewResponse);

        try {

            $update = $this->model->where('id', $id);

            if($update->doesntExist())

                return $this->fail("Book not found.");

            $update = $update->first();

            $update->fill($data);

            if (!$update->save())
                return $this->fail("Failed to save book changes.");

            return $this->success("Changes saved successfully.", $data);

        }catch (\Exception $e) {

            return $this->fail("There was a failure saving book changes.", $e);

        }
    }

    public function assignToStore($book_id, $stores_id = [], $viewResponse = null)
    {
        $this->viewResponse($viewResponse);

        try {
            $assigned = $this->model->find($book_id)->stores()->sync($stores_id);

            if(!$assigned)
                return $this->fail("Failed to assign books to store..");

            return $this->success("Books successfully assigned to the store.");

        }catch (\Exception $e) {

            return $this->fail("An error occurred while assigning the books to the store.", $e);

        }
    }

    public function destroy($id, $viewResponse = null)
    {
        $this->viewResponse($viewResponse);

        try {

            $destroy = $this->model->find($id);

            if(!$destroy)
                return $this->fail("Book not found.");

            $destroy->stores()->detach();

            $destroy = $destroy->delete();

            if (!$destroy)
                return $this->fail("Unable to delete book.");

            return $this->success("Book successfully deleted.", $destroy);

        }catch (\Exception $e) {

            return $this->fail("There was an error deleting the book.", $e);

        }
    }
}
