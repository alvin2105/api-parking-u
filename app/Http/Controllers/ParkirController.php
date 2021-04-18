<?php

namespace App\Http\Controllers;
use App\Models\Parkir;
use Illuminate\Http\Request;

class ParkirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Parkir::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_parkir' => 'required',
            'lokasi_parkir' => 'required',
            'harga' => 'required',
            'jarak' => 'required',
            'jam' => 'required',
            'rating' => 'required'

        ]);

        return Parkir::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Parkir::find($id);
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
        $parkir = Parkir::find($id);
        $parkir->update($request->all());
       // return $parkir;
        $response = [
			'message'=>'Update Succesfully',
            'parkir' => $parkir,
            
			
        ];

        return response($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Parkir::destroy($id);
    }

     /**
     * Search for a name
     *
     * @param  str  $nama_parkir
     * @return \Illuminate\Http\Response
     */
    public function search($nama_parkir)
    {
        return Parkir::where('nama_parkir', 'like', '%'.$nama_parkir.'%')->get();
    }
}
