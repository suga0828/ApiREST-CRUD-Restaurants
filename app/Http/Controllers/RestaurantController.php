<?php

namespace App\Http\Controllers;

use App\Restaurant;

use App\Http\Requests\StoreRestaurant;
use App\Http\Requests\UpdateRestaurant;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json( Restaurant::all() );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $restaurant_id
     * @return \Illuminate\Http\Response
     */
    public function show($restaurant_id)
    {
        return response()->json( Restaurant::findOrFail($restaurant_id) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreRestaurant  $validated_request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRestaurant $validated_request)
    {
        return Restaurant::create($validated_request->all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateRestaurant  $validated_request
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRestaurant $validated_request, $restaurant_id)
    {
        $response = $this->setRequestItems(Restaurant::find($restaurant_id), $validated_request);
        /*
            It remains to make a descriptive return
        */
        return response()->json($response);
    }

     /**
     * set items of request.
     */
    public function setRequestItems($restaurant, $request)
    {
        return $restaurant->fill( $request->all() )->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $restaurant_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($restaurant_id)
    {
        return Restaurant::destroy($restaurant_id);
    }
}
