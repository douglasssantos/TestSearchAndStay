<?php

namespace App\Store;

use Larakeeps\LaraDriven\Traits\ApiResponses;
use App\Store\Models\Store;
use App\Store\Contracts\StoreRepositoryInterface;

class StoreRepository implements StoreRepositoryInterface
{
	use ApiResponses;

	protected Store $model;

	public function __construct(Store $model)
	{
		$this->model = $model;
	}

	public function viewResponse(bool $status = null)
	{
		$this->viewResponse = ( $status ?? ( $this->viewResponse ?? true ));

		return $this;

	}

	public function model(bool $status = null): Store
	{
		return $this->model;

	}

	public function getAll($viewResponse = null)
	{
		$this->viewResponse(false);

		try {

			$all = $this->model->with('books:id,name,isbn,price')->orderBy('id')->get();

			if ($all->count() > 0)
				return $this->success("Stores returned.", $all, 200, false);

			return $this->fail("No stores returned.",[], false);

		}catch (\Exception $e) {

			return $this->fail("There was a failure when returning to stores", $e);

		}
	}

	public function find($id, $viewResponse = null)
	{
		$this->viewResponse($viewResponse);

		try {

			$find = $this->model->whereId($id)->with('books');

			if ($find->exists())
				return $this->success("Stores returned.", $find->first(), 200, false);

			return $this->fail("No Stores returned.", [], false);

		}catch (\Exception $e) {

			return $this->fail("There was a failure when returning to store", $e);

		}
	}

	public function findMany($ids, $viewResponse = null)
	{
		$this->viewResponse($viewResponse);

		try {

			$find = $this->model->whereIn('id', $ids)->with('books');

			if ($find->exists())
				return $this->success("Stores returned.", $find->get(), 200, false);

			return $this->fail("No Stores returned.", [], false);

		}catch (\Exception $e) {

			return $this->fail("There was a failure when returning to stores", $e);

		}
	}

	public function create($data, $viewResponse = null)
	{
		$this->viewResponse($viewResponse);

		try {

			$create = $this->model->create($data);

			if (!$create)
				return $this->fail("Failed to create store.", [], false);

			return $this->success("store created successfully.", $create, 200, false);

		}catch (\Exception $e) {

			return $this->fail("There was an error creating the store", $e);

		}
	}

	public function update($data, $id, $viewResponse = null)
	{
		$this->viewResponse($viewResponse);

		try {

			$update = $this->model->where('id', $id);

			if($update->doesntExist())

				return $this->fail("Store not found.", [], false);

			$update = $update->first();

			$update->fill($data);

			if (!$update->save())
				return $this->fail("Failed to save store changes.", [], false);

			return $this->success("Changes saved successfully.", $data, 200, false);

		}catch (\Exception $e) {

			return $this->fail("There was a failure saving store changes.", $e);

		}
	}

    public function assignBooks($store_id, $books_id = [], $viewResponse = null)
    {

        $this->viewResponse($viewResponse);

        try {

            $assigned = $this->model->find($store_id)->books()->sync($books_id);

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
				return $this->fail("Store not found.", [], false);

            $destroy->books()->detach();

			$destroy = $destroy->delete();

			if (!$destroy)
				return $this->fail("Unable to delete store.", [], false);

			return $this->success("Store successfully deleted.", $destroy, 200, false);

		}catch (\Exception $e) {

			return $this->fail("There was an error deleting the store.", $e);

		}
	}
}
