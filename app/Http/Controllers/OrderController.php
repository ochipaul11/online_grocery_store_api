<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrdersResource;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderController extends Controller
{
    public function index()
    {
        // $orders = Order::find(1)->groceries;
        // return OrdersResource::collection(Order::with('groceries')->get());
        JsonResource::withoutWrapping();
        $orders = Order::with('groceries')->get();
        return OrdersResource::collection($orders);
    }

    public function store(Request $request)
    {
        $order = Order::create([
            'grocery_id' => $request->input('grocery_id'),
            'quantity' => $request->input('quantity'),
            'total_price' => $request->input('total_price'),
            'user_id' => $request->input('user_id')
        ]);
        JsonResource::withoutWrapping();

        return response()->json($order, 201);

        //return Grocery::create($request->all());
    }

    public function show($id)
    {
        JsonResource::withoutWrapping();

        return new OrdersResource(Order::findOrFail($id));
        //return Order::findOrFail($id);

    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->update($request->all());
        return new OrdersResource($order);

    }

    public function destroy($id)
    {
        //
    }
}
