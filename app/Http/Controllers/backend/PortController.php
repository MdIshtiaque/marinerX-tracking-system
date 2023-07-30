<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CurrentPort;
use Exception;
use Illuminate\Http\Request;

class PortController extends Controller
{
    public function setCurrentPort(Request $request)
    {
        try {
            $isCurrentPort = CurrentPort::where('order_id', $request->orderId)->latest()->first();

            if ($isCurrentPort !== null) {
                $isCurrentPort->update(['is_active' => false]);
            }

            $currentPort = CurrentPort::create([
               'order_id' => $request->orderId,
                'port_id' => $request->ports,
                'is_active' => true
            ]);
            toastr()->addSuccess('Port Set successfully');
        }catch (Exception $exception)
        {
            dd($exception);
            toastr()->addError('Something went wrong');
        }
        return back();
    }
}
