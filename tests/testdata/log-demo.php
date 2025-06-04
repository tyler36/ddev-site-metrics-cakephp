<?php
// File: /var/www/log.php

require 'vendor/autoload.php';
require 'config/bootstrap.php';

use Cake\Log\Log;

Log::write('info', 'Logged from standalone CLI script.');
echo "Log entry written.\n";
