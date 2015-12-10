<?php
/**
 * @author johannes ackermann
 * Widget business logic. Sends current date and time to template.
 *
 * This is an extension of oxWidget, which is an extension of oxView in turn.
 * Note the isCacheable() function!
 *
 * 13/1/18-15/12/10
 * v0.3.2
 */

class oxac_datetime_widget extends oxWidget
{



    protected $_sThisTemplate = 'oxac_datetime_widget.tpl';



    /**
     * getDateAndTime
     *
     * Returns date and time in a string.
     * @return string
     */
    public function getDateAndTime()
    {
        return date("j. n. Y, H:i:s");
    }



    /**
     * isCacheable.
     * For EE: The module shall not be cached. Like this, it will be able to display the correct time on every call.
     * Training: Activate the caching feature in the shop as well as in the module settings and see what happens.
     * (Requires Varnish)
     *
     * @return boolean
     */
    public function isCacheable()
    {
        return oxRegistry::getConfig()->getConfigParam('blDateWidgetCaching');
    }
}
