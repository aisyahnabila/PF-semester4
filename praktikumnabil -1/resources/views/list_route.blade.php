<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Route</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <div class="container m-5">
        <h1>List Route</h1>
        <p>You can see the list of routes</p>
        <ol>
            <li>ANY / ........................................................................... Illuminate\Routing ›
                RedirectController</li>
            <li>POST _ignition/execute-solution ............ ignition.executeSolution › Spatie\LaravelIgnition ›
                ExecuteSolutionController</li>
            <li>GET|HEAD _ignition/health-check ........................ ignition.healthCheck › Spatie\LaravelIgnition ›
                HealthCheckController</li>
            <li>POST _ignition/update-config ..................... ignition.updateConfig › Spatie\LaravelIgnition ›
                UpdateConfigController</li>
            <li>GET|HEAD admin/dashboard
                ..................................................................................... admin.dashboard
            </li>
            <li>GET|HEAD admin/items
                .............................................................................................
                admin.items</li>
            <li>GET|HEAD admin/users
                .............................................................................................
                admin.users</li>
            <li>GET|HEAD api/user
                ............................................................................................................
            </li>
            <li>GET|HEAD basic_routing
                .......................................................................................................
            </li>
            <li> GET|HEAD basic_routing
                .......................................................................................................
            </li>
            <li>GET|HEAD controller_route ..............................................................................
                RouteController@index</li>
            <li> GET|HEAD posts/{post}/comments/{comment}
                .....................................................................................</li>
            <li> GET|HEAD profile/{profileId} ...................................................... profileRouteName ›
                RouteController@profile </li>
            <li>GET|HEAD route_priority/user
                .................................................................................................</li>
            <li>GET|HEAD route_priority/{rpId}
                ...............................................................................................</li>
            <li> GET|HEAD routing
                .............................................................................................................
            </li>
            <li>GET|HEAD sanctum/csrf-cookie ............................... sanctum.csrf-cookie › Laravel\Sanctum ›
                CsrfCookieController@show
            </li>
            <li>GET|HEAD title/{title}
                .......................................................................................................
            </li>
            <li> GET|HEAD user/{id}
                ...........................................................................................................
            </li>
            <li> GET|HEAD username/{name}
                .....................................................................................................
            </li>
            <li> GET|HEAD view_route
                ..........................................................................................................
            </li>
            <li> GET|HEAD view_route_list
                .....................................................................................................
            </li>
            <li>GET|HEAD {fallbackPlaceholder}
                ...............................................................................................</li>
        </ol>


    </div>
    @vite('resources/js/app.js')
</body>

</html>
