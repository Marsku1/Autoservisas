<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CarProfile;
class CarProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carProfiles = CarProfile::all();
        return view ('CarProfileViews.index')->with('carProfiles',$carProfiles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CarProfileViews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'make'          =>  'required',
            'model'         =>  'required',
            'fuel_type'     =>  'required',
            'year'          =>  'required',
            'number_plate'  =>  'required'
        ]);
        
        $input = $request->all();
        CarProfile::create($input);
        return redirect('CarProfileViews')->with('success','Car profile added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carProfile = CarProfile::find($id);
        return view('CarProfileViews.show')->with('carProfiles', $carProfile);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carProfile = CarProfile::find($id);
        return view('CarProfileViews.edit')->with('carProfiles', $carProfile);
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
        $this->validate($request, [
            'make'          =>  'required',
            'model'         =>  'required',
            'fuel_type'     =>  'required',
            'year'          =>  'required',
            'number_plate'  =>  'required'
        ]);

        $carProfile = CarProfile::find($id);
        $input = $request->all();
        $carProfile->update($input);
        return redirect('CarProfileViews')->with('success', 'Car profile updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CarProfile::destroy($id);
        return redirect('CarProfileViews')->with('success', 'Car profile deleted!');
    }
}
