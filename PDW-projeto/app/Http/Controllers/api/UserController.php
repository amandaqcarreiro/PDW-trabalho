<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\UserService;

class UserController extends Controller
{

    // nao ha necessidade de se listar todos os usuarios

    public function show($userId, Response $res){
        $userService = new UserService;

        $res->setStatusCode(200);
        $res->setContent($userService->getUserById($userId));
        return $res;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req, Response $res)
    {
        $userService = new UserService;
        $user = json_decode($req->getContent());
        $userService->addUser($user);
        $res->setStatusCode(200);
        return $res;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id, Response $res)
    {
        $userService = new UserService;
        $user = json_decode($req->getContent());
        $user->id = $id;
        $userService->patchUser($user);
        return $res->setStatusCode(200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id, Response $res)
    {
        $userService = new UserService;
        $userService->deleteUser($id);
        return $res->setStatusCode(200);
    }
}