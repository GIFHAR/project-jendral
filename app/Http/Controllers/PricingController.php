<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function calculate(Request $request)
    {
        // Retrieve form data
        $name = $request->input('name');
        $whatsapp = $request->input('whatsapp');
        $address = $request->input('address');
        $email = $request->input('email');
        $number_of_links = $request->input('number_of_links');
        $freight_type = $request->input('freight_type');
        $item_category = $request->input('item_category');
        $platform = $request->input('platform');
        $length = $request->input('length');
        $width = $request->input('width');
        $height = $request->input('height');
        $total_weight = $request->input('total_weight');

        return view('result', compact('name', 'freight_type', 'item_category', 'total_weight', 'length', 'width', 'height'));
    }
}
