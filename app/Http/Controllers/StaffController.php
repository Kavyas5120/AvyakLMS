<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Models\staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('addstaffs');
    }
    function ostaffs(){
        $staf=DB::select("SELECT * FROM staff WHERE staffType = 'operative'");
        return view('ostaffs',compact('staf'));

    }
    function salary(){
        $staf=DB::select("SELECT * FROM staff ");
        return view('salary',compact('staf'));

    }
    function nostaffs(){
        $staf=DB::select("SELECT * FROM staff WHERE staffType = 'non-operative'");
        return view('nostaffs',compact('staf'));

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
        $data = $request->all();
        staff::create([
            "firstName"=>$data['firstName'],
            "lastName"=>$data['lastName'],
            "dob"=>$data['dob'],
            "gender"=>$data['gender'],
            "qualification"=>$data['qualification'],
            "position"=>$data['position'],
            "salary"=>$data['salary'],
            "staffType"=>$data['staffType'],
            "email"=>$data['email'],
            "phone"=>$data['phone'],
            "address"=>$data['address'],

            
        ]);
        return view('dashboard');
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
