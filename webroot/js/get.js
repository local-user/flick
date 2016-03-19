// http://www.onlineaspect.com/2009/06/10/reading-get-variables-with-javascript - JRD




    function get(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split("=");
            if (pair[0] == variable) {
                return unescape(pair[1]);
            }
        }
        return false;
    }




