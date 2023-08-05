<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function track(Request $request)
    {
        //        dd($request->all());
        $isSearch = false;
        $active = [];
        $datas = [];

        if ($request->filled('inlineRadioOptions') && $request->filled('search')) {
            $isSearch = true;
            $datas = Order::with('status', 'currentPort', 'ports')
                ->when($request->inlineRadioOptions == 'option1', function ($query) use ($request) {
                    return $query->where('booking_no', $request->search);
                })
                ->when($request->inlineRadioOptions == 'option2', function ($query) use ($request) {
                    return $query->where('bl_no', $request->search);
                })
                ->when($request->inlineRadioOptions == 'option3', function ($query) use ($request) {
                    return $query->where('container_no', $request->search);
                })
                ->first();
        }
        if($request->inlineRadioOptions == 'option4')
        {
            $isSearch = true;
            $datas = Order::with('status', 'currentPort', 'ports')->whereVessel_voy_no($request->search)->first();
        }

        if (isset($datas->currentPort)) {
            foreach ($datas->ports as $port) {
                if ($datas->currentPort->port_id === $port->id) {
                    $active[] = $port->port_type;
                    break;
                } else {
                    $active[] = $port->port_type;
                }
            }
        }
        // return $datas;
        // dd($request->all());
        return view('frontend.pages.tracking.track', ['datas' => $datas, 'request' => $request, 'isSearch' => $isSearch, 'active' => $active]);
    }
}
