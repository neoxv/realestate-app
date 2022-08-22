<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Interfaces\UserServiceInterface;

class UserService implements UserServiceInterface
{
    public function getAll()
    {
        return User::paginate(5, ['*'], 'usersPage');

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
        // dd($data);
        $user = User::find($id);
        if($user->role == 0){
            $user->update($data);
        }
        return (object) ['success' => true, 'message' => 'User updated successfully'];
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

    public function search($key)
    {
        $users = User::where(function ($query) use ($key) {

            $columns = ['first_name', 'last_name', 'phone', 'email'];

            foreach ($columns as $column) {
                $query->orWhere($column, 'LIKE', '%' . $key . '%');
            }
        })->paginate(5, ['*'], 'usersPage');
        return $users;
    }
}
