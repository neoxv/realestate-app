<?php

namespace App\Interfaces;

interface AdvertisementServiceInterface
{
    public function getAll();
    public function getById($id);
    public function create($data);
    public function get($columns);
}
