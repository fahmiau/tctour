<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TicketDetail;
use App\TicketOrder;
use App\Order;

class OrderController extends Controller
{
    public function cariTiket(Request $request)
    {
        $ticketDetails=TicketDetail::join('depCity','ticketDetails.depCity','=','$request.depCity')
                        ->join('arrCity','ticketDetails.arrCity','=','$request.arrCity')
                        ->join('pergi','ticketDetails.pergi','=','$request.pergi')
                        ->join('pulang','ticketDetails.pulang','=','$request.pulang')

        return $request;
    }
}
