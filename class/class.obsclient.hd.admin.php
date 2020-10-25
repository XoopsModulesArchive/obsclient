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

class HD_Admin
{
    public function chooseClientIDNameActive()
    {
        global $xoopsDB;

        $ret = [];

        $query_table = $xoopsDB->prefix('obsclient_clients');

        $sql = "SELECT ClientName, ClientID FROM $query_table WHERE ClientAct = '1' ORDER BY ClientName";

        $result_choose = $xoopsDB->query($sql);

        while (false !== ($client_row = $xoopsDB->fetchArray($result_choose))) {
            $ret[$client_row['ClientID']] = $client_row['ClientName'];
        }

        return $ret;
    }

    public function chooseClientIDNameInactive()
    {
        global $xoopsDB;

        $ret = [];

        $query_table = $xoopsDB->prefix('obsclient_clients');

        $sql = "SELECT ClientName, ClientID FROM $query_table WHERE ClientAct = '0' ORDER BY ClientName";

        $result_choose = $xoopsDB->query($sql);

        while (false !== ($client_row = $xoopsDB->fetchArray($result_choose))) {
            $ret[$client_row['ClientID']] = $client_row['ClientName'];
        }

        return $ret;
    }

    public function chooseCategoryIDNameActive()
    {
        global $xoopsDB;

        $ret = [];

        $query_table = $xoopsDB->prefix('obsclient_hd_categories');

        $sql = "SELECT CategoryName, CategoryID FROM $query_table WHERE CategoryAct = '1' ORDER BY CategoryName";

        $result_choose = $xoopsDB->query($sql);

        while (false !== ($client_row = $xoopsDB->fetchArray($result_choose))) {
            $ret[$client_row['CategoryID']] = $client_row['CategoryName'];
        }

        return $ret;
    }

    public function chooseCategoryIDNameInactive()
    {
        global $xoopsDB;

        $ret = [];

        $query_table = $xoopsDB->prefix('obsclient_hd_categories');

        $sql = "SELECT CategoryName, CategoryID FROM $query_table WHERE CategoryAct = '0' ORDER BY CategoryName";

        $result_choose = $xoopsDB->query($sql);

        while (false !== ($client_row = $xoopsDB->fetchArray($result_choose))) {
            $ret[$client_row['CategoryID']] = $client_row['CategoryName'];
        }

        return $ret;
    }

    public function choosePriorityIDName()
    {
        global $xoopsDB;

        $ret = [];

        $query_table = $xoopsDB->prefix('obsclient_hd_priorities');

        $sql = "SELECT PriorityName, PriorityID FROM $query_table ORDER BY PriorityID";

        $result_choose = $xoopsDB->query($sql);

        while (false !== ($client_row = $xoopsDB->fetchArray($result_choose))) {
            $ret[$client_row['PriorityID']] = $client_row['PriorityName'];
        }

        return $ret;
    }

    public function chooseStatusIDName()
    {
        global $xoopsDB;

        $ret = [];

        $query_table = $xoopsDB->prefix('obsclient_hd_status');

        $sql = "SELECT StatusName, StatusID FROM $query_table ORDER BY StatusID";

        $result_choose = $xoopsDB->query($sql);

        while (false !== ($client_row = $xoopsDB->fetchArray($result_choose))) {
            $ret[$client_row['StatusID']] = $client_row['StatusName'];
        }

        return $ret;
    }

    public function activeClientID($CurrentID)
    {
        global $xoopsDB;

        $query_table = $xoopsDB->prefix('obsclient_clients');

        $sql = "UPDATE $query_table SET ClientAct = '1' WHERE ClientID = '$CurrentID'";

        $ret = $xoopsDB->query($sql);

        if (!$ret) {
            echo($xoopsDB->error . ' : ' . $xoopsDB->errno);
        }

        return $ret;
    }

    public function activeCategoryID($CurrentID)
    {
        global $xoopsDB;

        $query_table = $xoopsDB->prefix('obsclient_hd_categories');

        $sql = "UPDATE $query_table SET CategoryAct = '1' WHERE CategoryID = '$CurrentID'";

        $ret = $xoopsDB->query($sql);

        if (!$ret) {
            echo($xoopsDB->error . ' : ' . $xoopsDB->errno);
        }

        return $ret;
    }

    public function inactiveClientID($CurrentID)
    {
        global $xoopsDB;

        $query_table = $xoopsDB->prefix('obsclient_clients');

        $sql = "UPDATE $query_table SET ClientAct = '0' WHERE ClientID = '$CurrentID'";

        $ret = $xoopsDB->query($sql);

        if (!$ret) {
            echo($xoopsDB->error . ' : ' . $xoopsDB->errno);
        }

        return $ret;
    }

    public function inactiveCategoryID($CurrentID)
    {
        global $xoopsDB;

        $query_table = $xoopsDB->prefix('obsclient_hd_categories');

        $sql = "UPDATE $query_table SET CategoryAct = '0' WHERE CategoryID = '$CurrentID'";

        $ret = $xoopsDB->query($sql);

        if (!$ret) {
            echo($xoopsDB->error . ' : ' . $xoopsDB->errno);
        }

        return $ret;
    }

    public function addClientName($NewName)
    {
        global $xoopsDB;

        $query_table = $xoopsDB->prefix('obsclient_clients');

        $sql = "INSERT INTO $query_table ( ClientID, ClientName ) VALUES ( '', '$NewName')";

        $ret = $xoopsDB->query($sql);

        if (!$ret) {
            echo($xoopsDB->error . ' : ' . $xoopsDB->errno);
        }

        return $ret;
    }

    public function addCategoryName($NewName)
    {
        global $xoopsDB;

        $query_table = $xoopsDB->prefix('obsclient_hd_categories');

        $sql = "INSERT INTO $query_table ( CategoryID, CategoryName ) VALUES ( '', '$NewName')";

        $ret = $xoopsDB->query($sql);

        if (!$ret) {
            echo($xoopsDB->error . ' : ' . $xoopsDB->errno);
        }

        return $ret;
    }
}
