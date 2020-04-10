
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>
            @lang('messages.lbtablero')
        </title>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <!-- Font -->
        <!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">-->
        <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;500;700&display=swap" rel="stylesheet">
            <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
            <link href="{{ asset('css/tableros.css') }}" rel="stylesheet"/>
            <!-- Bootstrap -->
            <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" rel="stylesheet">
            </link>
        </link>
    </head>
    <body>
        <div class="container mt-4">
            <div class="row mt-20">
                <div class="col text-center">
                    <img class="logo-404" src="{{ asset('/img/404.jpg') }}"/>

                </div>
            </div>
        </div>
    </body>
</html>