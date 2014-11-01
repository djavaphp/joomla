<?php
/**
 * @version     1.0.0
 * @package     com_user_details
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      dhaval <dave.dhaval21@gmail.com> - http://haircolor.org
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

/**
 * Details controller class.
 */
class User_detailsControllerDetails extends JControllerForm
{

    function __construct() {
        $this->view_list = 'detailss';
        parent::__construct();
    }

}