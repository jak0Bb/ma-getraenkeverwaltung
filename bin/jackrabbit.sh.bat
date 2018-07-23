@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../vendor/jackalope/jackalope-jackrabbit/bin/jackrabbit.sh
bash "%BIN_TARGET%" %*
