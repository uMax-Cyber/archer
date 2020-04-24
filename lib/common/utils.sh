#!/bin/bash
. ../../lib/common/functions.sh
handleError() {
    echo "$1"
    exit $2
}
[[ ! -f /opt/archer/.archersettings ]] && handleError "    No archer settings found so nothing to work from" 1
. /opt/archer/.archersettings
[[ ! -d $docroot ]] && handleError "    No web folder found" 2
case $osid in
    1|2)
        if [[ -z $docroot ]]; then
            docroot="/var/www/html/"
            webdirdest="${docroot}archer/"
        elif [[ $docroot != *'archer'* ]]; then
            webdirdest="${docroot}archer/"
        else
            webdirdest="${docroot}/"
        fi
        if [[ $osid -eq 2 ]]; then
            if [[ $docroot == /var/www/html/ && ! -d $docroot ]]; then
                docroot="/var/www/"
                webdirdest="${docroot}archer/"
            fi
        fi
        ;;
    3)
        if [[ -z $docroot ]]; then
            docroot="/var/www/html/"
            webdirdest="${docroot}archer/"
        elif [[ $docroot != *'archer'* ]]; then
            webdirdest="${docroot}archer/"
        else
            webdirdest="${docroot}/"
        fi
        ;;
esac
[[ ! -d $webdirdest ]] && handleError "    No archer web directory found" 3
[[ -f ${webdirdest}lib/archer/system.class.php ]] && configpath=${webdirdest}lib/archer/system.class.php || configpath=${webdirdest}lib/archer/System.clss.php
[[ ! -f $configpath ]] && handleError "    No config file found" 4
OS=$(uname -s)
[[ $OS =~ ^[^Ll][^Ii][^Nn][^Uu][^Xx]$ ]] && handleError "    We only support these utilities on Linux OS's" 6
clear
displayBanner
dots "Checking running version"
version=$(awk -F\' /"define\('ARCHER_VERSION'[,](.*)"/'{print $4}' $configpath | tr -d '[[:space:]]')
[[ -z $version ]] && (echo "Failed" && handleError "Could not find version of ARCHER" 7)
echo "Done"
echo " * Running ARCHER Version: $version"
