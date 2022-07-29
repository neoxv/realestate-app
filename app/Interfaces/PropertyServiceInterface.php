<?php

namespace App\Interfaces;

interface PropertyServiceInterface
{
    public function getAll();
    public function getFeatured($page);
    public function getRecent();
    public function getById($id);
    public function create($data);
    public function update($id, $data);
    public function delete($id);
    public function getPropertyReportForDashboard();
    public function get($columns);

}
