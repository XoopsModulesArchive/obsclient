<?php

//  ------------------------------------------------------------------------ //
//                          OBS Client System                                //
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
require_once __DIR__ . '/class/class.obsclient.hd.ticket.php';

// Permissions
$perm_name = 'OBS Permission';
$perm_itemid = '1';
if ($xoopsUser) {
    $groups = $xoopsUser->getGroups();
} else {
    $groups = XOOPS_GROUP_ANONYMOUS;
}
$module_id = $xoopsModule->getVar('mid');
$gpermHandler = xoops_getHandler('groupperm');
if ($gpermHandler->checkRight($perm_name, $perm_itemid, $groups, $module_id)) {
    // Get TicketState

    $ViewBy = $_GET['ViewBy'];

    // Action

    if ('date' == $ViewBy) {
        // Set Template

        $GLOBALS['xoopsOption']['template_main'] = 'obsclient_hd_view_super_ticket.html';

        // Create Objects

        $ticketview = new HD_ViewTicket();

        // Assign Vars

        $View = 'EntryDate';

        $UID = $xoopsUser->getVar('uid');

        // Assign Ticket Vars to Smarty Template

        $xoopsTpl->assign('sectionhead', _MI_OBSCLIENT_NAME);

        // Assign Existing Update Array to Smarty Template

        $xoopsTpl->assign('usertickets', $ticketview->chooseAllTickets($View));

        // Assign New Update Vars to Smarty Template

        $xoopsTpl->assign('uid', $xoopsUser->getVar('uid'));

        $xoopsTpl->assign('updatedate', date('Y-m-d'));
    }

    if ('uname' == $ViewBy) {
        // Set Template

        $GLOBALS['xoopsOption']['template_main'] = 'obsclient_hd_view_super_ticket.html';

        // Create Objects

        $ticketview = new HD_ViewTicket();

        // Assign Vars

        $View = 'EntryDate';

        $UID = $xoopsUser->getVar('uid');

        // Assign Ticket Vars to Smarty Template

        $xoopsTpl->assign('sectionhead', _MI_OBSCLIENT_NAME);

        // Assign Existing Update Array to Smarty Template

        $xoopsTpl->assign('usertickets', $ticketview->chooseAllTickets($View));

        // Assign New Update Vars to Smarty Template

        $xoopsTpl->assign('uid', $xoopsUser->getVar('uid'));

        $xoopsTpl->assign('updatedate', date('Y-m-d'));
    } elseif ('subject' == $ViewBy) {
        // Set Template

        $GLOBALS['xoopsOption']['template_main'] = 'obsclient_hd_view_super_ticket.html';

        // Create Objects

        $ticketview = new HD_ViewTicket();

        // Assign Vars

        $View = 'TicketSubject';

        $UID = $xoopsUser->getVar('uid');

        // Assign Ticket Vars to Smarty Template

        $xoopsTpl->assign('sectionhead', _MI_OBSCLIENT_NAME);

        // Assign Existing Update Array to Smarty Template

        $xoopsTpl->assign('usertickets', $ticketview->chooseAllTickets($View));

        // Assign New Update Vars to Smarty Template

        $xoopsTpl->assign('uid', $xoopsUser->getVar('uid'));

        $xoopsTpl->assign('updatedate', date('Y-m-d'));
    } elseif ('status' == $ViewBy) {
        // Set Template

        $GLOBALS['xoopsOption']['template_main'] = 'obsclient_hd_view_super_ticket.html';

        // Create Objects

        $ticketview = new HD_ViewTicket();

        // Assign Vars

        $View = 'StatusName';

        $UID = $xoopsUser->getVar('uid');

        // Assign Ticket Vars to Smarty Template

        $xoopsTpl->assign('sectionhead', _MI_OBSCLIENT_NAME);

        // Assign Existing Update Array to Smarty Template

        $xoopsTpl->assign('usertickets', $ticketview->chooseAllTickets($View));

        // Assign New Update Vars to Smarty Template

        $xoopsTpl->assign('uid', $xoopsUser->getVar('uid'));

        $xoopsTpl->assign('updatedate', date('Y-m-d'));
    } elseif ('priority' == $ViewBy) {
        // Set Template

        $GLOBALS['xoopsOption']['template_main'] = 'obsclient_hd_view_super_ticket.html';

        // Create Objects

        $ticketview = new HD_ViewTicket();

        // Assign Vars

        $View = 'PriorityName';

        $UID = $xoopsUser->getVar('uid');

        // Assign Ticket Vars to Smarty Template

        $xoopsTpl->assign('sectionhead', _MI_OBSCLIENT_NAME);

        // Assign Existing Update Array to Smarty Template

        $xoopsTpl->assign('usertickets', $ticketview->chooseAllTickets($View));

        // Assign New Update Vars to Smarty Template

        $xoopsTpl->assign('uid', $xoopsUser->getVar('uid'));

        $xoopsTpl->assign('updatedate', date('Y-m-d'));
    } elseif ('category' == $ViewBy) {
        // Set Template

        $GLOBALS['xoopsOption']['template_main'] = 'obsclient_hd_view_super_ticket.html';

        // Create Objects

        $ticketview = new HD_ViewTicket();

        // Assign Vars

        $View = 'CategoryName';

        $UID = $xoopsUser->getVar('uid');

        // Assign Ticket Vars to Smarty Template

        $xoopsTpl->assign('sectionhead', _MI_OBSCLIENT_NAME);

        // Assign Existing Update Array to Smarty Template

        $xoopsTpl->assign('usertickets', $ticketview->chooseAllTickets($View));

        // Assign New Update Vars to Smarty Template

        $xoopsTpl->assign('uid', $xoopsUser->getVar('uid'));

        $xoopsTpl->assign('updatedate', date('Y-m-d'));
    } elseif ('client' == $ViewBy) {
        // Set Template

        $GLOBALS['xoopsOption']['template_main'] = 'obsclient_hd_view_super_ticket.html';

        // Create Objects

        $ticketview = new HD_ViewTicket();

        // Assign Vars

        $View = 'ClientName';

        $UID = $xoopsUser->getVar('uid');

        // Assign Ticket Vars to Smarty Template

        $xoopsTpl->assign('sectionhead', _MI_OBSCLIENT_NAME);

        // Assign Existing Update Array to Smarty Template

        $xoopsTpl->assign('usertickets', $ticketview->chooseAllTickets($View));

        // Assign New Update Vars to Smarty Template

        $xoopsTpl->assign('uid', $xoopsUser->getVar('uid'));

        $xoopsTpl->assign('updatedate', date('Y-m-d'));
    }
} else {
    redirect_header('hd_index.php', 1, _NOT_AUTH);
}

require XOOPS_ROOT_PATH . '/footer.php';
