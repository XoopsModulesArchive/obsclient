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

class HD_Ticket
{
    public function chooseClientIDAct()
    {
        global $xoopsDB;

        $ret = [];

        $query_table = $xoopsDB->prefix('obsclient_clients');

        $sql = "SELECT ClientName, ClientID FROM $query_table WHERE ClientAct = '1' ORDER BY ClientName";

        $result_choose = $xoopsDB->query($sql);

        while (false !== ($client_row = $xoopsDB->fetchArray($result_choose))) {
            $ret[$client_row['ClientID']] = $client_row['ClientID'];
        }

        return $ret;
    }

    public function chooseClientNameAct()
    {
        global $xoopsDB;

        $ret = [];

        $query_table = $xoopsDB->prefix('obsclient_clients');

        $sql = "SELECT ClientName, ClientID FROM $query_table WHERE ClientAct = '1' ORDER BY ClientName";

        $result_choose = $xoopsDB->query($sql);

        while (false !== ($client_row = $xoopsDB->fetchArray($result_choose))) {
            $ret[$client_row['ClientName']] = $client_row['ClientName'];
        }

        return $ret;
    }

    public function chooseCategoryIDAct()
    {
        global $xoopsDB;

        $ret = [];

        $query_table = $xoopsDB->prefix('obsclient_hd_categories');

        $sql = "SELECT CategoryName, CategoryID FROM $query_table WHERE CategoryAct = '1' ORDER BY CategoryName";

        $result_choose = $xoopsDB->query($sql);

        while (false !== ($client_row = $xoopsDB->fetchArray($result_choose))) {
            $ret[$client_row['CategoryID']] = $client_row['CategoryID'];
        }

        return $ret;
    }

    public function chooseCategoryNameAct()
    {
        global $xoopsDB;

        $ret = [];

        $query_table = $xoopsDB->prefix('obsclient_hd_categories');

        $sql = "SELECT CategoryName, CategoryID FROM $query_table WHERE CategoryAct = '1' ORDER BY CategoryName";

        $result_choose = $xoopsDB->query($sql);

        while (false !== ($client_row = $xoopsDB->fetchArray($result_choose))) {
            $ret[$client_row['CategoryName']] = $client_row['CategoryName'];
        }

        return $ret;
    }

    public function choosePriorityID()
    {
        global $xoopsDB;

        $ret = [];

        $query_table = $xoopsDB->prefix('obsclient_hd_priorities');

        $sql = "SELECT PriorityName, PriorityID FROM $query_table ORDER BY PriorityName";

        $result_choose = $xoopsDB->query($sql);

        while (false !== ($client_row = $xoopsDB->fetchArray($result_choose))) {
            $ret[$client_row['PriorityID']] = $client_row['PriorityID'];
        }

        return $ret;
    }

    public function choosePriorityName()
    {
        global $xoopsDB;

        $ret = [];

        $query_table = $xoopsDB->prefix('obsclient_hd_priorities');

        $sql = "SELECT PriorityName, PriorityID FROM $query_table ORDER BY PriorityName";

        $result_choose = $xoopsDB->query($sql);

        while (false !== ($client_row = $xoopsDB->fetchArray($result_choose))) {
            $ret[$client_row['PriorityName']] = $client_row['PriorityName'];
        }

        return $ret;
    }

    public function chooseStatusID()
    {
        global $xoopsDB;

        $ret = [];

        $query_table = $xoopsDB->prefix('obsclient_hd_status');

        $sql = "SELECT StatusName, StatusID FROM $query_table ORDER BY StatusID";

        $result_choose = $xoopsDB->query($sql);

        while (false !== ($client_row = $xoopsDB->fetchArray($result_choose))) {
            $ret[$client_row['StatusID']] = $client_row['StatusID'];
        }

        return $ret;
    }

    public function chooseStatusName()
    {
        global $xoopsDB;

        $ret = [];

        $query_table = $xoopsDB->prefix('obsclient_hd_status');

        $sql = "SELECT StatusName, StatusID FROM $query_table ORDER BY StatusID";

        $result_choose = $xoopsDB->query($sql);

        while (false !== ($client_row = $xoopsDB->fetchArray($result_choose))) {
            $ret[$client_row['StatusName']] = $client_row['StatusName'];
        }

        return $ret;
    }

    public function getTicketUID($TicketID)
    {
        global $xoopsDB;

        $ret = [];

        $query_table = $xoopsDB->prefix('obsclient_hd_ticketdata');

        $sql = "SELECT UID FROM $query_table WHERE TicketID = $TicketID";

        $result = $xoopsDB->query($sql);

        $myrow = $xoopsDB->fetchArray($result);

        $ret = $myrow['UID'];

        if ('' == $ret) {
            $ret = 'Unknown';
        }

        return $ret;
    }

