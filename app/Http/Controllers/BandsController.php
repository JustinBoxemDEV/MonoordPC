<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Band;

class BandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bands = Band::all();
        $bandsToShow = $bands->where('is_deleted', '=', 0);
        
        return view('bands.index', compact('bandsToShow'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $band = new Band;
        $band->fill($request->all());
        $band->save();

        return redirect('/bands')->with('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $band = Band::all()->find($id);
        return view('bands.show', compact('band'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $band = Band::all()->find($id);
        return view('bands.edit', compact('band'));
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
        $band = Band::all()->find($id);
        $band->update($request->all());
        return redirect('/bands/' . $id)->with('succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {   
        $band = Band::all()->find($id);
        if (!$request->has('is_deleted')) {
            $request->merge(['is_deleted' => 1]);
        }
        //$deactivate = $request->get('is_deleted');
        $band->update($request->all());
        return redirect('/bands/')->with('succes');

    }
}
