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
                animation-name:         loading;
                animation-duration:     <?php echo $args['delay']; ?>s;
                animation-fill-mode:    forwards;
            }
        </style>

        <!-- font (google) -->
        <link href='http://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>

        <!-- icon -->
        <link rel="shortcut icon" href="icon/favicon.ico">

        <!-- script - delay -->
        <script>

            var delay = <?php echo $args['delay']; ?>;

        </script>

        <!-- title -->
        <title>flick</title>

    </head>
    <body>

        <!-- loading -->
        <div id="loading">

            <!-- top -->
            <div id='top'>
                <div id='title'>
                    <h1>Redirecting...</h1>
                </div>
                <div id='delay'>
                    <h1><span id='countdown'><?php echo $args['delay']; ?></span>s</h1>
                </div>
            </div>

            <!-- bar -->
            <div id='bar'>
                <div id='percent' class='animate-loading'>
                </div>
            </div>

            <!-- bottom -->
            <div id='bottom'>
                <div id='url'>
                    <h1><?php echo $args['url']; ?></h1>
                </div>
            </div>

        </div>
        <!-- loading -->

        <!-- script -->
        <script src="js/countdown.js"></script>

    </body>
</html>
<?php
#
# ^(0.o)> --- pew pew
#
?>
