#!/bin/sh
set -e

# Disable event and worker MPMs, and enable prefork MPM right before starting Apache
a2dismod mpm_event || true
a2dismod mpm_worker || true
a2enmod mpm_prefork || true

# Start Apache in the foreground
exec apache2-foreground "$@"
