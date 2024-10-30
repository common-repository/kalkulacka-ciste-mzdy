<?php

$GLOBALS['kalkulacka_ciste_mzdy_config'] = parse_ini_file(KALKULACKA_CISTE_MZDY_PLUGIN_DIR . "/config.ini");

if (is_admin()) {
  require_once KALKULACKA_CISTE_MZDY_PLUGIN_DIR . '/admin/admin.php';
} else {
  require_once KALKULACKA_CISTE_MZDY_PLUGIN_DIR . '/front/front.php';
}

