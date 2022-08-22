<?php

namespace App\Interfaces;

interface OwnerServiceInterface
{
    public function getAll();
    public function getById($id);
    public function create($data);
    public function update($id,$data);
    public function get($columns);
    public function delete($owner);
    public function search($key);
}
