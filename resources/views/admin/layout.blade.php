<!DOCTYPE html>
<html>
<head>
    <title>Gordon Duff &amp; Linton</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flat-ui/2.2.2/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flat-ui/2.2.2/css/flat-ui.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{!! asset('css/admin.css') !!}">
    @yield('styles')
</head>
<body>
<section class="container-fluid">
    <div class="row no-gutter">
        <div class="col-sm-2">
            <aside class="sidebar">
                <p><img src="{!! asset('img/logo.png') !!}" alt="" class="img-responsive center-block sidebar__logo"></p>
                <ul class="nav nav-stacked sidebar_nav">
                    <li role="presentation"><a href="#" class="nav__link nav__link--active"><i class="fa fa-quote-right"></i> Pages</a></li>
                    <li role="presentation"><a href="#" class="nav__link"><i class="fa fa-building"></i> Projects</a></li>
                </ul>
            </aside>
        </div>
        <div class="col-sm-10">
            <main class="main">@yield('main')</main>
        </div>
    </div>
</section>
<script src="//cdnjs.cloudflare.com/ajax/libs/flat-ui/2.2.2/js/vendor/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/flat-ui/2.2.2/js/flat-ui.min.js"></script>
<script>
$(function () {
  $('input[data-toggle=switch]').bootstrapSwitch()
})
</script>
@yield('scripts')
</body>
</html>
