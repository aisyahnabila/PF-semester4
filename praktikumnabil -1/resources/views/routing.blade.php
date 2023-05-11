<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel Routing</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <div class="container m-5">
        <h1>Belajar Laravel Routing</h1>

        <div class="list-group mt-4">
            <a href="{{ url('/cloning') }}" class="list-group-item list-group-item-action">Tugas (Bootstrap
                Clone) </a>
        </div>
        <div class="list-group list-group-numbered mt-4">

            {{-- praktek 1, no view, no controller --}}
            <a href="{{ url('/basic_routing') }}" class="list-group-item list-group-item-action">
                Basic Routing <b>(no view, no controller)</b></a>

            {{-- praktek 2, buat view route => --}}
            <a href="{{ url('/view_route') }}" class="list-group-item list-group-item-action">
                View Route </a>

            {{-- praktek 3, buat controller route --}}
            <a href="{{ url('/controller_route') }}" class="list-group-item list-group-item-action">
                Controller Route </a>

            {{-- praktek 4, redirect route --}}
            <a href="{{ url('/') }}" class="list-group-item list-group-item-action">
                Redirect Route
            </a>

            {{-- praktek 5, Route Parameter (Required Parameter) --}}
            <a href="{{ url('/user/12345') }}" class="list-group-item list-group-item-action">
                Route Parameter (Required Parameter) - 1 </a>

            <a href="{{ url('/posts/1204/comments/210122') }}" class="list-group-item list-group-item-action"> Route
                Parameter
                (Required Parameter) - 2</a>

            {{-- praktek 6, Route Parameter (Optional Parameter) --}}
            <a href="{{ url('/username/human') }}" class="list-group-item list-group-item-action"> Route Parameter
                (Optional
                Parameter)</a>

            {{-- praktek 7, route menggunakan regular expression constraints --}}
            <a href="{{ url('/title/thisismytitle') }}" class="list-group-item list-group-item-action">Route with
                Regular Expression Constraints</a>

            {{-- praktek 8, Named Route --}}
            <a href="{{ route('profileRouteName', ['profileId' => '123']) }}"
                class="list-group-item list-group-item-action">
                Named Route
            </a>

            {{-- praktek 9, route priority --}}
            <a href="{{ url('/route_priority/user') }}" class="list-group-item list-group-item-action">
                Route Priority
            </a>

            {{-- praktek 10, fallback routes --}}
            <a href="{{ url('/asdqwezxc') }}" class="list-group-item list-group-item-action">
                Fallback Routes
            </a>

        </div>

        {{-- praktek 11, route groups (route prefixes & route name prefixes) --}}
        <h5 class="mt-4 "> Route Groups (Route Prefiexs & Route Name Prefixes)</h5>
        <div class="list-group list-group-numbered mt-4">
            <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action"> Admin
                Dashboard </a>
            <a href="{{ route('admin.users') }}" class="list-group-item list-group-item-action"> Admin Users</a>
            <a href="{{ route('admin.items') }}" class="list-group-item list-group-item-action"> Admin items</a>
        </div>

        {{-- praktek 12, View Route List --}}
        <h5 class="mt-4">View Route List</h5>
        <div class="list-group mt-4">
            <a href="{{ url('/list_route') }}" class="list-group-item text-danger">php artisan route:list</a>
        </div>

        <h5 class="mt-4">Route Caching</h5>
        <div class="list-group mt-4">
            <a href="" class="list-group-item list-group-item-action text-danger">php artisan route:cache</a>
            <a href="" class="list-group-item list-group-item-action text-danger">php artisan route:clear</a>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
