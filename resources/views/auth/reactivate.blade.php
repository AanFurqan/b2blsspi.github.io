<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reactivate Account</title>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>


<body>
    <section>
        <nav class="navbar navbar-expand-md bg-body" style="height: 70px;">
            <div class="container-fluid"><img class="img-fluid" width="343" height="110"
                    src="https://plastictray.com.my/wp-content/uploads/2023/01/logo-big-2023.png" />
            </div>
        </nav>
        <div style="height: 56px;background: #37bc9b;"></div>
        <div style="text-align: ;padding-top: 150px;padding-bottom: 150px;">
            @if(isset($QR_Image))
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Reactivation QR Code</div>
                        <div class="card-body text-center">
                            <p>Scan the QR code using your authenticator app to reactivate your account.</p>
                            <div>{!! $QR_Image !!}</div>
                            <p>Alternatively, you can use the code <strong>{{ $secret }}</strong></p>
                            <p>Once scanned, click the button below to proceed to the login page.</p>
                            <form method="POST" action="{{ route('check.reactivation') }}">

                                @csrf
                                <input type="hidden" name="email" value="{{ $email }}">

                            </form>

                            <a href="{{ route('login') }}" class="btn btn-link"><button
                                    class="btn btn-primary">Login</button></a>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card ">
                        <div class="card-header">Reactivation Form</div>
                        <div class="card-body">
                            <form style="text-align:center align-items-center" method="POST"
                                action="{{ route('check.reactivation') }}">
                                @csrf
                                <div class="mb-3 ">
                                    <label for="email" class="form-label">Enter your email to reactivate your
                                        account:</label>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control " id="email" name="email" required>
                                    </div>
                                    @error('email')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Reactivate Account</button>
                                <a class="col-auto  btn btn-link" href="{{ route('login') }}">Login</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>