<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Diary</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="css/app.css">        
		<link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container mycontainer">
            <h2>My Diary</h2>
            <p> Store your thoughts permanently and secure </p>
        </div>
        @yield('content')
    </body>
</html>