    public function getTicketEntryDate($TicketID)
    {
        global $xoopsDB;

        $ret = [];

        $query_table = $xoopsDB->prefix('obsclient_hd_ticketdata');

        $sql = "SELECT EntryDate FROM $query_table WHERE TicketID = $TicketID";

        $result = $xoopsDB->query($sql);

        $myrow = $xoopsDB->fetchArray($result);

        $ret = $myrow['EntryDate'];

        if ('' == $ret) {
            $ret = 'Unknown';
        }

        return $ret;
    }

    public function getTicketClientID($TicketID)
    {
        global $xoopsDB;

        $ret = [];

        $query_table = $xoopsDB->prefix('obsclient_hd_ticketdata');

        $sql = "SELECT ClientID FROM $query_table WHERE TicketID = $TicketID";

        $result = $xoopsDB->query($sql);

        $myrow = $xoopsDB->fetchArray($result);

        $ret = $myrow['ClientID'];

        if ('' == $ret) {
            $ret = 'Unknown';
        }

        return $ret;
    }

    public function getTicketCategoryID($TicketID)
    {
        global $xoopsDB;

        $ret = [];

        $query_table = $xoopsDB->prefix('obsclient_hd_ticketdata');

        $sql = "SELECT CategoryID FROM $query_table WHERE TicketID = $TicketID";

        $result = $xoopsDB->query($sql);

        $myrow = $xoopsDB->fetchArray($result);

        $ret = $myrow['CategoryID'];

        if ('' == $ret) {
            $ret = 'Unknown';
        }

        return $ret;
    }

    public function getTicketPriorityID($TicketID)
    {
        global $xoopsDB;

        $ret = [];

        $query_table = $xoopsDB->prefix('obsclient_hd_ticketdata');

        $sql = "SELECT PriorityID FROM $query_table WHERE TicketID = $TicketID";

        $result = $xoopsDB->query($sql);

        $myrow = $xoopsDB->fetchArray($result);

        $ret = $myrow['PriorityID'];

        if ('' == $ret) {
            $ret = 'Unknown';
        }

        return $ret;
    }

    public function getTicketStatusID($TicketID)
    {
        global $xoopsDB;

        $ret = [];

        $query_table = $xoopsDB->prefix('obsclient_hd_ticketdata');

        $sql = "SELECT StatusID FROM $query_table WHERE TicketID = $TicketID";

        $result = $xoopsDB->query($sql);

        $myrow = $xoopsDB->fetchArray($result);

        $ret = $myrow['StatusID'];

        if ('' == $ret) {
            $ret = 'Unknown';
        }

        return $ret;
    }

    public function getTicketSubject($TicketID)
    {
        global $xoopsDB;

        $ret = [];

        $query_table = $xoopsDB->prefix('obsclient_hd_ticketdata');

        $sql = "SELECT TicketSubject FROM $query_table WHERE TicketID = $TicketID";

        $result = $xoopsDB->query($sql);

        $myrow = $xoopsDB->fetchArray($result);

        $ret = $myrow['TicketSubject'];

        if ('' == $ret) {
            $ret = 'Unknown';
        }

        return $ret;
    }

    public function getTicketDetails($TicketID)
    {
        global $xoopsDB;

        $ret = [];

        $query_table = $xoopsDB->prefix('obsclient_hd_ticketdata');

        $sql = "SELECT TicketDetails FROM $query_table WHERE TicketID = $TicketID";

        $result = $xoopsDB->query($sql);

        $myrow = $xoopsDB->fetchArray($result);

        $ret = $myrow['TicketDetails'];

        if ('' == $ret) {
            $ret = 'Unknown';
        }

        return $ret;
    }

    public function getClientName($ClientID)
    {
        global $xoopsDB;

        $ret = [];

        $query_table = $xoopsDB->prefix('obsclient_clients');

        $sql = "SELECT ClientName FROM $query_table WHERE ClientID = $ClientID";

        $result = $xoopsDB->query($sql);

        $myrow = $xoopsDB->fetchArray($result);

        $ret = $myrow['ClientName'];

        if ('' == $ret) {
            $ret = 'Unknown';
        }

        return $ret;
    }

    public function getCategoryName($CategoryID)
    {
        global $xoopsDB;

        $ret = [];

        $query_table = $xoopsDB->prefix('obsclient_hd_categories');

        $sql = "SELECT CategoryName FROM $query_table WHERE CategoryID = $CategoryID";

        $result = $xoopsDB->query($sql);

        $myrow = $xoopsDB->fetchArray($result);

        $ret = $myrow['CategoryName'];

        if ('' == $ret) {
            $ret = 'Unknown';
        }

        return $ret;
    }

