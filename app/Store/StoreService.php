<?php

namespace App\Store;

class StoreService
{
	protected StoreRepository $repos;

	public function __construct(StoreRepository $repos)
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

    public function assignBooks($data = [])
    {
        return $this->repos->assignBooks($data['store_id'], $data['books_id']);
    }

	public function destroy($id)
	{
		return $this->repos->destroy($id);
	}
}
