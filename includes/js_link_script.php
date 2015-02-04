<?php
    if (isset( $js)) {
        foreach( $js as $js_link) {
            echo '<script src="'.$js_link.'" type="text/javascript" /></script>';
        }
    }
?>