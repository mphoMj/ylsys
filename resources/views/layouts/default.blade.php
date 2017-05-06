<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials.head')
</head>

<body>
<div id='page'>
    @include('layouts.partials.mainnav')

        <div class="container">
            @yield('content')
        </div>


    @include('layouts.partials.footer')
</div>
@include('layouts.partials.scripts')
</body>

</html>