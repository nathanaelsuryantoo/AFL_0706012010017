<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lessee;
use App\Models\House;
use DateTime;

class LesseeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = "Lessee";
        $pagetitle = "Lessee List";
        $lessee = Lessee::all();

        return view('lessee', compact('title', 'pagetitle', 'lessee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $house = House::all();
        $title = "Lessee";
        $pagetitle = "Add Lessee";

        return view('createlessee', compact('house', 'title', 'pagetitle'));
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
        $this->validate($request, [
            'nik' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'umur' => 'required',
            'rented_house' => 'required',
            'rent_from' => 'required',
            'rent_until' => 'required'
        ]);
        $date = new DateTime($request->rent_from);
        $untildate = $date->format('Y-m-d');
        $futureDate = date('Y-m-d', strtotime('+'.$request->rent_until.' year', strtotime($untildate)) );
        Lessee::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'umur' => $request->umur,
            'rented_house' => $request->rented_house,
            'rent_from' => $request->rent_from,
            'rent_until' => $futureDate
        ]);
        return redirect(route('lessee.index'));
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
        $lessee = Lessee::where('nik', $id)->first();
        $title = 'Lessee';
        $pagetitle = "Lessee Details";

        return view('showlessee', compact('lessee', 'title', 'pagetitle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nik)
    {
        //
        $house = House::all();
        $lessee = Lessee::findOrFail($nik);
        $title = 'Lessee';
        $pagetitle = 'Edit Lessee';

        return view('editlessee', compact('house', 'lessee', 'title', 'pagetitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nik)
    {
        //
        $lessee = Lessee::findOrFail($nik);
        $this->validate($request, [
            'nik' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'umur' => 'required',
            'rented_house' => 'required',
            'rent_from' => 'required',
            'rent_until' => 'required'
        ]);
        $date = new DateTime($request->rent_from);
        $untildate = $date->format('Y-m-d');
        $futureDate=date('Y-m-d', strtotime('+'.$request->rent_until.' year', strtotime($untildate)) );
        $lessee->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'umur' => $request->umur,
            'rented_house' => $request->rented_house,
            'rent_from' => $request->rent_from,
            'rent_until' => $futureDate
        ]);
        return redirect(route('lessee.index'));
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
        $lessee = Lessee::findOrFail($id);
        $lessee->delete();
        
        return redirect(route('lessee.index'));
    }
}
