<?php

// site cbhsq8 - local environment.
$aliases['cbhsq8.local'] = array(
    'root' => '/var/www/docroot',
    // docksal_hostname.
    'uri' => 'cbhsq8.docksal',
    'path-aliases' => array(
      '%dump-dir' => '/var/www/database_dumps/',
      '%files' => '/var/www/docroot/sites/default/files'
    ),
);
