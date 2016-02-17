<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
{
    public function getIndex()
    {
        //$result = \DB::table('users')->get();
        $result = \DB::table('users')
                ->select(
                    'users.*',
                    'user_profiles.id as profile_id',
                    'twitter',
                    'birthdate'
                )
                ->where('firstName','<>','Pepe')
                ->orderBy('lastName','ASC')
                ->leftJoin('user_profiles', 'users.id','=','user_profiles.user_id')
                ->get();

        foreach($result as $row){
            $row->fullName = $row->firstName . ' ' . $row->lastName;
            $row->age = \Carbon\Carbon::parse($row->birthdate)->age;
        }
        dd($result);
        return $result;
    }

    public function getOrm()
    {
        $users = User::select('id', 'firstName')
                ->with('profile')
                ->where('firstName','<>','Pepe')
                ->orderBy('lastName', 'ASC')
                ->get();
        dd($users->toArray());
    }

}
