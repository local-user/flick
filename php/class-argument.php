<?php namespace flick;
#
#   [ flick/php/class-argument.php ]
#
class flick {}
class argument extends flick {


    private $delay  = 3;
    private $url    = 'http://www.example.com/';


    #
    #   __construct( argument type )
    #
    public function __construct( $type = 'get' ) {

        /** type **/
        switch($type) {
            case 'get':
                $this->arg_get();
                break;
            default:
                throw new exception( 'invalid arg type' );
        }

        /** return **/
        return TRUE;

    }


    # [ arg ] #

        #
        #   arg_get()
        #
        private function arg_get() {

            # get arg(s)
            if( isset($_GET['delay']) ){ $this->set_delay($_GET['delay']); }
            if( isset($_GET['url'])   ){ $this->set_url($_GET['url']);     }

            # return
            return TRUE;

        }

    # [ end ] #


    # [ get ] #

        #
        #   get_arguments()
        #   -- returns array of args
        #
        public function get_arguments() {

                    # argument(s)
                    $arguments          = array();
                    $arguments['delay'] = $this->delay;
                    $arguments['url']   = $this->url;
            return  $arguments;

        }

    # [ end ] #


    # [ set ] #

        #
        #   set_delay( delay in seconds )
        #
        private function set_delay($delay) {

            # check(s)
            if(   is_null($delay)    ){ throw new exception("argument 'delay' missing"); }
            if( ! is_numeric($delay) ){ throw new exception("argument 'delay' invalid"); }

            # set
            $this->delay = $delay;

            # return
            return TRUE;

        }

        #
        #   set_url( url )
        #
        private function set_url($url) {

            # check(s)
            if( is_null($url)                                   ){ throw new exception("argument 'url' missing"); }
            if( filter_var($url, FILTER_VALIDATE_URL) === false ){ throw new exception("argument 'url' invalid"); }

            # set
            $this->url = $url;

            # return
            return TRUE;

        }

    # [ end ] #


}
#
#   [ end ]
#
