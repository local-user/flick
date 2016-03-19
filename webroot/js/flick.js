



    // get - delay
    var delay = get('delay');
    var url   = get('url');

    // ? - get - defaults
    if ( ! delay ) { delay = 24;                   }
    if ( ! url   ) { url   = window.location.href; }

    // flick
    function flick() {

        // update - countdown - timer
        document.getElementById('countdown').innerHTML = delay;

        // ? - redirect
        if( delay === 0 ) { window.location = url; }

        // decrease - delay
        if( delay > 0 ){ delay --; }

    }

    // display
    document.getElementById('countdown').innerHTML = delay;
    document.getElementById('urlh').innerHTML = url;

    // main
    window.onload = function () {

        // start - animation - animate-loading
        var e = document.getElementById("percent");
            e.className += " animate-loading";
            e.style.animationDuration = delay + "s";

        // start - flick - countdown
        setInterval('flick()', 1000);

    }




