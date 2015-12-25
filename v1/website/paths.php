<?php

/********************************************************************************
 * File:    Paths / URL Config Parms
 * Author:  Mike Lansberry (http://phpMWT.com)
 * Date:    2004-04-29 (Dev.Version)
 * License: DO NOT Remove this text block. See /docs/license.txt
 *          Copyright © 2003-2004 phpMWT.com
 * Notes:
 *          - Set base path / URL for package.
 *          - MUST be installed in site root directory.
********************************************************************************/

/*************************************
 *  Paths Loaded Flag
*************************************/
    global $F_PATHS;
    $F_PATHS    = 1;

/********************************************************************************
 *  Package Dir:
 *  This parameter is the directory (folder) in which the package is installed.
 *  Do not include initial slash (/), only those in between and on end.
 *  Examples:
 *      - If package installed at site root:
 *          Installed in:   http://www.yoursite.com/
 *          Setting:        $_PACKAGE_DIR = '';
 *
 *      - If package installed in a subdirectory:
 *          Installed in:   http://www.yoursite.com/phpCOIN/
 *          Setting:        $_PACKAGE_DIR = 'phpCOIN/';
 *
 *      - If package installed in a deeper level subdirectory:
 *          Installed in:   http://www.yoursite.com/misc/phpCOIN/
 *          Setting:        $_PACKAGE_DIR = 'misc/phpCOIN/';
 *
 *  Edit only this parameter in this file, all others are calculated.
 *
********************************************************************************/

    $_PACKAGE_DIR           = 'billing/';

/********************************************************************************
 *  Package Path and URL Parametrs:
 *  The following parameters are calculated based on the parameter set above,
 *  and parameters read from the server. The server parameters used are:
 *
 *      $_SERVER["SERVER_NAME"]     - To get base URL to site.
 *      $_SERVER["DOCUMENT_ROOT"]   - To get base Path to site.
 *
 *  Do not adjust these parameters or the package may not find required files.
 *
********************************************************************************/

    GLOBAL $_PATHS_PKG_BASE_URL, $_PATHS_PKG_BASE_PATH;
    IF (!isset($_SERVER))   { $_SERVER = $HTTP_SERVER_VARS; }

# Take care of the missing "document root" if we are running on Windows
    IF (!$_SERVER["DOCUMENT_ROOT"]) {
        $_SERVER["DOCUMENT_ROOT"] = (substr(PHP_OS, 0, 3) == 'WIN') ? strtolower(getcwd()) : getcwd();
    }

    $_PACKAGE_PATH          = $_SERVER["DOCUMENT_ROOT"];        # Manual override here
    $_PACKAGE_SERVER        = $_SERVER["SERVER_NAME"];          # Manual override here

    $_PATHS_PKG_BASE_URL    = (($_SERVER["HTTPS"]=="on")?"https":"http").'://'.$_PACKAGE_SERVER.':'.$_SERVER["SERVER_PORT"].'/'.$_PACKAGE_DIR;

    IF (substr(PHP_OS, 0, 3) == 'WIN') {
        $_PATHS_PKG_BASE_PATH   = $_PACKAGE_PATH.'/';
    } ELSE {
        $_PATHS_PKG_BASE_PATH   = $_PACKAGE_PATH.'/'.$_PACKAGE_DIR;
    }

?>