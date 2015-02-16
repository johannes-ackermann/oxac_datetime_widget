<?php

/**
 * 
 * @author johannes ackermann
 * Widget business logic. Sends current date and time to template.
 * 
 * This is an extension of oxWidget, which is an extension of oxView in turn.
 * 
 * 13/1/18-22
 * v0.2
 *
 */


class oxac_datetime_widget extends oxWidget
{
    protected $_sThisTemplate = 'oxac_datetime_widget.tpl';
    
    /**
     * Render. Puts 
     *
     * @return string
     */
    public function render()
    {
		parent::render();
    	$this->_aViewData['sDateAndTime'] = date("j. n. Y, H:i:s");
    	return $this->_sThisTemplate;
    }

    /**
     * isCacheable.
     * For EE: The module shall not be cached. Like this, it will be able to display the correct time on every call.
     * Training: Change return value to "true" and see what happens.
     *
     * @return boolean
     */
    public function isCacheable()
    {
        return false;
    }
}
