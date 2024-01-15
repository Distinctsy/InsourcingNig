<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Insourcing Limited</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .title > a {
                color: #636b6f;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

    <div class="row text-center">

<div class="col-12 text-center">
    <!-- <h1>Insourcing</h1> -->
    <h2> Job Vacancies</h2>
</div>

<div class="col-sm-6 col-md-4 col-xl-12">
    <div class="card border-white">
        <div class="card-header">Web Developer</div>
            <div class="card-body">
                <p class="card-text">Responsible for creating and managing websites.</p>
                <a href="<?php echo e(route('client.home')); ?>">APPLY FOR JOB</a>
            </div>
        </div>
    </div>


<div class="col-sm-6 col-md-4 col-xl-12">
    <div class="card border-white">
        <div class="card-header">Senior Developer</div>
            <div class="card-body">
                <p class="card-text">Responsible for managing web developers on the team.</p>
                <a href="<?php echo e(route('client.home')); ?>">APPLY FOR JOB</a>
            </div>
        </div>
    </div>


<div class="col-sm-6 col-md-4 col-xl-12">
    <div class="card border-white">
        <div class="card-header">Project Manager</div>
            <div class="card-body">
                <p class="card-text">Responsible for managing project deadlines and making sure project is completed on time.</p>
                <a href="<?php echo e(route('client.home')); ?>">APPLY FOR JOB</a>
            </div>
        </div>
    </div>
</div>




           

            
              
                
                <!-- <div class="title m-b-md"> -->
                   
                <!-- </div> -->

                
           
        </div>
    </body>
</html>
<?php /**PATH /Users/mickydamz/Documents/websites/Laravel-Test-Result-PDF/resources/views/welcome.blade.php ENDPATH**/ ?>