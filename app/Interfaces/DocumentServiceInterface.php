<?php

namespace App\Interfaces;

interface DocumentServiceInterface
{
    public function create($data);
    public static function destroy($name);
    public function get($columns);
}
