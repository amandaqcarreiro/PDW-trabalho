<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return Recipe::where("id_user", Auth::id())->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $req->validate([
            'name'=> "required|string", 
            'url' => "required|string"
        ]);

        $recipe = [
            "name" => $req->name,
            "url" => $req->url,
            "id_user"=>Auth::id()
        ];

        return Recipe::create($recipe);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe = Recipe::find($id);
        if (! $recipe || $recipe->id_user != Auth::id())
            return response(["messsage: Receita nao encontrada"], 404);

        return $recipe;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $recipe = Recipe::find($id);
        if (! $recipe || $recipe->id_user != Auth::id())
            return response(["messsage: Receita nao encontrada"], 404);

        $recipe->update($request->all());
        return $recipe;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recipe = Recipe::find($id);
        if (! $recipe || $recipe->id_user != Auth::id())
            return response(["messsage: Receita nao encontrada"], 404);

        return response(Recipe::destroy($id), 200);
    }
}
