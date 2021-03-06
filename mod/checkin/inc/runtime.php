<?php
/**
 * @version $Id$
 * @author Matthew McNaney <mcnaney at gmail dot com>
 */

if (\phpws\PHPWS_Core::atHome() && PHPWS_Settings::get('checkin', 'front_page')) {
    \phpws\PHPWS_Core::initModClass('checkin', 'Checkin_User.php');
    $checkin = new Checkin_User;
    $checkin->process('checkin_form');
}


if (Current_User::allow('checkin')) {
    \phpws\PHPWS_Core::initModClass('checkin', 'Checkin_Admin.php');
    $checkin_admin = new Checkin_Admin;
    $checkin_admin->menu();
}
