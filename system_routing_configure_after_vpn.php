#!/usr/bin/env php
<?php
require('/etc/inc/services.inc');
require('/etc/inc/interfaces.inc');
require('/etc/inc/unbound.inc');
require('/etc/inc/service-utils.inc');
define('WAIT_TIME', 60);

system('logger Will reconfigure routing in '. WAIT_TIME . ' seconds');

sleep(WAIT_TIME);

system_routing_configure();
system("logger Reconfigured routing");

// restart Unbound

sync_unbound_service();
service_control_restart('unbound', '');