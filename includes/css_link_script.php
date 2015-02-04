
        <?php
            if (isset( $css)) {
                foreach( $css as $style_link) {
                    echo '<link rel="stylesheet" href="'.$style_link.'" type="text/css" />';
                }
            }
        ?>