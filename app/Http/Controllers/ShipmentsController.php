<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShipmentsController extends Controller
{
    public function store(Request $request)
    {
        $shipment = \App\Models\Shipments::create();
        return response()->json(['shipment' => $shipment]);
    }
}
