<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PanelController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        return view('home');
    }
}
