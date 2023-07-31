<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestOrder;
use App\Models\Order;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function store(RequestOrder $request)
    {
        DB::beginTransaction();
        try {
            $order = Order::create([
                'bl_no' => $request->bl_no,
                'booking_no' => $request->booking_no,
                'vessel_voy_no' => $request->vessel_voy_no,
                'no_of_packages' => $request->no_of_packages,
                'starting_port' => $request->starting_port,
                'destination' => $request->destination,
                'on_board_date' => $request->on_board_date,
                'gross_cargo_weight' => $request->gross_cargo_weight,
                'no_of_containers' => $request->no_of_containers,
                'measurement' => $request->measurement,
                'service_requirement' => $request->service_requirement,
                'container_no' => $request->container_no,
                'size' => $request->size,
                'type' => $request->type,
                'seal_no' => $request->seal_no,
                'move_type' => $request->move_type,
                'latest_event' => $request->latest_event,
                'place' => $request->place,
                'vgm' => $request->vgm
            ]);

            $order->ports()->create([
                'order_id' => $order->id,
                'name' => $request->starting_port,
                'port_type' => 'starting'
            ]);

            if ($request->has('second_port') && !empty($request->second_port)) {
                $order->ports()->create([
                    'order_id' => $order->id,
                    'name' => $request->second_port,
                    'port_type' => 'second'
                ]);
            }

            if ($request->has('third_port') && !empty($request->third_port)) {
                $order->ports()->create([
                    'order_id' => $order->id,
                    'name' => $request->third_port,
                    'port_type' => 'third'
                ]);
            }

            $order->ports()->create([
                'order_id' => $order->id,
                'name' => $request->destination,
                'port_type' => 'destination'
            ]);
            DB::commit();
            toastr()->addSuccess('Order created successfully');

        }catch(Exception $exception) {
            DB::rollBack();
            toastr()->addError('Something went wrong');
        }

        return back();
    }

    public function destroy(Request $request, Order $order)
    {
        try{
            $order->delete();
            toastr()->addSuccess('Order deleted successfully');
        }catch (Exception $exception) {
            toastr()->addError('Something went wrong');
        }

        return back();
    }

    public function show(Request $request, Order $order)
    {
        $data = $order->load('ports', 'status', 'currentPort');
        // return $data;
        return view('backend.pages.order.show', ['data' => $data]);
    }

}
