<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages/landing-page/index-revisi', [
            'title' => 'Home'
        ]);
    }

    public function about()
    {
        return view('pages/about-us/index', [
            'title' => 'About Us'
        ]);
    }

    public function services()
    {
        return view('pages/service/index-revisi', [
            'title' => 'Services'
        ]);
    }

    public function pricing()
    {
        return view('pages/pricing/index-revisi', [
            'title' => 'Pricing'
        ]);
    }

    public function submitPricing(Request $request)
    {
        $data = $request->all();
        $courier = $data['selectedCourier'];
        $totalBerat = (float)$data['totalBerat'];
        $items = $data['items'];

        $price = 0;
        $shipmentTime = [];
        $itemTotal = 0;

        // Calculate price and shipment time based on the selected courier
        switch ($courier) {
            case 'Udara Reguler':
                $price = 25000;
                $totalBerat = max(0.1, $totalBerat);
                $shipmentTime = [
                    'order' => '7-10 hari',
                    'pengiriman' => '7-10 hari',
                    'local' => '3-5 hari'
                ];
                break;

            case 'Udara Express':
                $price = 220000;
                $totalBerat = max(1, $totalBerat);
                $shipmentTime = [
                    'order' => '3-5 hari',
                    'pengiriman' => '3-5 hari',
                    'local' => '3-5 hari'
                ];
                break;

            case 'Laut':
                $price = 15000;
                $totalBerat = max(0.5, $totalBerat);
                $shipmentTime = [
                    'order' => '10-15 hari',
                    'pengiriman' => '10-15 hari',
                    'local' => '5-7 hari'
                ];
                break;
        }

        // Calculate total item price
        foreach ($items as &$item) {
            $item['total'] = $item['harga'] * $item['quantity'];
            $itemTotal += $item['total'];
        }

        // Calculate total shipping price
        $totalShippingPrice = $price * $totalBerat;
        $totalPrice = $itemTotal + $totalShippingPrice;

        // Calculate total shipment time
        $totalShipmentTime = $this->calculateTotalShipmentTime($shipmentTime);

        // Prepare response data
        $response = [
            'success' => true,
            'message' => 'Calculation successful',
            'data' => [
                'courier' => $courier,
                'totalBerat' => $totalBerat,
                'price' => $price,
                'itemTotal' => $itemTotal,
                'totalShippingPrice' => $totalShippingPrice,
                'totalPrice' => $totalPrice,
                'shipmentTime' => $shipmentTime,
                'totalShipmentTime' => $totalShipmentTime,
                'items' => $items
            ]
        ];

        return response()->json($response);
    }

    // Function to calculate the total shipment time
    private function calculateTotalShipmentTime($shipmentTime)
    {
        $totalMin = 0;
        $totalMax = 0;

        foreach ($shipmentTime as $time) {
            // Extract min and max values from the time range
            if (preg_match('/(\d+)-(\d+) hari/', $time, $matches)) {
                $min = (int)$matches[1];
                $max = (int)$matches[2];
                $totalMin += $min;
                $totalMax += $max;
            }
        }

        // Return combined shipment time as a string
        return "{$totalMin}-{$totalMax} hari";
    }

    public function tracking()
    {
        return view('pages/tracking/index', [
            'title' => 'Tracking'
        ]);
    }

    public function contact()
    {
        return view('pages/contact/index', [
            'title' => 'Contact'
        ]);
    }
}
