#!/bin/sh

logger $0 $1

if [ "$1" == "start" ]; then
	/root/system_routing_configure_after_vpn.php
fi


