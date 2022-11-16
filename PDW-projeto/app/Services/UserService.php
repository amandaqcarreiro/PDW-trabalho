<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\FlareClient\Time\SystemTime;

class UserService 
{


    public function getUserById($userId){
        $results = DB::select("select * from users where id = ?", [$userId]);
        return $results[0];
    }

    public function addUser($user){
        DB::insert("insert into users (name, email, password) "
          + "values(?, ?, ?)", [
            $user->name,
            $user->email,
            $user->password
          ]);
    }

    public function verifyEmail($id){
        DB::update("update users set email_verified_at values ?",
            [time()]);
        }

    public function patchUser(User $user){
        // eh um jeito feio, mas como tem poucos campos 
        // e eu nao sei php 
        if ($user->email) {
            DB::update("update users set email values ? where id = ?", [
                $user->email,
                $user->id
            ]);
        }
        if ($user->name) {
            DB::update("update users set name values ? where id = ?", [
                $user->name,
                $user->id
            ]);
        }
        if ($user->password) {
            DB::update("update users set password values ? where id = ?", [
                $user->password,
                $user->id
            ]);
        }
    }

    public function deleteUser(int $userId){
        DB::delete("delete from users where id = ?", [$userId]);
    }
}