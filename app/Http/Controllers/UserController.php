<?php

namespace App\Http\Controllers;

use App\Interfaces\PropertyServiceInterface;
use App\Interfaces\UserServiceInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private UserServiceInterface $userService;
    private PropertyServiceInterface $propertyService;

    public function __construct(UserServiceInterface $userService,PropertyServiceInterface $propertyService)
    {
        $this->userService = $userService;
        $this->propertyService = $propertyService;
    }

    public function create(Request $request)
    {

    }

    public function store(Request $request)
    {
        //
    }

    public function show(Setting $setting)
    {
        //
    }

    public function search(Request $request)
    {
        $key = $request->input('search');
        if ($key != '' || $key != null) {
            $users = $this->userService->search($key);
            return view('pages.admin.users', ['users'=> $users, 'key' => $key, 'subject' => 'user', 'properties' => $this->propertyService->getAllFavourites()]);
        }
        return redirect()->route('admin.users');
    }

    public function update(Request $request)
    {
        if (isset($request->id)) {
            if (isset($request->status)) {
                if ($request->status == '0') {
                    $request['status'] = 0;
                } else {
                    $request['status'] = 1;
                }
            }
            $response = $this->userService->update($request->id, $request->all());
        }

        if ($response->success) {
            return redirect()->route('admin.users')->with('success', $response->message);
        } else {
            return redirect()->route('admin.users')->with('error', $response->message);
        }
    }

    public function destroy(Setting $setting)
    {
        //
    }
}
