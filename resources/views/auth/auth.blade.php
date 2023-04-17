<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>25 - Maktab | Login</title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="/css/login.css">
</head>

<body class='snippet-body'>
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
                <div class="panel border bg-white">
                    <div class="panel-heading">
                        <h3 class="pt-3 font-weight-bold">Kirish</h3>
                    </div>
                    <div class="panel-body p-3">
                        <form action="{{ route('auth') }}" method="POST">
                            @csrf
                            <div class="form-group py-2">
                                <div class="input-field">
                                    <span class="far fa-user p-2"></span>
                                    <input type="text" name="email" placeholder="Email">
                                    @error('email')
                                        <p class="help-block text-danger mt-4">Xato</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group py-1 pb-2">
                                <div class="input-field">
                                    <span class="fas fa-lock px-2"></span>
                                    <input type="password" name="password" placeholder="Password" required>
                                    @error('password')
                                        <p class="help-block text-danger mt-4">{{ $message }}</p>
                                    @enderror
                                    <button class="btn bg-white text-muted">
                                        <span class="far fa-eye-slash"></span>
                                    </button>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block mt-4">
                                Kirish
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type='text/javascript'></script>
</body>

</html>
