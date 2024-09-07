<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use  App\Models\Order as Orders;

class Order extends Controller
{
    public function index()
    {

        $order = Orders::query();

        if(!empty($req->search))
        {

            $keyword = $req->search;

            $order->where(function ($query) use ($keyword) {

                $query->where('order_code', 'LIKE', '%' .$keyword. '%');

            });

        }

        $order->latest();
        $result = $order->paginate(5);


        return view(
            'admin.order.index',
            [
                'order' => $result,
            ]
        );
    }

}
