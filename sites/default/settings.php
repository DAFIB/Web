<?php

$databases = array (
  'default' => 
  array (
    'default' => 
    array (
      'database' => 'dafib_phpfogapp_com',
      'username' => 'root',
      'password' => 'D3sp4tx2011',
      'host' => 'dafib.upc.es', //localhost
      'port' => '33333', //3306
      'driver' => 'mysql',
      'prefix' => '',
    ),
  ),
);

$update_free_access = FALSE;

$drupal_hash_salt = 'ghvDiOqFq6sGAh6utH9Ax0bdPNVdO5sFcq-ppx3HHaU';

ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 100);


ini_set('session.gc_maxlifetime', 200000);


ini_set('session.cookie_lifetime', 2000000);

$conf['404_fast_paths_exclude'] = '/\/(?:styles)\//';
$conf['404_fast_paths'] = '/\.(?:txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp)$/i';
$conf['404_fast_html'] = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL "@path" was not found on this server.</p></body></html>';
