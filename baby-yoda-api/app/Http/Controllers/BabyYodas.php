<?php

namespace App\Http\Controllers;

use App\BabyYoda; //model babyYoda

use App\Http\Resources\BabyYodaResource;
use App\Http\Requests\BabyYodaRequest;
use Illuminate\Http\Request;

class BabyYodas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BabyYodaResource::collection(BabyYoda::all());
    }


    public function store(BabyYodaRequest $request)
    {
        $data = $request->all();
        $babyYoda = BabyYoda::create($data);
        return new BabyYodaResource($babyYoda);
    }

    public function show(BabyYoda $babyYoda)
    {
        return new BabyYodaResource($babyYoda);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BabyYodaRequest $request, BabyYoda $babyYoda)
    {
        $data = $request->all();
        $babyYoda->fill($data)->save();
        return new BabyYodaResource($babyYoda);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BabyYoda $babyYoda)
    {
        $babyYoda->delete();
        return response(null, 204);
    }
}
