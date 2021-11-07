<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use Illuminate\Support\Facades\Storage;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = "House";
        $pagetitle = "House List";
        $house = House::all();

        return view('house', compact('title', 'pagetitle', 'house'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = "House";
        $pagetitle = "Create House";

        return view('createHouse', compact('title', 'pagetitle'));
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
            'house_id' => 'required',
            'luas_tanah' => 'required',
            'luas_bangunan' => 'required',
            'kamar_tidur' => 'required',
            'kamar_mandi' => 'required',
            'harga' => 'required',
            'gambar' => 'required'
        ]);
        House::create([
            'house_id' => $request->house_id,
            'luas_tanah' => $request->luas_tanah,
            'luas_bangunan' => $request->luas_bangunan,
            'kamar_tidur' => $request->kamar_tidur,
            'kamar_mandi' => $request->kamar_mandi,
            'harga' => $request->harga,
            'gambar' => $request->file('gambar')->store('fotorumah')
        ]);
        
        return redirect(route('house.index'));
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
        $house = House::where('house_id', $id)->first();
        $title = "House";
        $pagetitle = "House Details";

        return view('showhouse', compact('house', 'title', 'pagetitle'));
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
        $house = House::where('house_id', $id)->first();
        $title = "House";
        $pagetitle = "Edit House";

        return view('edithouse', compact('house', 'title', 'pagetitle'));
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
        $house = House::where('house_id', $id);
        $this->validate($request, [
            'house_id' => 'required',
            'luas_tanah' => 'required',
            'luas_bangunan' => 'required',
            'kamar_tidur' => 'required',
            'kamar_mandi' => 'required',
            'harga' => 'required'
        ]);
        if($request->file('gambar')){
            Storage::delete($request->gambarlama);
            $house->update([
                'house_id' => $request->house_id,
                'luas_tanah' => $request->luas_tanah,
                'luas_bangunan' => $request->luas_bangunan,
                'kamar_tidur' => $request->kamar_tidur,
                'kamar_mandi' => $request->kamar_mandi,
                'harga' => $request->harga,
                'gambar' => $request->file('gambar')->store('fotorumah')
            ]);
        }else{
            $house->update([
                'house_id' => $request->house_id,
                'luas_tanah' => $request->luas_tanah,
                'luas_bangunan' => $request->luas_bangunan,
                'kamar_tidur' => $request->kamar_tidur,
                'kamar_mandi' => $request->kamar_mandi,
                'harga' => $request->harga
            ]);
        }
        return redirect(route('house.index'));
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
        $house = House::findOrFail($id);
        Storage::delete($house->gambar);
        $house->delete();
        return redirect(route('house.index'));
    }
}
