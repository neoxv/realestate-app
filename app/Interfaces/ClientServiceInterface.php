<?php

namespace App\Interfaces;

interface ClientServiceInterface
{
    public function getAll();
    public function getById($id);
    public function create($data);
    public function get($columns);
}
