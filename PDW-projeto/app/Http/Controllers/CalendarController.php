<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use App\Models\UserCalendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class CalendarController extends Controller
{
    /**
     * Get all user day and recipes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UserCalendar::where("id_user", Auth::id())->get();
    }

    /**
     * Associar uma receita a um dia especifico.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "id_recipe"=>"required|integer",
            "date"=>"required|date"
        ]);

        $recipe = Recipe::find($request->id_recipe);

        if (! $recipe || $recipe->id_user != Auth::id())
            return response(["messsage: Receita nao encontrada"], 404);

        $calendar = [
            "id_user" => Auth::id(),
            "id_recipe" => $request->id_recipe,
            "date"=> $request->date 
        ];

        return UserCalendar::create($calendar);

    }

    /**
     * Atualiza a receita de um dia especifico.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $calendar = UserCalendar::find($id);
        if (! $calendar || $calendar->id_user != Auth::id())
            return response(["messsage: Data sem registro, use POST"], 404);

        $calendar->update($request->all());
        return $calendar;
    }

    /**
     * Deleta uma associacao de receita e dia.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $calendar = UserCalendar::find($id);
        if (! $calendar || $calendar->id_user != Auth::id())
            return response(["messsage: Data sem registro, use POST"], 404);
        return response(UserCalendar::destroy($calendar->id), 200);
    }

    public function showForWeek(Request $req){
        $req->validate([
            "date_reference" => "required|date"
        ]);

        $time = strtotime($req->date_reference);

        $first_day_of_week = date('Y-m-d', strtotime('Last Sunday', $time));
        $last_day_of_week = date('Y-m-d', strtotime('Next Saturday', $time));

        return UserCalendar::whereBetween(
            "date", [
                $first_day_of_week,
                $last_day_of_week
            ])->get();
    }

}
