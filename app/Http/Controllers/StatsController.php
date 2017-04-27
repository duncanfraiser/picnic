<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attend;
use App\Kid;
use App\Carshow;
use App\Carguest;

class StatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kid=Kid::count();

        $younger=Kid::where('age','<', '7')->count();
        $older=Kid::where('age','>', '6')->count();
        $kidTotal=$younger+$older;
        
        $attend = Attend::count();
        $guest = Attend::where('guest_first_name','!=','null')->count();
        $attendTotal=$attend+$guest;

        $total=$kidTotal+$attendTotal;
        
        $carshow=Carshow::count();
        $carguest=Carguest::count();
        $carTotal=$carshow+$carguest;
        return view('stats.index', compact('older', 'younger', 'attend', 'guest','kidTotal','attendTotal','total','carshow','carguest','carTotal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
