<?php

namespace App\Interfaces;

interface PropertyServiceInterface
{
    public function getAll();
    public function getFeatured($page);
    public function getByAttribute($attribute, $value);
    public function getRecent();
    public function getById($id);
    public function create($data);
    public function update($id, $data);
    public function delete($id);
    public function getPropertyReportForDashboard();
    public function get();
    public function search($keys);
    public function userSearch($key);
    public function filter($keys);
    public function getFavourites($user);
}
