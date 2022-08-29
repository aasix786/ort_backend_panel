<!DOCTYPE html>
<html lang="en">

<head>
@include('partials.head')
</head>

<title>@yield('title')</title>


</head>

<body>
<div class="wrapper">

   @include('partials.sidebar')

    <div class="main">
       @include('partials.navbar')
        @yield('back', )

        @yield('content')

        @include('partials.footer')
    </div>
</div>

@include('partials.scripts')

</body>

</html>
