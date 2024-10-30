<?php

add_shortcode( $GLOBALS['kalkulacka_ciste_mzdy_config']['shortcode'], 'generate_iframe_kalkulacka_ciste_mzdy' );

function generate_iframe_kalkulacka_ciste_mzdy(){
   $settings = get_option('kalkulacka_ciste_mzdy_settings');
   $width = $settings['width'] ? $settings['width'] : $GLOBALS['kalkulacka_ciste_mzdy_config']['width'];
   $height = $settings['height'] ? $settings['height'] : $GLOBALS['kalkulacka_ciste_mzdy_config']['height'];
   $data = '<div>'.$GLOBALS['kalkulacka_ciste_mzdy_config']['information_text'].'</div>
<iframe src="'.$GLOBALS['kalkulacka_ciste_mzdy_config']['source'].'" width="'.$width.'" height="'.$height.'" frameborder="0"></iframe>';
   return $data;
}
