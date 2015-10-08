<?php
#
#   Flick - Simple PHP GET Redirector
#


    # default(s)
    $default_delay  = 3;
    $default_url    = 'http://www.example.com/';

    # get -- delay (seconds)
    if( isset($_GET['delay']) ){
        $delay= $_GET['delay'];
        if( ! is_numeric($delay) ){
            die('error: invalid delay');
        }
    } else {
        $delay = $default_delay;
    }

    # get -- url
    if( isset($_GET['url']) ){
        $url = $_GET['url'];
        if (filter_var($url, FILTER_VALIDATE_URL) === false) {
            die('error: invalid url');
        }
    } else {
        $url = $default_url;
    }

    # redirect
    header( "refresh:$delay;url=$url" );


?>
<!DOCTYPE html>
<html>
    <head>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />

        <!-- Google - Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>

        <!-- CSS -->
        <style>
            .animate-loading {
                animation-name: loading;
                animation-duration: <?php echo $delay; ?>s;
            }
        </style>

    </head>
    <body>
        <div id="container">
            <div id="crust" class="animate-loading">
                <div id="label">
                    <h2><?php echo "Redirecting in $delay seconds..."; ?></h2>
                </div>
                <div id="core">
                    <h1><?php echo $url; ?></h1>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
#
#
# ^(0.o)> --- pew pew
#
#
?>
