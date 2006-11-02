<?php
/**
 * @author Matthew McNaney <matt at tux dot appstate dot edu>
 * @version $Id$
 */

if (!defined('PHPWS_SOURCE_DIR')) {
    include '../../config/core/404.html';
    exit();
}

if (isset($_REQUEST['site_map'])) {
    Menu::siteMap();
 } elseif(Current_User::allow('menu')) {
     Menu::admin();
 } else {
    PHPWS_Core::errorPage('404');
 }


?>