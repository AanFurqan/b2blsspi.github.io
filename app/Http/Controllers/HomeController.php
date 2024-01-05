<?php

namespace App\Http\Controllers;

use App\Models\RepeatOrder;
use App\Models\Sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{

    protected $salesorders;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->salesorders = new Sales();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $salesorders = Sales::all();
        $repeat_orders = repeatOrder::all();

        return view('salesorder', compact('salesorders', 'repeat_orders'));
    }

    public function deleteCookie()
    {
        // Delete the cookie
        Cookie::queue(Cookie::forget('formData'));

        return response()->json(['message' => 'Cookie deleted successfully']);
    }

    public function getCookie()
    {
        // Retrieve and return the cookie data
        $cookieData = json_decode(request()->cookie('formData'), true);

        return response()->json(['data' => $cookieData]);
    }

    public function setCookie(Request $request)
    {
        // Set the cookie with data from the request
        $cookieData = $request->all();
        $cookieMinutes = 60; // Adjust this as needed

        Cookie::queue('formData', json_encode($cookieData), $cookieMinutes);

        return response()->json(['message' => 'Cookie set successfully']);
    }



    #Sales Order
    public function store(Request $request)
    {

        $this->salesorders->create($request->all());

        return redirect()->back();

    }

    #Repeat Order
    public function repeatOrder(Request $request)
    {
        // Validate request if necessary
        $selectedOrderIds = $request->input('selectedOrderIds', []);

        foreach ($selectedOrderIds as $orderData) {
            $totalPrice = $orderData['Quantity'] * $orderData['Price'];
            // Assuming you have the necessary fields in your request
            $repeatOrderData = [
                'sales_id' => $orderData['sales_id'],
                'OrderDate' => now(),
                'CustomerID' => $orderData['CustomerID'],
                'CustomerName' => $orderData['CustomerName'],
                'OrderStatus' => $orderData['OrderStatus'],
                'ProductID' => $orderData['ProductID'],
                'Quantity' => $orderData['Quantity'],
                'Price' => $orderData['Price'],
                'total_price' => $totalPrice,
                'DeliveryPeriod' => $orderData['DeliveryPeriod'],
                'Remarks' => $orderData['Remarks'],
            ];

            RepeatOrder::create($repeatOrderData);
        }

        // Optional: You can add a success message or redirect as needed
        return response()->json(['message' => 'Orders repeated successfully']);

    }

    public function updateOrderStatus(Request $request)
    {
        $newStatus = $request->input('newStatus');

        // Get orders with 'Pending', 'Processing', 'Completed', or 'Cancelled' status
        $orders = RepeatOrder::whereIn('OrderStatus', ['Pending', 'Processing', 'Completed', 'Cancelled'])->get();

        // Update the OrderStatus for each orders
        foreach ($orders as $order) {
            $order->update(['OrderStatus' => $newStatus]);
        }

        return response()->json(['message' => 'Order status updated successfully']);
    }


    public function liveSearch(Request $request)
    {
        $query = $request->input('query');

        $salesorders = Sales::where('ProductID', 'LIKE', "%$query%")
            ->orWhere('CustomerID', 'LIKE', "%$query%")
            ->get();

        $repeat_orders = RepeatOrder::where('ProductID', 'LIKE', "%$query%")
            ->orWhere('CustomerID', 'LIKE', "%$query%")
            ->get();

        // Return a partial view with the live search results
        return view('partials.live-search-results', compact('salesorders', 'repeat_orders'));
    }




}
