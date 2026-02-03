<?php
/*
Plugin Name:  Tracy WP integration
Description:  Vloží Tracy laděnku do Wordpress.
Author:       Milan Urbanec
License:      BSD-3-Clause
*/


namespace WpTracy;

require_once __DIR__.'/src/panels/wppanelbase.class.php';
require_once __DIR__.'/src/panels/wpcurrentscreenpanel.class.php';
require_once __DIR__.'/src/panels/wpdbpanel.class.php';
require_once __DIR__.'/src/panels/wppanel.class.php';
require_once __DIR__.'/src/panels/wppostpanel.class.php';
require_once __DIR__.'/src/panels/wpqueriedobjectpanel.class.php';
require_once __DIR__.'/src/panels/wpquerypanel.class.php';
require_once __DIR__.'/src/panels/wprewritepanel.class.php';
require_once __DIR__.'/src/panels/wprolespanel.class.php';
require_once __DIR__.'/src/panels/wpuserpanel.class.php';
require_once __DIR__.'/src/index.php';