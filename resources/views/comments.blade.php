<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajax Comment System for Laravel</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/comments/css/prism-okaidia.css">
    <link rel="stylesheet" href="/vendor/comments/css/comments.css">
    <link rel="stylesheet" href="/vendor/comments/css/demo.css">
</head>
<body>
    @include('comments::navbar')

    <div class="container">
        <div id="demo" class="col-md-9 col-md-offset-2">
            <div class="pull-left">
                <a href="{{ route('comments.admin.index') }}" class="btn btn-default btn-sm">Admin Dashboard</a>
            </div>

            <div class="pull-right">
                @if (Auth::check())
                    <b>{{ Auth::user()->name }}</b> |
                    <a href="/auth/logout">Logout</a>
                @else
                    <a href="/auth/login" class="btn btn-success btn-sm">Login</a>
                    <a href="/auth/register" class="btn btn-success btn-sm">Register</a>
                @endif
            </div>
            <div class="clearfix"></div>

            @include('help')

            <!-- Display comments. -->
            @include('comments::display', ['pageId' => 'page1'])
        </div>

        @include('comments::legal')
    </div>

    <script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="http://cdn.jsdelivr.net/vue/1.0.16/vue.min.js"></script>

    <script src="/vendor/comments/js/utils.js"></script>
    <script src="/vendor/comments/js/comments.js"></script>

    <!-- Initialize -->
    <script>
        // Vue.config.debug = true;

        new Vue({el: '#comments'});
    </script>
</body>
</html>
