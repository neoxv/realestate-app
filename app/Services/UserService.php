<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Interfaces\UserServiceInterface;

class UserService implements UserServiceInterface
{
    public function getAll()
    {
        return User::all();
    }

    public function getById($id)
    {
        return User::find($id);
    }

    public function create($data)
    {
        return User::create($data);
    }

    public function update($id, $data)
    {
        $user = User::find($id);
        $user->update($data);
        return $user;
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return $user;
    }

    public function getUserCountByMonth($since)
    {
        $month = now()->subMonths($since);
        return DB::table('users')
            ->select(DB::raw('count(*) as count, month(created_at) as month'))
            ->where('created_at', '>=',$month)
            ->groupBy('month')
            ->get();
    }
}