    public function getPriorityName($PriorityID)
    {
        global $xoopsDB;

        $ret = [];

        $query_table = $xoopsDB->prefix('obsclient_hd_priorities');

        $sql = "SELECT PriorityName FROM $query_table WHERE PriorityID = $PriorityID";

        $result = $xoopsDB->query($sql);

        $myrow = $xoopsDB->fetchArray($result);

        $ret = $myrow['PriorityName'];

        if ('' == $ret) {
            $ret = 'Unknown';
        }

        return $ret;
    }

    public function getStatusName($StatusID)
    {
        global $xoopsDB;

        $ret = [];

        $query_table = $xoopsDB->prefix('obsclient_hd_status');

        $sql = "SELECT StatusName FROM $query_table WHERE StatusID = $StatusID";

        $result = $xoopsDB->query($sql);

        $myrow = $xoopsDB->fetchArray($result);

        $ret = $myrow['StatusName'];

        if ('' == $ret) {
            $ret = 'Unknown';
        }

        return $ret;
    }

    public function getTicketOwner($TicketID)
    {
        global $xoopsDB;

        $ret = [];

        $query_table = $xoopsDB->prefix('obsclient_hd_ticketdata');

        $sql = "SELECT UID FROM $query_table WHERE TicketID = $TicketID";

        $result = $xoopsDB->query($sql);

        $myrow = $xoopsDB->fetchArray($result);

        $ret = $myrow['UID'];

        if ('' == $ret) {
            $ret = 'Unknown';
        }

        return $ret;
    }

    public function insertTicket($UID, $StatusID, $EntryDate, $ClientID, $CategoryID, $PriorityID, $TicketSubject, $TicketDetails)
    {
        global $xoopsDB;

        $query_table = $xoopsDB->prefix('obsclient_hd_ticketdata');

        $sql = "INSERT INTO $query_table ( TicketID, UID, StatusID, EntryDate, ClientID, CategoryID, PriorityID, TicketSubject, TicketDetails ) VALUES ( '', '$UID', '$StatusID', '$EntryDate', '$ClientID', '$CategoryID', '$PriorityID', '$TicketSubject', '$TicketDetails')";

        $ret = $xoopsDB->query($sql);

        if (!$ret) {
            echo($xoopsDB->error . ' : ' . $xoopsDB->errno);
        }

        return $ret;
    }

    public function getLastTicketID()
    {
        global $xoopsDB;

        $ret = $xoopsDB->getInsertId();

        return $ret;
    }

    // Not Used

    public function translateBillable($Billable)
    {
        if (1 == $Billable) {
            return 'Yes';
        }

        return 'No';
    }

    // Not Used

    public function generateProjects($formName, $functionName)
    {
        echo "<SCRIPT>\n";

        echo "\tfunction " . $functionName . "( iClient )\n\t{\n";

        echo "\t\tswitch( iClient )\n\t\t{\n";

        global $xoopsDB;

        $sql = 'SELECT ClientName, ClientID FROM ' . $xoopsDB->prefix('obsclient_hd_clients') . ' ORDER BY ClientName';

        $result_choose = $xoopsDB->query($sql);

        $clientCount = 0;

        while (false !== ($client_row = $xoopsDB->fetchArray($result_choose))) {
            $ClientName = $client_row['ClientName'];

            $ClientID = $client_row['ClientID'];

            $clientCount++;

            echo "\t\tcase " . $clientCount . ":\n";

            echo "\t\t// Client " . $ClientName . "\n";

            $inner_sql = 'SELECT ProjectName, ProjectID FROM ' . $xoopsDB->prefix('obsclient_hd_projects');

            $inner_sql .= ' WHERE ClientID = ' . $ClientID . ' ORDER BY ProjectName';

            $result_proj = $xoopsDB->query($inner_sql);

            $rowCount = 0;

            $projectCount = $xoopsDB->getRowsNum($result_proj);

            echo "\t\t\t" . $formName . '.length=' . $projectCount . ";\n";

            while (false !== ($project_row = $xoopsDB->fetchArray($result_proj))) {
                $ProjectName = $project_row['ProjectName'];

                $ProjectID = $project_row['ProjectID'];

                echo "\t\t\t" . $formName . '.options[' . $rowCount . "].text = '" . $ProjectName . "';\n";

                echo "\t\t\t" . $formName . '.options[' . $rowCount . "].value = '" . $ProjectID . "';\n";

                $rowCount++;
            }

            echo "\t\t\tbreak;\n";
        }

        echo "\n\t\tdefault:\n";

        echo "\t\t\t" . $formName . ".length=1;\n";

        echo "\t\t\t" . $formName . ".options[0].value = '3';\n";

        echo "\t\t}\n";

        echo "\t}\n";

        echo "</SCRIPT>\n";
    }
}

