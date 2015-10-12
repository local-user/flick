<?php namespace flick;
#
#   [ flick/flick.php ]
#


    /** require 'lib/' **/
    require_once('../php/class-argument.php');
    require_once('../php/class-exception.php');

    /** args **/ $arg = new argument();
    $args      = $arg->get_arguments();

    /** redirect **/
    if( $args['delay'] > 0 ){
        header( "refresh:{$args['delay']};url={$args['url']}" );
    }


?>
<!DOCTYPE html>
<html>
    <head>

        <!-- css -->
        <link rel="stylesheet" type="text/css" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />

        <!-- css -->
        <style>
            .animate-loading {
                animation-name: loading;
                animation-duration: <?php echo $args['delay']; ?>s;
            }
        </style>

        <!-- font (google) -->
        <link href='http://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>

        <!-- title -->
        <title>flick</title>

    </head>
    <body>
        <div id="container">
            <div id="crust" class="animate-loading">
                <div id="label">
                    <h2><?php echo "Redirecting in {$args['delay']} seconds..."; ?></h2>
                </div>
                <div id="core">
                    <h1><?php echo $args['url']; ?></h1>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
#
# ^(0.o)> --- pew pew
#
?>
