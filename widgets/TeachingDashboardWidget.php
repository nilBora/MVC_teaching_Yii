<?php

/**
 * HumHub
 * Copyright © 2014 The HumHub Project
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 */

/**
 * @author andystrobel
 */
class TeachingDashboardWidget extends HWidget
{
	
	public function init() {

    }
	
    public function run()
    {
    	if(isset($_GET['id']) ){
	    	$id = (int)$_GET['id'];
	    	if(isset(Yii::app()->session['timer'][$id]))
	    	{
		    	$timer = Yii::app()->session['timer'][$id];
		    	$this->render('timerPanel', array('timer'=>$timer, 'id'=>$id));
	    	}

	    	
		}
    }

}