class HD_TicketUpdate
{
    public function insertUpdate($ParentTicketID, $UID, $EntryDate, $UpdateDetails)
    {
        global $xoopsDB;

        $query_table = $xoopsDB->prefix('obsclient_hd_ticketupdate');

        $sql = "INSERT INTO $query_table ( TicketUpdateID, ParentTicketID, UID, EntryDate, UpdateDetails ) VALUES ( '', '$ParentTicketID', '$UID', '$EntryDate', '$UpdateDetails')";

        $ret = $xoopsDB->query($sql);

        if (!$ret) {
            echo($xoopsDB->error . ' : ' . $xoopsDB->errno);
        }

        return $ret;
    }

    public function chooseUpdateFields($TicketID)
    {
        global $xoopsDB;

        $ret = [];

        $ticket_table = $xoopsDB->prefix('obsclient_hd_ticketupdate');

        $users_table = $xoopsDB->prefix('users');

        $sql = "SELECT u.uname, t.EntryDate, t.UpdateDetails FROM $ticket_table AS t LEFT JOIN $users_table AS u ON u.uid = t.UID WHERE t.ParentTicketID = $TicketID";

        $result_choose = $xoopsDB->query($sql);

        while (false !== ($client_row = $xoopsDB->fetchArray($result_choose))) {
            $ret[] = ['UNAME' => $client_row['uname'], 'EntryDate' => $client_row['EntryDate'], 'UpdateDetails' => $client_row['UpdateDetails']];
        }

        return $ret;
    }
}

class HD_ViewTicket
{
    public function chooseUserTickets($UID, $View)
    {
        global $xoopsDB;

        $ret = [];

        $ticket_table = $xoopsDB->prefix('obsclient_hd_ticketdata');

        $client_table = $xoopsDB->prefix('obsclient_clients');

        $category_table = $xoopsDB->prefix('obsclient_hd_categories');

        $status_table = $xoopsDB->prefix('obsclient_hd_status');

        $priority_table = $xoopsDB->prefix('obsclient_hd_priorities');

        $sql = "SELECT ticket.TicketID, ticket.EntryDate, ticket.TicketSubject, client.ClientName, category.CategoryName, status.StatusName, priority.PriorityName FROM $ticket_table AS ticket JOIN $client_table AS client, $category_table AS category, $status_table AS status, $priority_table AS priority WHERE ticket.UID = $UID AND client.ClientID = ticket.ClientID AND category.CategoryID = ticket.CategoryID AND status.StatusID = ticket.StatusID AND priority.PriorityID = ticket.PriorityID ORDER BY $View";

        $result_choose = $xoopsDB->query($sql);

        while (false !== ($client_row = $xoopsDB->fetchArray($result_choose))) {
            $ret[] = [
'TicketID' => $client_row['TicketID'],
'EntryDate' => $client_row['EntryDate'],
'TicketSubject' => $client_row['TicketSubject'],
'ClientName' => $client_row['ClientName'],
'CategoryName' => $client_row['CategoryName'],
'StatusName' => $client_row['StatusName'],
'PriorityName' => $client_row['PriorityName'],
            ];
        }

        return $ret;
    }

    public function chooseAllTickets($View)
    {
        global $xoopsDB;

        $ret = [];

        $users_table = $xoopsDB->prefix('users');

        $ticket_table = $xoopsDB->prefix('obsclient_hd_ticketdata');

        $client_table = $xoopsDB->prefix('obsclient_clients');

        $category_table = $xoopsDB->prefix('obsclient_hd_categories');

        $status_table = $xoopsDB->prefix('obsclient_hd_status');

        $priority_table = $xoopsDB->prefix('obsclient_hd_priorities');

        $sql = "SELECT ticket.TicketID, ticket.UID, ticket.EntryDate, ticket.TicketSubject, client.ClientName, category.CategoryName, status.StatusName, priority.PriorityName, users.uname FROM $ticket_table AS ticket JOIN $client_table AS client, $category_table AS category, $status_table AS status, $priority_table AS priority, $users_table AS users WHERE client.ClientID = ticket.ClientID AND category.CategoryID = ticket.CategoryID AND status.StatusID = ticket.StatusID AND priority.PriorityID = ticket.PriorityID AND ticket.UID = users.UID ORDER BY $View";

        $result_choose = $xoopsDB->query($sql);

        while (false !== ($client_row = $xoopsDB->fetchArray($result_choose))) {
            $ret[] = [
'TicketID' => $client_row['TicketID'],
'uname' => $client_row['uname'],
'EntryDate' => $client_row['EntryDate'],
'TicketSubject' => $client_row['TicketSubject'],
'ClientName' => $client_row['ClientName'],
'CategoryName' => $client_row['CategoryName'],
'StatusName' => $client_row['StatusName'],
'PriorityName' => $client_row['PriorityName'],
            ];
        }

        return $ret;
    }
}
