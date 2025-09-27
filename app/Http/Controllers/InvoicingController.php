<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class InvoicingController extends Controller
{
    public function show(): View
    {
        return view('invoicing');
    }
}
