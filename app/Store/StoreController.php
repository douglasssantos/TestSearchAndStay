<?php

namespace App\Store;
use App\Http\Controllers\Controller;
use App\Store\Http\Requests\StoreRequest;
use App\Store\Http\Requests\StoreSyncRequest;
use Illuminate\Http\Request;

class StoreController extends Controller
{
	public StoreService $service;

	public function __construct(StoreService $service)
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
	public function create(StoreRequest $request)
	{
		return $this->service->create($request->all());
	}
	public function update(StoreRequest $request, $id)
	{
		return $this->service->update($request->all(), $id);
	}
    public function assignBooks(StoreSyncRequest $request)
    {
        return $this->service->assignBooks($request->validated());
    }
	public function destroy($id)
	{
		return $this->service->destroy($id);
	}
}
