<table class="table table-striped table-bordered shadow mt-3">
    <!-- Your existing table structure -->
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Order ID</th>
            <th scope="col">Order Date</th>
            <th scope="col">Customer ID</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Order Status</th>
            <th scope="col">Product ID</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
            <th scope="col">Total Price</th>
            <th scope="col">Delivery Period</th>
            <th scope="col">Remarks</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($salesorders as $sales)
        <tr>
            <td scope="col">{{$sales->id}}</td>
            <td scope="col"></td>
            <td scope="col">{{$sales->OrderDate}}</td>
            <td scope="col">{{$sales->CustomerID}}</td>
            <td scope="col">{{$sales->CustomerName}}</td>
            <td scope="col">{{$sales->OrderStatus}}</td>
            <td scope="col">{{$sales->ProductID}}</td>
            <td scope="col">{{$sales->Quantity}}</td>
            <td scope="col">{{$sales->Price}}</td>
            <td scope="col">{{$sales->total_price }} </td>
            <td scope="col">{{$sales->DeliveryPeriod}}</td>
            <td scope="col">{{$sales->Remarks}}</td>
        </tr>
        @endforeach
        @foreach ($repeat_orders as $repeat)
        <tr>
            <td scope="col">{{$repeat->id}}</td>
            <td scope="col">{{$repeat->sales_id}}</td>
            <td scope="col">{{$repeat->OrderDate}}</td>
            <td scope="col">{{$repeat->CustomerID}}</td>
            <td scope="col">{{$repeat->CustomerName}}</td>
            <td scope="col">{{$repeat->OrderStatus}}</td>
            <td scope="col">{{$repeat->ProductID}}</td>
            <td scope="col">{{$repeat->Quantity}}</td>
            <td scope="col">{{$repeat->Price}}</td>
            <td scope="col">{{$repeat->total_price }}</td>
            <td scope="col">{{$repeat->DeliveryPeriod}}</td>
            <td scope="col">{{$repeat->Remarks}}</td>
        </tr>
        @endforeach
    </tbody>
</table>