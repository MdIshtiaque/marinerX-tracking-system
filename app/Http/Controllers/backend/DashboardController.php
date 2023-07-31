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
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $orders = Order::with([
            'ports',
            'currentPort.port',
            'status' => function ($query) {
                $query->latest()->get();
            },
        ])->orderBy('id', 'asc')->paginate(10);

        return view('backend.pages.order.index', ['orders' => $orders]);
    }
}
