<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function logDataFromDatabase()
    {
        $dataFromDatabase = Sales::all(); // Replace with your actual query

        foreach ($dataFromDatabase as $data) {
            $logMessage = sprintf(
                'Order ID: %d;, Customer ID: %s, Customer: %s, Status: %s, Product: %s, Quantity: %d, Price: %s, Total Price: %d, Delivery Period: %d, Remarks: %s',
                $data['id'],
                $data['CustomerID'],
                $data['CustomerName'],
                $data['OrderStatus'],
                $data['ProductID'],
                $data['Quantity'],
                $data['Price'],
                $data['total_price'],
                $data['DeliveryPeriod'],
                $data['Remarks'],
            );

            Log::channel('custom')->info($logMessage);
        }

        $logFilePath = storage_path('logs/custom.log');
        $logMessage = json_encode(['message' => 'Data logged successfully'], JSON_PRETTY_PRINT) . "\n";

        if (file_put_contents($logFilePath, $logMessage, FILE_APPEND) !== false) {
            echo "Log entry added to file successfully.";
        } else {
            echo "Error writing to the log file.";
        }

        return response()->json(['message' => 'Data logged successfully']);

    }

    public function logDataToCustomDataLog()
    {
        $dataFromDatabase = Sales::all(); // Replace with your actual query

        foreach ($dataFromDatabase as $data) {
            $logEntry = implode(';', [
                $data['id'],
                $data['CustomerID'],
                $data['CustomerName'],
                $data['OrderStatus'],
                $data['ProductID'],
                $data['Quantity'],
                $data['Price'],
                $data['DeliveryPeriod'],
                $data['Remarks']
            ]);
            Log::channel('customdata')->info($logEntry);
        }

        $logFilePath = storage_path('logs/customdata.log');

        return response()->json(['message' => 'Data logged to customdata.log successfully added', 'log_file_path' => $logFilePath]);
    }
}
