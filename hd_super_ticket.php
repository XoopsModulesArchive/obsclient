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

    $TicketState = $_GET['TicketState'];

    // Action

    if ('new' == $TicketState) {
        // Set Template

        $GLOBALS['xoopsOption']['template_main'] = 'obsclient_hd_super_ticket-new.html';

        // Create Objects

        $ticket = new HD_Ticket();

        // Assign Vars to Smarty Template

        $xoopsTpl->assign('sectionhead', _MI_OBSCLIENT_NAME);

        $xoopsTpl->assign('uid', $xoopsUser->getVar('uid'));

        $xoopsTpl->assign('entrydate', date('Y-m-d'));

        $xoopsTpl->assign('clientid', $ticket->chooseClientIDAct());

        $xoopsTpl->assign('clientnames', $ticket->chooseClientNameAct());

        $xoopsTpl->assign('categoryid', $ticket->chooseCategoryIDAct());

        $xoopsTpl->assign('categorynames', $ticket->chooseCategoryNameAct());
    } elseif ('update' == $TicketState) {
        // Get GET vars

        $TicketID = $_GET['TicketID'];

        // Create Objects

        $ticket = new HD_Ticket();

        $ticketupdate = new HD_TicketUpdate();

        // Check UID

        $UID = $xoopsUser->getVar('uid');

        $TicketUID = $ticket->getTicketOwner($TicketID);

        //Action

        // Set Template

        $GLOBALS['xoopsOption']['template_main'] = 'obsclient_hd_super_ticket-update.html';

        // Retrieve Ticket Fields

        $TicketUID = $ticket->getTicketUID($TicketID);

        $TicketEntryDate = $ticket->getTicketEntryDate($TicketID);

        $TicketStatusID = $ticket->getTicketStatusID($TicketID);

        $TicketClientID = $ticket->getTicketClientID($TicketID);

        $TicketCategoryID = $ticket->getTicketCategoryID($TicketID);

        $TicketPriorityID = $ticket->getTicketPriorityID($TicketID);

        $TicketSubject = $ticket->getTicketSubject($TicketID);

        $TicketDetails = $ticket->getTicketDetails($TicketID);

        // Assign Ticket Vars to Smarty Template

        $xoopsTpl->assign('sectionhead', _MI_OBSCLIENT_NAME);

        $xoopsTpl->assign('ticketid', $TicketID);

        $xoopsTpl->assign('ticketuname', $xoopsUser->getUnameFromId($TicketUID));

        $xoopsTpl->assign('ticketentrydate', $TicketEntryDate);

        $xoopsTpl->assign('ticketstatusname', $ticket->getStatusName($TicketStatusID));

        $xoopsTpl->assign('ticketclientname', $ticket->getClientName($TicketClientID));

        $xoopsTpl->assign('ticketcategoryname', $ticket->getCategoryName($TicketCategoryID));

        $xoopsTpl->assign('ticketpriorityname', $ticket->getPriorityName($TicketPriorityID));

        $xoopsTpl->assign('ticketsubject', $TicketSubject);

        $xoopsTpl->assign('ticketdetails', $TicketDetails);

        $xoopsTpl->assign('ticketstate', $TicketState);

        // Assign Existing Update Array to Smarty Template

        $xoopsTpl->assign('ticketupdates', $ticketupdate->chooseUpdateFields($TicketID));

        // Assign New Update Vars to Smarty Template

        $xoopsTpl->assign('uid', $xoopsUser->getVar('uid'));

        $xoopsTpl->assign('updatedate', date('Y-m-d'));
    }
} else {
    redirect_header('hd_index.php', 1, _NOT_AUTH);
}

require XOOPS_ROOT_PATH . '/footer.php';
