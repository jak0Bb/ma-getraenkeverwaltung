@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../vendor/phpcr/phpcr-shell/bin/phpcrsh
php "%BIN_TARGET%" %*
