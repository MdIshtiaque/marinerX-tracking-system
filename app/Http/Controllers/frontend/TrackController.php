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
        if($request->inlineRadioOptions == 'option1')
        {
            $isSearch = true;
            $datas = Order::with('status', 'currentPort', 'ports')->whereBooking_no($request->search)->first();
        }
        if($request->inlineRadioOptions == 'option2')
        {
            $isSearch = true;
            $datas = Order::with('status', 'currentPort', 'ports')->whereBl_no($request->search)->first();
        }
        if($request->inlineRadioOptions == 'option3')
        {
            $isSearch = true;
            $datas = Order::with('status', 'currentPort', 'ports')->whereContainer_no($request->search)->first();
        }

        if(isset($datas->currentPort)){
                foreach($datas->ports as $port){
                    if($datas->currentPort->port_id === $port->id)
                    {
                        $active[] = $port->port_type;
                        break;
                    }else{
                        $active[] = $port->port_type;
                    }
                }
        }
        // return $datas;
        // dd($request->all());
        return view('frontend.pages.tracking.track', ['datas' => $datas, 'request' => $request, 'isSearch' => $isSearch, 'active' => $active]);
    }

}
