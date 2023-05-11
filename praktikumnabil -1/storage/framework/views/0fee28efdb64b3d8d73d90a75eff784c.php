<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel Routing</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body>
    <div class="container m-5">
        <h1>Belajar Laravel Routing</h1>

        <div class="list-group mt-4">
            <a href="<?php echo e(url('/cloning')); ?>" class="list-group-item list-group-item-action">Tugas (Bootstrap
                Clone) </a>
        </div>
        <div class="list-group list-group-numbered mt-4">

            
            <a href="<?php echo e(url('/basic_routing')); ?>" class="list-group-item list-group-item-action">
                Basic Routing <b>(no view, no controller)</b></a>

            
            <a href="<?php echo e(url('/view_route')); ?>" class="list-group-item list-group-item-action">
                View Route </a>

            
            <a href="<?php echo e(url('/controller_route')); ?>" class="list-group-item list-group-item-action">
                Controller Route </a>

            
            <a href="<?php echo e(url('/')); ?>" class="list-group-item list-group-item-action">
                Redirect Route
            </a>

            
            <a href="<?php echo e(url('/user/12345')); ?>" class="list-group-item list-group-item-action">
                Route Parameter (Required Parameter) - 1 </a>

            <a href="<?php echo e(url('/posts/1204/comments/210122')); ?>" class="list-group-item list-group-item-action"> Route
                Parameter
                (Required Parameter) - 2</a>

            
            <a href="<?php echo e(url('/username/human')); ?>" class="list-group-item list-group-item-action"> Route Parameter
                (Optional
                Parameter)</a>

            
            <a href="<?php echo e(url('/title/thisismytitle')); ?>" class="list-group-item list-group-item-action">Route with
                Regular Expression Constraints</a>

            
            <a href="<?php echo e(route('profileRouteName', ['profileId' => '123'])); ?>"
                class="list-group-item list-group-item-action">
                Named Route
            </a>

            
            <a href="<?php echo e(url('/route_priority/user')); ?>" class="list-group-item list-group-item-action">
                Route Priority
            </a>

            
            <a href="<?php echo e(url('/asdqwezxc')); ?>" class="list-group-item list-group-item-action">
                Fallback Routes
            </a>

        </div>

        
        <h5 class="mt-4 "> Route Groups (Route Prefiexs & Route Name Prefixes)</h5>
        <div class="list-group list-group-numbered mt-4">
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="list-group-item list-group-item-action"> Admin
                Dashboard </a>
            <a href="<?php echo e(route('admin.users')); ?>" class="list-group-item list-group-item-action"> Admin Users</a>
            <a href="<?php echo e(route('admin.items')); ?>" class="list-group-item list-group-item-action"> Admin items</a>
        </div>

        
        <h5 class="mt-4">View Route List</h5>
        <div class="list-group mt-4">
            <a href="<?php echo e(url('/list_route')); ?>" class="list-group-item text-danger">php artisan route:list</a>
        </div>

        <h5 class="mt-4">Route Caching</h5>
        <div class="list-group mt-4">
            <a href="" class="list-group-item list-group-item-action text-danger">php artisan route:cache</a>
            <a href="" class="list-group-item list-group-item-action text-danger">php artisan route:clear</a>
        </div>
    </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>

</html>
<?php /**PATH C:\Users\aisya\Documents\praktikumnabil\resources\views/routing.blade.php ENDPATH**/ ?>