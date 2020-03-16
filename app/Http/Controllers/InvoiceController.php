<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*  */
use Illuminate\Support\Collection;
/*  */

class InvoiceController extends Controller
{
    /*  */
    public function admin()
    {
        $invoices = new Collection;
        if (auth()->user()->stripe_id) { /* Verifica si el campo stripe_id de la tabla users no está vacía */
            $invoices = auth()->user()->invoices();
        }
        return view('invoices.admin', compact('invoices'));
    }

    public function download($id)
    {
        dd($id);
    }
    /*  */
}
