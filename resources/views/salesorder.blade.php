<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Sales Order</title>
    <script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <section>
        <nav class="navbar navbar-expand-md bg-body" style="height: 70px;">
            <div class="container-fluid"><img class="img-fluid" width="343" height="110"
                    src="https://plastictray.com.my/wp-content/uploads/2023/01/logo-big-2023.png" /></div>
        </nav>
        <section>
            <nav class="navbar navbar-expand-md"
                style="background: #37bc9b;--bs-body-bg: #37bc9b;color: rgb(255,255,255);">
                <div class="container-fluid">
                    <div id="navcol-1" class="collapse navbar-collapse justify-content-end" style="color: #ffffff;">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"
                                    style="color: #ffffff;">
                                    Language
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav" style="color: #ffffff;--bs-body-font-weight: 600;margin-left: 6px;">
                            <li class="nav-item" style="color: #ffffff;--bs-body-font-weight: 600;margin-left: 6px;"><a
                                    class="nav-link active d-table-row" href="#"
                                    style="color: #ffffff;--bs-body-font-weight: 600;margin-left: 6px;"></a></li>
                            <li class="nav-item"
                                style="color: #ffffff;--bs-body-font-weight: 600;margin-left: 6px;margin-top: 2px;"><a
                                    class="nav-link active d-table-row" href="#"
                                    style="color: #ffffff;--bs-body-font-weight: 600;margin-left: 6px;margin-top: 2px;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                        class="bi bi-question-circle" viewBox="0 0 16 16"
                                        style="font-size: 30px;margin: 0px;margin-top: 3px;margin-right: 10px;">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                        <path
                                            d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94" />
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item"
                                style="color: #ffffff;--bs-body-font-weight: 600;margin-left: 6px;margin-top: 2px;"><a
                                    class="nav-link active d-table-row" href="#"
                                    style="color: #ffffff;--bs-body-font-weight: 600;margin-left: 6px;margin-top: 2px;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                        class="bi bi-bell" viewBox="0 0 16 16"
                                        style="font-size: 30px;margin: 0px;margin-top: 3px;margin-right: 10px;">
                                        <path d=" M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4.002 4.002 0 0 0
                                        4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663
                                        2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002
                                        4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78
                                        1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1
                                        1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item"
                                style="color: #ffffff;--bs-body-font-weight: 600;margin-left: 6px;margin-top: 2px;"><a
                                    class="nav-link active d-table-row" href="#"
                                    style="color: #ffffff;--bs-body-font-weight: 600;margin-left: 6px;margin-top: 2px;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                        class="bi bi-gear" viewBox="0 0 16 16"
                                        style="font-size: 30px;margin: 0px;margin-top: 3px;margin-right: 10px;">
                                        <path
                                            d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                        <path
                                            d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item" style="color: #ffffff;--bs-body-font-weight: 600;margin-left: 6px;">
                            </li>
                            <li class="nav-item" style="color: #ffffff;--bs-body-font-weight: 600;margin-left: 6px;"><a
                                    class="nav-link" href="#"
                                    style="color: #ffffff;--bs-body-font-weight: 600;margin-left: 6px;">(company
                                    name)</a>
                            </li>
                            <li class="nav-item dropdown"
                                style="color: #ffffff;--bs-body-font-weight: 600;margin-left: 6px;">
                                <a id="navbarDropdown" style="color:#ffffff" class="nav-link dropdown-toggle" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" style="background:#" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
        <section>
            <div class="p-3">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="tab"
                            href="#tab-1"><svg class="bi bi-box-fill text-body" fill="currentColor" height="1em"
                                viewBox="0 0 16 16" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.004-.001.274-.11a.75.75 0 0 1 .558 0l.274.11.004.001 6.971 2.789Zm-1.374.527L8 5.962 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339Z"
                                    fill-rule="evenodd"></path>
                            </svg> Order History </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab"
                            href="#tab-2"><svg class="bi bi-list-task text-body" fill="currentColor" height="1em"
                                viewBox="0 0 16 16" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"
                                    fill-rule="evenodd"></path>
                                <path
                                    d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z">
                                </path>
                                <path
                                    d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"
                                    fill-rule="evenodd"></path>
                            </svg> Place Order </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab"
                            href="#tab-3"><svg class="bi bi-search text-body" fill="currentColor" height="1em"
                                viewBox="0 0 16 16" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg>
                            </svg> Search </a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active" role="tabpanel">
                        <section>
                            <div class="container mt-4 py-3">
                                <div class="column ">
                                    <button class="btn btn-primary" onclick="check_repeat_order()">Repeat Order</button>
                                    <button id="btn-confirm" class="btn btn-primary d-none"
                                        onclick="confirm_order()">Confirm</button>
                                    <button id="btn-submit" class="btn btn-primary d-none"
                                        onclick="submit_order()">Submit</button>

                                </div>

                                <table class="table table-striped table-bordered shadow mt-3">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
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
                                    <tbody id="order">
                                        @foreach ($salesorders as $id => $sales)
                                        <tr>
                                            <td><input class="d-none" type="checkbox" id="{{$sales->id}}"></td>
                                            <td scope="col">{{$sales->id}}</td>
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

                                        <script>
                                            const table = document.getElementById("order");

                                            for (let i = 0; i < table.rows.length; i++) {
                                                // Use cells to access the cells in a row
                                                const cellContent = table.rows[i].cells[5].textContent;

                                                if (cellContent === "Pending") {
                                                    table.rows[i].style.display = "none";
                                                }
                                            }
                                        </script>
                                    </tbody>
                                </table>

                                <div class="d-none " id="repeat_order_sec">
                                    <h3>Repeat Order</h3>
                                    <div class="column">
                                        <button class="btn btn-primary" id="cancel_repeat_order_button"
                                            onclick="cancelRepeatOrders()">Cancel</button>

                                    </div>
                                    <table id="tblrptorder" class="table table-striped table-bordered shadow mt-3">
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
                                        <tbody id="repeat_order">
                                            @foreach ($repeat_orders as $id => $repeat)
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
                                </div>
                        </section>
                    </div>
                    <div id="tab-2" class="tab-pane" role="tabpanel">
                        <section>
                            <div class="row col-md-4"
                                style="padding-right: 140px;margin-bottom: 14px;margin-top: 40px;">
                                <div
                                    class="col text-center justify-content-center align-items-center align-content-center align-self-center">
                                    <a id="deleteCookie" class="text-center" href="#" style="text-decoration: none;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            fill="currentColor" class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2z" />
                                        </svg>
                                        <h6 class="text-center justify-content-center align-items-center align-content-center align-self-center"
                                            style="font-size: 12px;">New</h6>
                                    </a>
                                </div>
                                <div
                                    class="col text-center justify-content-center align-items-center align-content-center align-self-center">
                                    <a id="getCookie" class="text-center text-decoration-none" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            fill="currentColor" class="bi bi-file-earmark-text-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                                        </svg>
                                        <h6 class="text-center justify-content-center align-items-center align-content-center align-self-center"
                                            style="font-size: 12px;">Template</h6>
                                    </a>
                                </div>
                                <div
                                    class="col text-center justify-content-center align-items-center align-content-center align-self-center">
                                    <a id="setCookie" class="text-center text-decoration-none" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            fill="currentColor" class="bi bi-floppy-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M0 1.5A1.5 1.5 0 0 1 1.5 0H3v5.5A1.5 1.5 0 0 0 4.5 7h7A1.5 1.5 0 0 0 13 5.5V0h.086a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5H14v-5.5A1.5 1.5 0 0 0 12.5 9h-9A1.5 1.5 0 0 0 2 10.5V16h-.5A1.5 1.5 0 0 1 0 14.5z" />
                                            <path
                                                d="M3 16h10v-5.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5zm9-16H4v5.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5zM9 1h2v4H9z" />
                                        </svg>
                                        <h6 class="text-center justify-content-center align-items-center align-content-center align-self-center"
                                            style="font-size: 12px;">Save</h6>
                                    </a>
                                </div>
                                <div
                                    class="col text-center justify-content-center align-items-center align-content-center align-self-center">
                                    <a id="submitOrder" class="text-center text-decoration-none" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            fill="currentColor" class="bi bi-send-check-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 1.59 2.498C8 14 8 13 8 12.5a4.5 4.5 0 0 1 5.026-4.47L15.964.686Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z" />
                                            <path
                                                d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z" />
                                        </svg>
                                        <h6 class="text-center justify-content-center align-items-center align-content-center align-self-center"
                                            style="font-size: 12px;">Save &amp; Submit</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="float-left px-5 row g-3">
                                <form id="form1" action="{{ route('salesorders.store') }}" method="POST">
                                    @csrf <!-- CSRF protection token -->
                                    <div class="form-group col-2"><label for="date">Date</label><input id="date"
                                            class="form-control border-dark" type="date" required name="OrderDate" />
                                    </div>
                                    <div class="form-group col-6"><label for="customerSearch">Customer</label><input
                                            id="customerSearch" class="form-control border-dark" type="search" required
                                            placeholder="Search" name="CustomerID" /></div>
                                    <div class="form-group col-3"><label for="customerName">Customer Name</label><input
                                            id="customerName" class="form-control border-dark" type="text"
                                            name="CustomerName" />
                                    </div>
                                    <div class="form-group col-2"><label for="orderStatus">Order Status</label><select
                                            id="orderStatus" class="form-control border-dark" name="OrderStatus"
                                            disabled readonly>
                                        </select></div>
                                    <div class="form-group col-3"><label for="productCode">Product Code</label><input
                                            id="productCode" class="form-control border-dark" type="search"
                                            name="ProductID" />
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-2"><label for="quantity">Quantity</label><input
                                                id="quantity" class="form-control border-dark" type="number"
                                                name="Quantity" />
                                        </div>
                                        <div class="form-group col-md-2"><label for="price">Price</label><input
                                                id="price" class="form-control border-dark" type="number" name="Price">
                                        </div>
                                        <div class="form-group col-md-2"><label for="total_price">Total
                                                Price</label><input id="total_price" class="form-control border-dark"
                                                type="number" name="total_price" disabled></div>
                                    </div>
                                    <div class="form-group col-6"><label for="deliveryPeriod">Delivery
                                            Period</label><input id="deliveryPeriod" class="form-control border-dark"
                                            type="text" name="DeliveryPeriod" /></div>
                                    <div class="form-group col-6"><label for="remarks">Remarks</label><input
                                            id="remarks" class="form-control border-dark" type="text" name="Remarks" />
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                    <div id="tab-3" class="tab-pane" role="tabpanel">
                        <section>
                            <div class="container mt-4 py-3">
                                <div class="d-flex justify-content-center row">
                                    <div class="col-md-6">
                                        <form action="{{ route('live-search') }}" method="GET" id="live-search-form">
                                            {{ csrf_field() }}
                                            <div class="input-group">
                                                <input class="form-control" type="text" placeholder="Search"
                                                    aria-label="Search" id="live-search-input">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-auto">
                                        <table class="table table-striped table-bordered shadow mt-3">

                                        </table>
                                    </div>

                                    <div class="col-auto" id="live-search-results">
                                        <!-- Results will be displayed here -->
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>



    <script>
        $(document).ready(function () {
            // Set CSRF token for all AJAX requests
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Delete Cookie
            $("#deleteCookie").click(function (e) {
                e.preventDefault();
                $.ajax({
                    url: "/delete-cookie",
                    method: "POST",
                    success: function (response) {
                        console.log(response);

                        location.reload(true);
                    },
                    error: function (error) {
                        console.error(error);

                    }
                });
            });

            // Get Cookie
            $("#getCookie").click(function (e) {
                e.preventDefault();
                $.ajax({
                    url: "/get-cookie",
                    method: "GET",
                    success: function (response) {
                        console.log(response);

                        if (response.data) {
                            populateFormFields(response.data);
                        } else {

                            console.log('No data found in the cookie.');
                        }
                    },
                    error: function (error) {
                        console.error(error);

                    }
                });
            });

            // Set Cookie
            $("#setCookie").click(function (e) {
                e.preventDefault();
                var formData = $("#form1").serialize();
                saveFormData(formData);
            });

            // Function to populate form fields
            function populateFormFields(data) {
                $("#date").val(data.OrderDate);
                $("#customerSearch").val(data.CustomerID);
                $("#customerName").val(data.CustomerName);
                $("#orderStatus").val(data.OrderStatus);
                $("#productCode").val(data.ProductID);
                $("#quantity").val(data.Quantity);
                $("#price").val(data.Price);
                $("#total_price").val(data.total_price);
                $("#deliveryPeriod").val(data.DeliveryPeriod);
                $("#remarks").val(data.Remarks);
            }

            // Function to save form data
            function saveFormData(formData) {
                $.ajax({
                    url: "/set-cookie", // Replace with your Laravel route
                    method: "POST",
                    data: formData,
                    success: function (response) {
                        console.log(response);
                        // Handle success, e.g., show a success message
                    },
                    error: function (error) {
                        console.error(error);
                        // Handle error, e.g., show an error message
                    }
                });
            }
        });

        //Total Price Function
        var quantityInput = document.getElementById('quantity');
        var priceInput = document.getElementById('price');
        var totalPriceInput = document.getElementById('total_price');


        quantityInput.addEventListener('input', updateTotalPrice);
        priceInput.addEventListener('input', updateTotalPrice);

        function updateTotalPrice() {
            var quantity = parseFloat(quantityInput.value) || 0;
            var price = parseFloat(priceInput.value) || 0;
            var totalPrice = quantity * price;

            totalPriceInput.value = totalPrice.toFixed(2);
        }

        // Submit Sales Order
        function submitForm() {
            Swal.fire({
                title: 'Confirm Order',
                text: 'Are you sure you want to save and submit the order?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Yes, submit it!',
                cancelButtonText: 'No, cancel!',
            }).then((result) => {

                if (result.isConfirmed) {

                    document.getElementById('form1').submit();
                }
            });
        }

        document.getElementById('submitOrder').addEventListener('click', function (event) {
            event.preventDefault();
            submitForm();
        });

        // Cancel Repeat Order
        function cancelRepeatOrders() {
            const repeatOrderTableBody = document.getElementById("repeat_order");


            for (let i = 0; i < repeatOrderTableBody.rows.length; i++) {
                const orderRow = repeatOrderTableBody.rows[i];
                const orderStatusCell = orderRow.cells[5];
                const orderStatus = orderStatusCell.textContent;


                if (orderStatus === "Submitted") {
                    alert(
                        `Cannot cancel order ${orderRow.cells[1].textContent}. Order status is already submitted.`
                    );
                } else {

                    orderStatusCell.textContent = "Cancelled";

                    repeatOrderTableBody.deleteRow(i);

                    i--;
                }
            }
            for (let i = 0; i < orderTableBody.rows.length; i++) {
                orderTableBody.rows[i].cells[0].firstChild.checked = false;
            }
        }

        // Repeat Order
        function check_repeat_order() {
            for (i = 0; i < table.rows.length; i++) {
                table.rows[i].cells[0].firstChild.classList.remove("d-none");
                table.rows[i].style.removeProperty("display");
            }

            document.getElementById("btn-confirm").classList.remove("d-none");
            document.getElementById("btn-submit").classList.remove("d-none");
            document.getElementById("repeat_order_sec").classList.remove("d-none");
        }

        orders = [];

        const orderTableBody = document.getElementById("order");
        const repeatOrderTableBody = document.getElementById("repeat_order");

        function confirm_order() {
            const repeatOrderTableBody = document.getElementById("repeat_order");
            const selectedOrderIds = [];


            for (let i = 0; i < orderTableBody.rows.length; i++) {
                const checked = orderTableBody.rows[i].cells[0].firstChild.checked;

                if (checked) {
                    const orderRow = orderTableBody.rows[i];
                    const orderId = orderRow.cells[1].textContent;

                    // Check if the order ID is already in the repeatOrderTableBody
                    if (!isOrderIdInRepeatTable(orderId, repeatOrderTableBody)) {
                        selectedOrderIds.push(orderId);

                        const newRow = repeatOrderTableBody.insertRow(-1);

                        // Copy each cell's content to the new row
                        for (let j = 0; j < orderRow.cells.length; j++) {
                            const cell = newRow.insertCell(j);
                            cell.textContent = orderRow.cells[j].textContent;
                        }

                        newRow.cells[5].textContent = "Confirm";
                    } else {
                        alert(`Order ${orderId} is already selected.`);
                    }
                }
            }

        }

        // Function to check if the order ID is already in the repeatOrderTableBody
        function isOrderIdInRepeatTable(orderId, repeatOrderTableBody) {
            for (let i = 0; i < repeatOrderTableBody.rows.length; i++) {
                if (orderId === repeatOrderTableBody.rows[i].cells[1].textContent) {
                    return true; // Order ID already exists
                }
            }
            return false; // Order ID does not exist
        }

        // Function Submit Order
        function submit_order() {
            const selectedOrderIds = [];
            console.log(selectedOrderIds);
            // Iterate through the rows in the "order" table
            for (let i = 0; i < orderTableBody.rows.length; i++) {
                const checked = orderTableBody.rows[i].cells[0].firstChild.checked;
                if (checked) {
                    const orderRow = orderTableBody.rows[i];
                    const sales_id = orderRow.cells[1].textContent;
                    const OrderDate = orderRow.cells[2].textContent;
                    const CustomerID = orderRow.cells[3].textContent;
                    const CustomerName = orderRow.cells[4].textContent;
                    const OrderStatus = orderRow.cells[5].textContent;
                    const ProductID = orderRow.cells[6].textContent;
                    const Quantity = orderRow.cells[7].textContent;
                    const Price = orderRow.cells[8].textContent;
                    const total_price = orderRow.cells[9].textContent;
                    const DeliveryPeriod = orderRow.cells[10].textContent;
                    const Remarks = orderRow.cells[11].textContent;

                    // Collect data from the selected order dynamically
                    const orderData = {};
                    for (let j = 1; j < orderRow.cells.length; j++) {
                        const cellHeader = orderTableBody.rows[0].cells[j].textContent.trim();
                        const cellValue = orderRow.cells[j].textContent.trim();
                        sales_id[cellHeader] = cellValue;
                    }


                    orderData['sales_id'] = sales_id;
                    orderData['OrderDate'] = OrderDate;
                    orderData['CustomerID'] = CustomerID;
                    orderData['CustomerName'] = CustomerName;
                    orderData['OrderStatus'] = OrderStatus;
                    orderData['ProductID'] = ProductID;
                    orderData['Quantity'] = Quantity;
                    orderData['Price'] = Price;
                    orderData['total_price'] = total_price
                    orderData['DeliveryPeriod'] = DeliveryPeriod;
                    orderData['Remarks'] = Remarks;

                    selectedOrderIds.push(orderData);
                }
            }

            // Send selecteder Ihe controller using fetch
            const repeatOrderRoute = "http://localhost:8000/salesorders/repeatOrders";
            fetch(repeatOrderRoute, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify({ selectedOrderIds }),
            })
                .then(response => response.json())
                .then(data => {
                    console.log(data.message);
                    // Refresh the page or update the repeat orders section as needed
                    // window.location.reload();

                    // Call the endpoint to update order status
                    const updateOrderStatusRoute = "http://localhost:8000/salesorders/updateOrderStatus";
                    fetch(updateOrderStatusRoute, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        },
                        body: JSON.stringify({ newStatus: 'Submitted' }), // Adjust 'Submitted' based on your requirement
                    })
                        .then(response => response.json())
                        .then(data => {
                            console.log(data.message);
                            window.location.reload();
                        })
                        .catch(error => console.error('Error updating order status:', error));
                })
                .catch(error => console.error('Error:', error));
        }


        // Function to update OrderStatus
        function updateOrderStatus(newStatus) {
            const updateStatusRoute = "http://localhost:8000/salesorders/updateOrderStatus";
            fetch(updateStatusRoute, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify({ newStatus }),
            })
                .then(response => response.json())
                .then(data => {
                    console.log(data.message);
                    updateOrderStatus('Submitted');
                    // Refresh the page or update the order status section as needed
                })
                .catch(error => console.error('Error updating order status:', error));
        }

        // Function Search
        $(document).ready(function () {
            $('#live-search-input').on('input', function () {
                var query = $(this).val();

                $.ajax({
                    url: '{{ route("live-search") }}',
                    type: 'GET',
                    data: { query: query },
                    success: function (data) {
                        $('#live-search-results').html(data);
                    }
                });
            });
        });



    </script>


</body>

</html>