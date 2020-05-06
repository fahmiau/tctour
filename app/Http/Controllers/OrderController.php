<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\TicketDetail;
use App\TicketOrder;
use App\Order;

class OrderController extends Controller
{
    public function cariTiket(Request $request)
    {
        $ticketDetails = TicketDetail::where('depCity',$request->depCity,
                                            'arrCity',$request->arrcity,
                                            'pergi',$request->pergi,
                                            'pulang',$request->pulang,
                                            'seatClass',$request->seatClass)
                                            ->get();

        // dd($ticketDetails);
        return view('order.showTicket',['ticketDetails'=>$ticketDetails]);
    }
}
