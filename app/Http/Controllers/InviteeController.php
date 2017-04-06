<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invitee;
use App\Mail\Invitation;

class InviteeController extends Controller
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
        return view('invitee.create');
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
            'invitee_name' => 'required',
            'invitee_email' => 'required',
            'employee_name' => 'required',
            'employee_email' => 'required'
        ]);

        $invitee = new Invitee;
        $invitee->fill($request->all());
   
        
        if($invitee->save()){
            
             \Mail::to($invitee->invitee_email)->send(new Invitation($invitee));
   

        }


        return redirect('/invitee/'.$invitee->id.'/thanks'); 
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
        $invitee = Invitee::findOrFail($id);
        return view('invitee.thanks', compact('invitee'));  
    }
}
