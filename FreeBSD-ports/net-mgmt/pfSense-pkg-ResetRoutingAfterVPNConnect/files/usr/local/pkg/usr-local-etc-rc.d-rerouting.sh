#!/bin/sh

logger $0 $1

if [ $1 == "start" ]; then
	/usr/local/pkg/system_routing_configure_after_vpn.php
fi


