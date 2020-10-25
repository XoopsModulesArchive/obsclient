<?php

//  ------------------------------------------------------------------------ //
//                           OBS Client System                               //
//                            Version 0.5                                    //
//                   Copyright (c) 2002 Jason Massey                         //
//                        http://www.obscorp.com                             //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
require_once 'admin_header.php';
require_once dirname(__DIR__) . '/class/class.obsclient.hd.admin.php';

// Get Posted Vars
$Action = $_POST['action'];
$CurrentID = $_POST['currentid'];
$NewName = $_POST['newname'];

// Action
if ('clientactive' == $Action) {
    // Create Objects

    $admin = new HD_Admin();

    // Delete Record

    $admin->activeClientID($CurrentID);

    // Redirect Header

    redirect_header('./hd_index.php?section=gp', 1, _SUBMIT_THANKS);
}
if ('clientinactive' == $Action) {
    // Create Objects

    $admin = new HD_Admin();

    // Delete Record

    $admin->inactiveClientID($CurrentID);

    // Redirect Header

    redirect_header('./hd_index.php?section=gp', 1, _SUBMIT_THANKS);
}
if ('clientadd' == $Action) {
    // Create Objects

    $admin = new HD_Admin();

    // Add Record

    $admin->addClientName($NewName);

    // Redirect Header

    redirect_header('./hd_index.php?section=gp', 1, _SUBMIT_THANKS);
}
if ('categoryactive' == $Action) {
    // Create Objects

    $admin = new HD_Admin();

    // Delete Record

    $admin->activeCategoryID($CurrentID);

    // Redirect Header

    redirect_header('./hd_index.php?section=gp', 1, _SUBMIT_THANKS);
}
if ('categoryinactive' == $Action) {
    // Create Objects

    $admin = new HD_Admin();

    // Delete Record

    $admin->inactiveCategoryID($CurrentID);

    // Redirect Header

    redirect_header('./hd_index.php?section=gp', 1, _SUBMIT_THANKS);
}
if ('categoryadd' == $Action) {
    // Create Objects

    $admin = new HD_Admin();

    // Add Record

    $admin->addCategoryName($NewName);

    // Redirect Header

    redirect_header('./hd_index.php?section=gp', 1, _SUBMIT_THANKS);
}
