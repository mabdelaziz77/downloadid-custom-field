<?php
/**
 * @package     JoomReem.DownloadID
 *
 * @copyright   Copyright (C) 2017 JoomReem.com (Mohamed Abdelaziz). All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

jimport('joomla.form.formfield');
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('text');

class JFormFieldDownloadID extends JFormFieldText {

    //The field class must know its own type through the variable $type.
    protected $type = 'DownloadID';

    public function getInput() {

        if ($this->value) {
            $extra_query = "'{$this->element['key']}={$this->value}'";

            $db = JFactory::getDbo();
            $query = $db->getQuery(true)
                    ->update('#__update_sites')
                    ->set('extra_query = ' . $extra_query)
                    ->where('name = "'.$this->element['extension'].'"');
            $db->setQuery($query);
            $db->execute();
        }
        // code that returns HTML that will be shown as the form field
        return parent::getInput();
    }

}
