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

// For Group Permissions
require dirname(__DIR__, 3) . '/include/cp_header.php';
require_once XOOPS_ROOT_PATH . '/class/xoopsform/grouppermform.php';
$module_id = $xoopsModule->getVar('mid');

// Get Section
$Section = $_GET['section'];

if ('gp' == $Section) {
    xoops_cp_header();

    echo "<h4 style='text-align:left;'><a href=index.php?section=front>OBS Client System Administration</a> : <a href=index.php?section=hd>Help Desk Administration</a> : General Preferences</h4>";

    OpenTable();

    // Create Objects

    $admin = new HD_Admin();

    // Client Names

    $activeclientnames = $admin->chooseClientIDNameActive();

    echo "<form name='clientinactive' action='hd_admin_do.php' method='post'>";

    echo "<table class='outer' cellspacing='1'><th colspan='3'>Current Clients</th>
 	        <tr valign='top' align='left'>
                  <td class='head'>Active Client Names:&nbsp;</td>
                  <td class='head'>
		    <select size='10' name='currentid' id='currentid'>";

    while (list($key, $value) = each($activeclientnames)) {
        echo "<option value='$key'>$value</option>";
    }

    echo "	    </select>
		  </td>
		</tr>
                <tr>
                  <td class='head' colspan='3' align='right'>
                    <input type='submit' class='formButton' name='clientinactive'  id='clientinactive' value='Make Inactive'><br><br></input>
                  </td>
                </tr>
              <input type='hidden' name='action' value='clientinactive'>
              </form>";

    $inactiveclientnames = $admin->chooseClientIDNameInactive();

    echo "<form name='clientactive' action='hd_admin_do.php' method='post'>";

    echo "<tr valign='top' align='left'>
                  <td class='head'>Inactive Client Names:&nbsp;</td>
                  <td class='head'>
		    <select size='10' name='currentid' id='currentid'>";

    while (list($key, $value) = each($inactiveclientnames)) {
        echo "<option value='$key'>$value</option>";
    }

    echo "	    </select>
		  </td>
		</tr>
                <tr>
                  <td class='head' colspan='3' align='right'>
                    <input type='submit' class='formButton' name='clientactive'  id='clientactive' value='Make Active'><br><br></input>
                  </td>
                </tr>
              <input type='hidden' name='action' value='clientactive'>
              </form>";

    echo "<form name='clientadd' action='hd_admin_do.php' method='post'>
                <tr valign='top' align='left'>
                  <td class='head'>Add a Client Name:&nbsp;</td>
                  <td class='head'>
                    <input type='text' name='newname' id='newname' size='30' maxlength='50' value=''>
                  </td>
                </tr>
                <tr>
                  <td class='head' colspan='2'align='right'>
                    <input type='submit' class='formButton' name='clientadd'  id='clientadd' value='Add'><br><br></input>
                  </td>
                </tr>
              <input type='hidden' name='action' value='clientadd'>
              </form>";

    // Category Names

    $activecategorynames = $admin->chooseCategoryIDNameActive();

    echo "<form name='categoryinactive' action='hd_admin_do.php' method='post'>";

    echo "<th colspan='3'>Current Categories</th>
 	        <tr valign='top' align='left'>
                  <td class='head'>Active Category Names:&nbsp;</td>
                  <td class='head'>
		    <select size='10' name='currentid' id='currentid'>";

    while (list($key, $value) = each($activecategorynames)) {
        echo "<option value='$key'>$value</option>";
    }

    echo "	    </select>
		  </td>
		</tr>
                <tr>
                  <td class='head' colspan='3' align='right'>
                    <input type='submit' class='formButton' name='categoryinactive'  id='categoryinactive' value='Make Inactive'><br><br></input>
                  </td>
                </tr>
              <input type='hidden' name='action' value='categoryinactive'>
              </form>";

    $inactivecategorynames = $admin->chooseCategoryIDNameInactive();

    echo "<form name='categoryactive' action='hd_admin_do.php' method='post'>";

    echo "<tr valign='top' align='left'>
                  <td class='head'>Inactive Category Names:&nbsp;</td>
                  <td class='head'>
		    <select size='10' name='currentid' id='currentid'>";

    while (list($key, $value) = each($inactivecategorynames)) {
        echo "<option value='$key'>$value</option>";
    }

    echo "	    </select>
		  </td>
		</tr>
                <tr>
                  <td class='head' colspan='3' align='right'>
                    <input type='submit' class='formButton' name='clientactive'  id='clientactive' value='Make Active'><br><br></input>
                  </td>
                </tr>
              <input type='hidden' name='action' value='categoryactive'>
              </form>";

    echo "<form name='clientadd' action='hd_admin_do.php' method='post'>
                <tr valign='top' align='left'>
                  <td class='head'>Add a Category Name:&nbsp;</td>
                  <td class='head'>
                    <input type='text' name='newname' id='newname' size='30' maxlength='50' value=''>
                  </td>
                </tr>
                <tr>
                  <td class='head' colspan='2'align='right'>
                    <input type='submit' class='formButton' name='categoryadd'  id='categoryadd' value='Add'><br><br></input>
                  </td>
                </tr>
              <input type='hidden' name='action' value='categoryadd'>
              </form>";

    // Priority Names

    $prioritynames = $admin->choosePriorityIDName();

    echo "<form name='prioritydelete' action='hd_admin_do.php' method='post'>";

    echo "  <th colspan='3'>Current Priorities</th>
 	        <tr valign='top' align='left'>
                  <td class='head'>Priority Names:&nbsp;</td>
                  <td class='head'>
		    <select  size='5' name='currentid' id='currentid'>";

    while (list($key, $value) = each($prioritynames)) {
        echo "<option value='$key'>$value</option>";
    }

    echo "	    </select>
		  </td>
		</tr>
                <tr>
                  <td class='head' colspan='2'align='right'>&nbsp;</td>
                </tr>
              </form>";

    // Status Names

    $statusnames = $admin->chooseStatusIDName();

    echo "<form name='statusdelete' action='hd_admin_do.php' method='post'>";

    echo "  <th colspan='3'>Current Status</th>
 	        <tr valign='top' align='left'>
                  <td class='head'>Ticket Status:&nbsp;</td>
                  <td class='head'>
		    <select  size='6' name='currentid' id='currentid'>";

    while (list($key, $value) = each($statusnames)) {
        echo "<option value='$key'>$value</option>";
    }

    echo "	    </select>
		  </td>
		</tr>
                <tr>
                  <td class='head' colspan='2'align='right'>&nbsp;</td>
                </tr>
              </form>";

    CloseTable();

    xoops_cp_footer();
} elseif ('up' == $Section) {
    xoops_cp_header();

    echo "<h4 style='text-align:left;'><a href=index.php?section=front>OBS Client System Administration</a> : <a href=index.php?section=hd>Help Desk Administration</a> : User Permissions</h4>";

    OpenTable();

    $item_list = ['1' => 'Help Desk Super User Functions', '2' => 'Help Desk User Functions'];

    $title_of_form = 'Permission form for my module';

    $perm_name = 'OBS Permission';

    $perm_desc = 'Select weather a group can access OBS Client System';

    $form = new XoopsGroupPermForm($title_of_form, $module_id, $perm_name, $perm_desc);

    foreach ($item_list as $item_id => $item_name) {
        $form->addItem($item_id, $item_name);
    }

    echo $form->render();

    CloseTable();

    xoops_cp_footer();
}
