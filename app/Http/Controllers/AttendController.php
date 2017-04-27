<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attend;
use App\Kid;

class AttendController extends Controller
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
        $companies = [
            'Ergon Asphalt & Emulsions, Inc.' => 'Ergon Asphalt & Emulsions, Inc.',
            'Ergon Biofuels' => 'Ergon Biofuels, LLC',
            'Ergon, Inc.' => 'Ergon, Inc.',
            'Ergon Maintenance' => 'Ergon Maintenance Services',
            'Ergon Marine & Industrial Supply, Inc.' => 'Ergon Marine & Industrial Supply, Inc.',
            'Ergon Oil Purchasing, Inc.' => 'Ergon Oil Purchasing, Inc.',
            'Ergon Properties, Inc.' => 'Ergon Properties, Inc.',
            'Ergon Refining, Inc.' => 'Ergon Refining, Inc.',
            'Ergon Terminaling, Inc.' => 'Ergon Terminaling, Inc.',
            'Ergon Trucking, Inc.' => 'Ergon Trucking, Inc.',
            'ISO Panels, Inc.' => 'ISO Panels, Inc.',
            'Kearney Park Farms, Inc' => 'Kearney Park Farms, Inc',
            'Lampton-Love Companies' => 'Lampton-Love Companies',
            'Magnolia Marine Transport Company' => 'Magnolia Marine Transport Company',
            'Paragon Technical Services, Inc.' => 'Paragon Technical Services, Inc.',
            'Watson Heidelberg Jones PLLC' => 'Watson Heidelberg Jones PLLC',
        ];


        return view('attend.create', compact('companies'));
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
            'company' => 'required'
        ]);

        $attend=new Attend;
        $attend->fill($request->all());
        $attend->save();

        $names = $request->kidNames;
        if($names[0]!= null){
          $ages = $request->kidAges;
          $datas = array_combine($names, $ages);
        foreach($datas as $name=>$age){ // Loop though one array
           $kid = New Kid;
           $kid->attend_id = $attend->id;
           $kid->name = $name;
           $kid->age = $age;
           $kid->save();
          }
        }

 
        return redirect('/attending/'.$attend->id.'/thanks'); 
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $attend=Attend::findOrFail($id);
        return view('attend.show', compact('attend'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companies = [
            'Ergon Asphalt & Emulsions, Inc.' => 'Ergon Asphalt & Emulsions, Inc.',
            'Ergon Marine & Industrial Supply, Inc.' => 'Ergon Marine & Industrial Supply, Inc.',
            'Ergon, Inc.' => 'Ergon, Inc.',
            'Ergon Oil Purchasing, Inc.' => 'Ergon Oil Purchasing, Inc.',
            'Ergon Properties, Inc.' => 'Ergon Properties, Inc.',
            'Ergon Refining, Inc.' => 'Ergon Refining, Inc.',
            'Ergon Terminaling, Inc.' => 'Ergon Terminaling, Inc.',
            'Ergon Trucking, Inc.' => 'Ergon Trucking, Inc.',
            'ISO Panels, Inc.' => 'ISO Panels, Inc.',
            'Kearney Park Farms, Inc' => 'Kearney Park Farms, Inc',
            'Lampton-Love Companies' => 'Lampton-Love Companies',
            'Magnolia Marine Transport Company' => 'Magnolia Marine Transport Company',
            'Paragon Technical Services, Inc.' => 'Paragon Technical Services, Inc.',
        ];
        
        $attend=Attend::findOrFail($id);
        return view('attend.edit', compact('attend', 'companies'));
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
        $attend=Attend::findOrFail($id);
        $attend->fill($request->all());
        $attend->save();
        return redirect('/attending/'.$attend->id.'/thanks');
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
        $attend = Attend::findOrFail($id);
        return view('attend.thanks', compact('attend'));
    }
}
