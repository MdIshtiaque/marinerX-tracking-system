<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Http\Request;
use Mockery\Exception;

class StatusController extends Controller
{
    public function changeStatus(Request $request)
    {
//        dd($request->all());
        try {
            $request->validate([
                'order_id' => 'required',
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'status_time_date' => 'required|date',
            ]);
            $currentStatus = Status::create([
                'order_id' => $request->order_id,
                'title' => $request->title,
                'description' => $request->description,
                'status_time_date' => $request->status_time_date
            ]);
            toastr()->addSuccess('Status Change successfully');
        }catch (Exception $exception)
        {
            toastr()->addError('Something went wrong');
        }
        return back();
    }
}
