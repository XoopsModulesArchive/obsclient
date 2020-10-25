<?php

//  ------------------------------------------------------------------------ //
//                        Contact Plus Module for                            //
//               XOOPS - PHP Content Management System 2.0                   //
//                            Versión 1.2                                    //
//                   Copyright (c) 2002 Mario Figge                          //
//                       http://www.zona84.com                               //
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

// Get Section
$Section = $_GET['section'];

if ('front' == $Section) {
    xoops_cp_header();

    echo "<h4 style='text-align:left;'>OBS Client System Administration</h4>";

    OpenTable();

    echo ' >> <a href=index.php?section=hd>Help Desk Administration</a><br><br>';

    echo ' >> <a href=index.php?section=tt>Time Tracking Administration</a><br><br>';

    echo ' >> <a href=index.php?section=kb>Knowledge Base Administration</a><br><br>';

    CloseTable();

    xoops_cp_footer();
} elseif ('hd' == $Section) {
    xoops_cp_header();

    echo "<h4 style='text-align:left;'><a href=index.php?section=front>OBS Client System Administration</a> : Help Desk Administration</h4>";

    OpenTable();

    echo ' >> <a href=hd_index.php?section=gp>General Preferences</a><br><br>';

    echo ' >> <a href=hd_index.php?section=up>User Permissions</a><br><br>';

    CloseTable();

    xoops_cp_footer();
} elseif ('tt' == $Section) {
    xoops_cp_header();

    echo "<h4 style='text-align:left;'><a href=index.php?section=front>OBS Client System Administration</a> : Time Tracking Administration</h4>";

    OpenTable();

    echo ' >> <a href=index.php?section=hd>Time Tracking Administration</a><br><br>';

    CloseTable();

    xoops_cp_footer();
} elseif ('kb' == $Section) {
    xoops_cp_header();

    echo "<h4 style='text-align:left;'><a href=index.php?section=front>OBS Client System Administration</a> : Knowledge Base Administration</h4>";

    OpenTable();

    echo ' >> <a href=index.php?section=kb>Knowledge Base Administration</a><br><br>';

    CloseTable();

    xoops_cp_footer();
}
