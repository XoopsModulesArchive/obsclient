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

$modversion['name'] = _MI_OBSCLIENT_NAME;
$modversion['version'] = 0.8;
$modversion['description'] = _MI_OBSCLIENT_DESC;
$modversion['credits'] = '';
$modversion['author'] = '';
$modversion['help'] = 'top.html';
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 0;
$modversion['image'] = 'module.png';
$modversion['dirname'] = 'obsclient';

$modversion['sqlfile']['mysql'] = 'sql/mysql.sql';
//$modversion['sqlfile']['postgresql'] = "sql/pgsql.sql";

// Tables created by sql file (without prefix!)
$modversion['tables'][0] = 'obsclient_clients';
$modversion['tables'][1] = 'obsclient_hd_categories';
$modversion['tables'][2] = 'obsclient_hd_status';
$modversion['tables'][3] = 'obsclient_hd_priorities';
$modversion['tables'][4] = 'obsclient_hd_ticketdata';
$modversion['tables'][5] = 'obsclient_hd_ticketupdate';

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php?section=front';
$modversion['adminmenu'] = 'admin/menu.php';

// Menu
$modversion['hasMain'] = 1;
$modversion['sub'][1]['name'] = 'Help Desk'; //define in language/english/global.php
$modversion['sub'][1]['url'] = '../../modules/obsclient/hd_index.php';
$modversion['sub'][2]['name'] = 'Time Tracking'; //define in language/english/global.php
$modversion['sub'][2]['url'] = '../../modules/obsclient/tt_index.php';
$modversion['sub'][3]['name'] = 'Knowledge Base'; //define in language/english/global.php
$modversion['sub'][3]['url'] = '../../modules/obsclient/kb_index.php';

// Templates
$modversion['templates'][1]['file'] = 'obsclient_index.html';
$modversion['templates'][1]['description'] = 'Page Layout';
$modversion['templates'][2]['file'] = 'obsclient_hd_index.html';
$modversion['templates'][2]['description'] = 'Page Layout';
$modversion['templates'][3]['file'] = 'obsclient_hd_super_index.html';
$modversion['templates'][3]['description'] = 'Page Layout';
$modversion['templates'][4]['file'] = 'obsclient_tt_index.html';
$modversion['templates'][4]['description'] = 'Page Layout';
$modversion['templates'][5]['file'] = 'obsclient_kb_index.html';
$modversion['templates'][5]['description'] = 'Page Layout';
$modversion['templates'][6]['file'] = 'obsclient_hd_ticket-new.html';
$modversion['templates'][6]['description'] = 'Page Layout';
$modversion['templates'][7]['file'] = 'obsclient_hd_ticket-update.html';
$modversion['templates'][7]['description'] = 'Page Layout';
$modversion['templates'][8]['file'] = 'obsclient_hd_super_ticket-update.html';
$modversion['templates'][8]['description'] = 'Page Layout';
$modversion['templates'][9]['file'] = 'obsclient_hd_view_ticket.html';
$modversion['templates'][9]['description'] = 'Page Layout';
$modversion['templates'][10]['file'] = 'obsclient_hd_view_super_ticket.html';
$modversion['templates'][10]['description'] = 'Page Layout';
