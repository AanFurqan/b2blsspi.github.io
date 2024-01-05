<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>2 Factor Authentication </title>

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
                        <h4 class="card-heading text-center mt-4">Set up Google Authenticator</h4>

                        <div class="card-body" style="text-align: center;">
                            <p>Set up your two factor authentication by scanning the barcode below. Alternatively, you
                                can use
                                the code <strong>{{ $secret }}</strong></p>
                            <div>
                                {!! $QR_Image !!}
                            </div>
                            <p>You must set up your Google Authenticator app before continuing. You will be unable to
                                login
                                otherwise</p>
                            <div>
                                <a href="{{ route('complete.registration') }}" class="btn btn-primary">Complete
                                    Registration</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="row justify-content-center align-items-center ">
                <div class="col-md-6 ">
                    <div class="card">
                        <div class="card-header">
                            <div class="panel-heading font-weight-bold">2 Factor Authentication </div>
                            @if($errors->any())
                            <b style="color:red"> {{$errors->first()}}</b>

                            @endif
                        </div>
                        <div class="card-body">
                            <form class="form" method="POST" action="{{ route('2fa') }}">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <p>Please enter the <strong>OTP</strong> generated on your Authenticator App.
                                        <br> Ensure you submit the current one because it refreshes every 30
                                        seconds.
                                    </p>
                                    <label for="one_time_password" class="col-md-4 control-label">One Time
                                        Password</label>


                                    <div class="col-md-6 py-3">
                                        <input id="one_time_password" type="number" class="form-control"
                                            name="one_time_password" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>
                                    </div>
                                </div>
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