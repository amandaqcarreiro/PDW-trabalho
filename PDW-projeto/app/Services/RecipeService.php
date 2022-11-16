<?php

namespace App\Services;

use App\Models\Recipe;

class RecipeService 
{

    public function getAllUserRecipes(int $userId){}

    public function getUserRecipesForWeek(int $userId, 
        String $datStart, String $datEnd){}

    public function addRecipe(){}

    public function patchRecipe(){}

    public function deleteRecipe(){}
}