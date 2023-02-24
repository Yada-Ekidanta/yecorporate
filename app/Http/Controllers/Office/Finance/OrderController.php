<?php

namespace App\Http\Controllers\Office\Finance;

use App\Http\Controllers\Controller;
use App\Models\Finance\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Order::where('id', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('pages.office.finance.order.list', compact('collection'));
        }
        return view('pages.office.finance.order.main');
    }

}
