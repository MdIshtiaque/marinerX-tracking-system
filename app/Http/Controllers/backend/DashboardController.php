<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     *
     *
     */
    public function index(Request $request): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $perPage = $request->input('per_page', 10);
        $orders = Order::with([
            'ports',
            'currentPort.port',
            'status' => function ($query) {
                $query->latest()->get();
            },
        ])->orderBy('id', 'desc')->paginate($perPage);

        return view('backend.pages.order.index', ['orders' => $orders]);
    }
}
