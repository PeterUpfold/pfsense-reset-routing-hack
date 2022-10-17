#!/usr/bin/env php
<?php
require('/etc/inc/functions.inc');

system("logger Will reconfigure routing in 45 seconds");

sleep(45);

system_routing_configure();
system("logger Reconfigured routing");

