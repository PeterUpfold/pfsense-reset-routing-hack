# Reset Routing Hack

Publishing this hack in case it helps someone else. However, this is _ugly_, _works for me_, _no promises given_ territory. This probably should be 
refactored into a PFSense package at some point, so that it might survive software updates etc. **You have been warned.**

When your PFSense's own default gateway is configured to be on an OpenVPN interface which will not immediately come up following a reboot,
some services within PFSense not to function until you go to `system_gateways.php` (**System** > **Routing** > **Gateways** within the UI)
and press **Save**, followed by **Apply Changes** to reset that OpenVPN route as the default route everywhere.

(This was particularly noticed when daily updates to the PFBlockerNG DNS block lists were not happening automatically.)

Instead of having to perform the aforementioned process in the UI, the shell script can be added into **/usr/local/etc/rc.d**. It calls the PHP file
which waits 3 minutes for the OpenVPN link to be up, then performs the same process as clicking **Apply Changes** within the GUI.

## PFSense 2.5.0 

Maybe also need to
    route add vpn-ip/32 wan-dg

## Licence

Licensed under the Apache License version 2.0. See the `LICENSE` file.
