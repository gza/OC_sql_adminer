<?php

/**
* SQL Web Adminer
* Inclusion of Miner (http://www.adminer.org/)
* Adminer remain GPL-2
* @author Guillaume ZITTA <oc.guillaume@zitta.fr>
* @copyright 2012
* 
* This library is free software; you can redistribute it and/or
* modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
* License as published by the Free Software Foundation; either 
* version 3 of the License, or any later version.
* 
* This library is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU AFFERO GENERAL PUBLIC LICENSE for more details.
*  
* You should have received a copy of the GNU Lesser General Public 
* License along with this library.  If not, see <http://www.gnu.org/licenses/>.
* 
*/

/* TODO: enable nonadmin visibility param
OC_Appconfig::getValue('sql_adminer', $param,'');
*/
// OCP\User::checkAdminUser();
if( OC_Group::inGroup( OCP\User::getUser(), 'admin' )){
	OCP\App::registerAdmin('sql_adminer','adminSettings');

	OCP\App::register( array( 'order' => 70, 'id' => 'sql_adminer', 'name' => 'SqlAdminer' ));

	OCP\App::addNavigationEntry( array( 'id' => 'sql_adminer', 'order' => 74, 'href' => OCP\Util::linkTo( 'sql_adminer', 'index.php' ), 'icon' => OCP\Util::imagePath( 'sql_adminer', 'server-database.png' ), 'name' => 'SqlAdminer'));
};
