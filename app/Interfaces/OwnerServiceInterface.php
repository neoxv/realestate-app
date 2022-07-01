<?php

namespace App\Interfaces;

interface OwnerServiceInterface
{
    public function getAll();
    public function getById($id);
    public function create($data);
    public function getOwnersForCreate();
}
