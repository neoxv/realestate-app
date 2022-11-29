<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Interfaces\UserServiceInterface;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    private UserServiceInterface $userService;

    public function __construct( UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function index(){

        return view('pages.admin.account',['admins'=>$this->userService->getAdmins()]);
    }
    public function create(Request $request)
    {
        $data = $request->all();
        $nameArray = explode(' ', $data['name']);
        $data['first_name'] = $nameArray[0];
        if(sizeof($nameArray) > 1){
            $data['last_name'] =$nameArray[1];
        }else{
            $data['last_name'] = " ";
        }
        $data['role'] = 2;
        $data['password'] = 'admin12345';

        try {
            User::create($data);
        } catch (Exception $ex) {
            return redirect()->route('admin.account')->with('error', $ex->getMessage());
        }

        return redirect()->route('admin.account')->with('success', 'Admin created successfully. Password is "admin12345". ');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if((auth()->user()->id == $request->id || auth()->user()->isSuperAdmin())){
            $user = User::find($request->id);
            $data = $request->all();
            if (isset($data['password'])) {
                if ($request->password == $request->password_confirmation && Hash::check($request->old_password, $user->password)) {
                    $user->fill([
                        'password' => $request->password
                    ])->save();
                } else {
                    return redirect()->route('admin.account')->with('error', 'Admin update failed.');
                }
            } else {
                $nameArray = explode(' ', $data['name']);
                $data['first_name'] = $nameArray[0];
                if (sizeof($nameArray) > 1) {
                    $data['last_name'] = $nameArray[1];
                } else {
                    $data['last_name'] = " ";
                }
            }

            try {
                $user->update($data);
            } catch (Exception $ex) {
                return redirect()->route('admin.account')->with('error', 'Admin update failed.');
            }

            return redirect()->route('admin.account')->with('success', 'Admin updated successfully');
        }else{
            return redirect()->route('admin.account')->with('error', 'Admin update denied.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $user)
    {
        if(auth()->user()->isSuperAdmin()){
            $user = User::find($user->id);
            try {
                $user->delete();
            } catch (\Throwable $th) {
                return redirect()->route('admin.account')->with('error', $th->getMessage());
            }
            return redirect()->route('admin.account')->with('success', 'Admin deleted successfully');
        }
        return redirect()->route('admin.account')->with('error', 'Admin deletion failed.');

    }
}
