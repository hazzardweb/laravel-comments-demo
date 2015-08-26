<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Laravel Comments</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/comments/css/demo.css">
</head>
<body>
    @include('comments::navbar')

    <div id="auth" class="container">
        <div id="demo" class="col-md-9 col-md-offset-2">
            <h3>Login</h3>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/auth/login" method="POST">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>

                <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>

            <p>Don't have an account? <a href="/auth/register">Register</a></p>
        </div>
    </div>
</body>
</html>
