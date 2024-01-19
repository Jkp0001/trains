<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TicketType;
use DB;


class TicketTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticketTypes= TicketType::all();

        return view('ticketsType/index',[
            'ticketTypes' => $ticketTypes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ticketsType/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ticketType = new TicketType;
        $ticketType -> type = $request -> input('Tipo');
        $ticketType -> save();

        return redirect('/ticketsType');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ticketType = TicketType::find($id);
        return view('ticketsType/show',['ticketType'=>$ticketType]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ticketType = TicketType::find($id);
        return view('ticketsType/edit',['ticketType'=>$ticketType]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ticketType = TicketType::find($id);

        $ticketType -> type = $request -> input('ticket_types');
        $ticketType -> save();

        return redirect('/ticketsType');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('ticket_types')->where('id','=',$id)->delete();
        return redirect('/ticketsType');
    }
}
