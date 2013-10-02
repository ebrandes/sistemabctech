<?php

Class loadScript {

    public static function loadScripts($css = null, $js = null) {

        if ($css != null) {
           
          if(count($css) > 1 ) {
            foreach ($css as $css) {
                    echo " <link href='/html/css/" . $css . "' rel='stylesheet' type='text/css' type='text/css' />";
                }
            } else {
                    echo " <link href='/html/css/" . $css . "' rel='stylesheet' type='text/css' type='text/css' />";
            }
            
        }

        if ($js != null) {
            if(count($js)>1){
                foreach ($js as $js) {
                    echo "<script src='/html/js/" . $js . "' type='text/javascript'></script>";
                } 
            } else {
                echo "<script src='/html/js/" . $js . "' type='text/javascript'></script>";
            }
        }
    }

}
?>
