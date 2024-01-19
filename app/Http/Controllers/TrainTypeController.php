<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TrainType;
use DB;


class TrainTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainTypes= TrainType::all();

        return view('trainsType/index',[
            'trainTypes' => $trainTypes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('trainsType/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $trainType = new TrainType;
        $trainType -> type = $request -> input('Tipo');
        $trainType -> save();

        return redirect('/trainsType');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trainType = TrainType::find($id);
        return view('trainsType/show',['trainType'=>$trainType]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $trainType = TrainType::find($id);
        return view('trainsType/edit',['trainType'=>$trainType]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $trainType = TrainType::find($id);

        $trainType -> type = $request -> input('trains_type');
        $trainType -> save();

        return redirect('/trainsType');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('train_types')->where('id','=',$id)->delete();
        return redirect('/trainsType');
    }
}
