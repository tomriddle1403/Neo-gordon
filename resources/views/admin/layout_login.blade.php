<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title') &mdash; Gordon </title>
	 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flat-ui/2.2.2/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flat-ui/2.2.2/css/flat-ui.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

</head>
<body>
	<div class="container">
		<div class="row vertical-center">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-{{ $errors->any() ? 'danger' : 'default' }}">
					<div class="panel-heading">
						<h2 class="panel-title">@yield('heading')</h2>
					</div>
					<div class="panel-body">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <strong>We found some errors</strong>

                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

						@yield('content')
					</div>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/flat-ui/2.2.2/js/vendor/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/flat-ui/2.2.2/js/flat-ui.min.js"></script>
</body>
</html>
