<?php
/**
 * @version     1.0.0
 * @package     com_user_details
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      dhaval <dave.dhaval21@gmail.com> - http://haircolor.org
 */


// no direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_user_details')) 
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

$controller	= JControllerLegacy::getInstance('User_details');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
