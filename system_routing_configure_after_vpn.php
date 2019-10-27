#!/usr/bin/env php
<?php
require('/etc/inc/functions.inc');

system("logger Will reconfigure routing in 3 mins");

sleep(180);

system_routing_configure();
system("logger Reconfigured routing");

