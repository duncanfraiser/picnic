<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carguest;
use App\carkid;

class CarguestController extends Controller
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
        return view('carguest.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->email);
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'type' => 'required',
            'year' => 'required',
            'make' => 'required',
            'model' => 'required',
        ]);

        $carguest=new Carguest;
        $carguest->fill($request->all());
        $carguest->save();

        $names = $request->kidNames;
        if($names[0]!= null){
          $ages = $request->kidAges;
          $datas = array_combine($names, $ages);
        foreach($datas as $name=>$age){ // Loop though one array
           $carkid = New Carkid;
           $carkid->carguest_id = $carguest->id;
           $carkid->name = $name;
           $carkid->age = $age;
           $carkid->save();
          }
        }
        return redirect('/carshow_guest/'.$carguest->id.'/thanks'); 
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
        $carguest=Carguest::findOrFail($id);
        return view('carguest.thanks', compact('carguest'));
    }




}
