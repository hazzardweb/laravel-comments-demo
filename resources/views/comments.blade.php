<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Comments</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/comments/css/prism-okaidia.css">
    <link rel="stylesheet" href="/vendor/comments/css/comments.css">
    <link rel="stylesheet" href="/vendor/comments/css/demo.css">
</head>
<body>
    @include('comments::navbar')

    <a href="https://github.com/hazzardweb/laravel-comments-demo"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png"></a>

    <div class="container">
        <div id="demo" class="col-md-9 col-md-offset-2">
            <div class="pull-left">
                <a href="{{ route('comments.admin.index') }}" class="btn btn-primary btn-sm">Admin</a>
            </div>

            <div class="pull-right">
                <?php if (Auth::check()) { ?>
                    <b><?php echo Auth::user()->name; ?></b> |
                    <a href="/auth/logout">Logout</a>
                <?php } else { ?>
                    <a href="/auth/login" class="btn btn-success btn-sm">Login</a>
                    <a href="/auth/register" class="btn btn-success btn-sm">Register</a>
                <?php } ?>
            </div>
            <div class="clearfix"></div>

            @include('help')

            <!-- Display comments. -->
            @include('comments::display', ['pageId' => 'page1'])
        </div>
    </div>

    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="/vendor/comments/js/prism.js"></script>
    <script src="/vendor/comments/js/comments.js"></script>
</body>
</html>
