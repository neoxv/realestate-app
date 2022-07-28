<?php

namespace App\Interfaces;

interface SettingServiceInterface
{
    public function getAll();
    public function create($data);
    public function get($columns);
}
