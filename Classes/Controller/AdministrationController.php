<?php
namespace FluidTYPO3\MooxCore\Controller;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Jakub Czyz <jc@dcn.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
 
/**
 * The main Controller, managing all the tasks for moox core dashboard management
 */
class AdministrationController extends ActionController{
 
    /**
     * initial action, called on a clean request without specified target
     */
    public function dashboardAction() {
    }
}