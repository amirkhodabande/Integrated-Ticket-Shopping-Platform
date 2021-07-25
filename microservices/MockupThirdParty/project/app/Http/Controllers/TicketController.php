<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request): \Illuminate\Http\Response
    {
        $tickets = Ticket::search($request->all());
        return response($tickets);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Ticket $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket): \Illuminate\Http\Response
    {
        return response($ticket);
    }

    /**
     * @param \App\Models\Ticket $ticket
     * @return \Illuminate\Http\Response
     */
    public function purchaseTicket(Ticket $ticket): \Illuminate\Http\Response
    {
        return response(['message' => 'Ticket purchased successfully.', 'data' => $ticket]);
    }
}
