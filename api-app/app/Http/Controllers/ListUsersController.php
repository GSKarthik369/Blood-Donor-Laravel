<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ListUsersController extends BaseController
{
    public function index()
    {
        return ListUsers::all();
    }

    public function show(ListUsers $user)
    {
        return $user;
    }

    public function store(Request $request)
    {
        $user = ListUsers::create($request->all());

        return response()->json($user, 201);
    }
}
