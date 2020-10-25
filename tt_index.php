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

include 'header.php';
require XOOPS_ROOT_PATH . '/header.php';
$GLOBALS['xoopsOption']['template_main'] = 'obsclient_hd_ticket.html';
require_once XOOPS_ROOT_PATH . '/modules/obsclient/class/class.obsclient.php';

// Get Posted vars
$Action = $_POST['Action'];
$TaskID = $_POST['TaskID'];
// Get User ID
$UID = $xoopsUser->getVar('uid');
$xoopsTpl->assign('uid', $UID);
// Get Category List
$result = $xoopsDB->queryF('SELECT * FROM ' . $xoopsDB->prefix(obsclient_hdtt_categories) . '');
$xoopsTpl->assign('name', ['catbob', 'catjim', 'catjoe', 'catjerry', 'catfred']);
$xoopsTpl->assign(
    'users',
    [
        ['name' => 'bob', 'phone' => '555-3425'],
        ['name' => 'jim', 'phone' => '555-4364'],
        ['name' => 'joe', 'phone' => '555-3422'],
        ['name' => 'jerry', 'phone' => '555-4973'],
        ['name' => 'fred', 'phone' => '555-3235'],
    ]
);

require XOOPS_ROOT_PATH . '/footer.php';
