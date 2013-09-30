<?php

Class loadScript {

    public static function loadScripts($css = null, $js = null) {

        if ($css != null) {
           
          if(count($css) > 1 ) {
            foreach ($css as $css) {
                    echo " <link href='" . base_url() . "html/css/" . $css . "' rel='stylesheet' type='text/css'/>";
                }
            } else {
                    echo " <link href='" . base_url() . "html/css/" . $css . "' rel='stylesheet' type='text/css'/>";
            }
            
        }

        if ($js != null) {
            if(count($js)>1){
                foreach ($js as $js) {
                    echo "<script src='" . base_url() . "html/js/" . $js . " type='text/javascript'></script>";
                } 
            } else {
                echo "<script src='" . base_url() . "html/js/" . $js . " type='text/javascript'></script>";
            }
        }
    }

}
?>
