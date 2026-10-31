<?
// your available sites
$sites = [ 'tx', 'address', 'api', 'api_info', 'block', 'home', 'index', 'wallet', 'mob-wallet', 'nodes', 'mempool', 'contact', 'privacy', 'requestapikey', 'updates', 'terms', 'test'  ];

$path = $_GET['path'];
$params = explode( "/", $path );
$site = array_shift($params);

if( in_array( $site, $sites ) ){
    include($site.".php");
} else { ?>
Page not found
<meta http-equiv="refresh" content="3; https://ltcchain.com">
<? } ?>