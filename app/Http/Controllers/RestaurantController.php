<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::get();
        echo json_encode($restaurants);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($restaurant_id)
    {
        $restaurant = Restaurant::find($restaurant_id);
        echo json_encode($restaurant);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $restaurant = new Restaurant();
        $restaurant->name = $request->input('name');
        $restaurant->description = $request->input('description');
        $restaurant->image = $request->input('image');
        $restaurant->save();

        echo json_encode($restaurant);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Restaurant  $restaurant_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $restaurant_id)
    {
        $restaurant = Restaurant::find($restaurant_id);
        $restaurant->name = $request->input('name');
        $restaurant->description = $request->input('description');
        $restaurant->image = $request->input('image');
        $restaurant->save();

        echo json_encode($restaurant);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restaurant  $restaurant_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($restaurant_id)
    {
        $restaurant = Restaurant::find($restaurant_id);
        $restaurant->delete();
    }
}
