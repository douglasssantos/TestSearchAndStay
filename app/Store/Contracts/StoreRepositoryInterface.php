<?php

namespace App\Store\Contracts;

interface StoreRepositoryInterface
{
	public function getAll();
	public function find($id);
	public function create($data);
	public function update($data, $id);
	public function destroy($id);
}
