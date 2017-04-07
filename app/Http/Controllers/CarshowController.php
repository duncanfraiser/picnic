<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carshow;

class CarshowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = [
            'Car' => 'Car',
            'Motorcycle' => 'Motorcycle',
            'Tractor' => 'Tractor',
            'Truck' => 'Truck',

        ];
        return view('carshow.create', compact('types'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'type' => 'required',
            'year' => 'required',
            'make' => 'required',
            'model' => 'required',
            'engine' => 'required',
        ]);

        $carshow = New Carshow;
        $carshow->fill($request->all());
        $carshow->save();
        return redirect('/carshow/'.$carshow->id.'/thanks');
        // return redirect('/carshow/'.$carshow->id.'/thanks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
    public function thanks($id)
    {
        $carshow = Carshow::findOrFail($id);
        return view('carshow.thanks', compact('carshow'));
    }


}
