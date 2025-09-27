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


    public function patients_invoicing()
    {
            return view('admin.index', ['page' => 'patients_invoicing']);
    }

    public function patients_invoicing_details()
    {
            return view('admin.index', ['page' => 'patients_invoicing_details']);
    }
}
