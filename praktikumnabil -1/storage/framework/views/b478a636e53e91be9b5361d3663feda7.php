<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome-Bootstrap</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body>
    <h1>Build fast, responsif sites with bootstrap</h1>
    <div class="container m-5">
        
        <img class="img-main"src=<?php echo e(Vite::asset('resources/images/main.svg')); ?> alt="img-first">
        <img class="img-main"src=<?php echo e(Vite::asset('resources/images/bs-themes.png')); ?> alt="img-two">

    </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/images/main.svg'); ?>
</body>

</html>
<?php /**PATH C:\Users\aisya\Documents\praktikumnabil\resources\views/welcome.blade.php ENDPATH**/ ?>