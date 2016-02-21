<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajax Comment System for Laravel</title>
    <style>
        body { font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 14px; }
        a { color: #337ab7; text-decoration: none; }
        #demo { max-width: 800px; padding: 10px; margin: 0 auto; }
        .right { float: right; }
    </style>

    <link rel="stylesheet" href="/vendor/comments/css/bootstrapless.css">
    <link rel="stylesheet" href="/vendor/comments/css/prism-okaidia.css">
    <link rel="stylesheet" href="/vendor/comments/css/comments.css">
</head>
<body>
    <div id="demo">
        <a href="/">Home</a> |
        <a href="{{ route('comments.admin.index') }}" class="btn btn-primary btn-sm">Admin</a>

        <div class="right">
            @if (Auth::check())
               <b>{{ Auth::user()->name }}</b> |
               <a href="/auth/logout">Logout</a>
           @else
               <a href="/auth/login">Login</a> |
               <a href="/auth/register">Register</a>
           @endif
        </div>

        <!-- Display comments. -->
        @include('comments::display', ['pageId' => 'page2'])
    </div>

    <script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="http://cdn.jsdelivr.net/vue/1.0.16/vue.min.js"></script>

    <script src="/vendor/comments/js/utils.js"></script>
    <script src="/vendor/comments/js/comments.min.js"></script>

    <!-- Initialize -->
    <script>
        // Vue.config.debug = true;

        new Vue({el: '#comments'});
    </script>
</body>
</html>
