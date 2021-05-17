<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class DressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vestiti = Dress::all();

        $data = [
            'vestiti' => $vestiti
        ];
        return view('dresses.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dresses.create');
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

        $new_dress = new Dress();
        
        $request->validate([
            'name' => 'required|max:20',
            'size' => 'required|max:3',
            'color' => 'required|max:20',
            'description' => 'required|max:100',
            'price' => 'required|numeric'
        ]);

        $new_dress->name = $data['name'];
        $new_dress->size = $data['size'];
        $new_dress->color = $data['color'];
        $new_dress->description = $data['description'];
        $new_dress->price = $data['price'];

        $new_dress->save();


        return redirect()->route('vestiti.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($id) {
            $vestito = Dress::find($id);

            $data = [
                'vestito' => $vestito
            ];

            return view('dresses.show', $data);

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dress $vestiti)
    {

        //$dress_to_update = Dress::findOrFail($id);
        //@dd($dress_to_update);
        return view('dresses.edit', compact('vestiti'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dress $vestiti)
    {
        $data = $request->all();
        $vestiti->update($data);

        return redirect()->route('vestiti.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dress $vestiti)
    {
        $vestiti->delete();

        return redirect()->route('vestiti.index');
    }
}
