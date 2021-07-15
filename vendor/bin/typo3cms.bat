@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../helhum/typo3-console/typo3cms
php "%BIN_TARGET%" %*
