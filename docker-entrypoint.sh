#!/bin/sh
set -e

# Disable all MPMs by removing their symlinks directly, then enable only mpm_prefork
if [ "$(id -u)" = '0' ]; then
    rm -f /etc/apache2/mods-enabled/mpm_*.load
    rm -f /etc/apache2/mods-enabled/mpm_*.conf
    ln -sf /etc/apache2/mods-available/mpm_prefork.load /etc/apache2/mods-enabled/mpm_prefork.load
    ln -sf /etc/apache2/mods-available/mpm_prefork.conf /etc/apache2/mods-enabled/mpm_prefork.conf
fi

# Start Apache in the foreground
exec apache2-foreground "$@"
