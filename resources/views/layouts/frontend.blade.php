
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Album example · Bootstrap v5.1</title>


    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/backend/css/bootstrap.min.css')}}" rel="stylesheet">


    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


</head>
<body>

@include('frontend.partial.header')

<main>
    @if(session()->has('message'))
        <div >
            <p class="alert alert-{{session()->get('alert')}} text-center">{{session()->get('message')}}</p>
        </div>

    @endif

   @yield('main')

</main>

@include('frontend.partial.footer')


<script src="{{asset('assets/backend/js/bootstrap.bundle.min.js')}}"></script>


</body>
</html>
