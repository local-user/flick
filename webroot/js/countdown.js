

    function increment() {
        delay --;
        document.getElementById('countdown').innerHTML = delay;
    }
    setInterval('increment()', 1000);


