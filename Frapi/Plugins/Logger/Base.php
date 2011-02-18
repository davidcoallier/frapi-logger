<?php
/**
 * Frapi Logger Plugin.
 *
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://getfrapi.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@getfrapi.com so we can send you a copy immediately.
 *
 * @license   New BSD
 * @copyright echolibre ltd.
 * @package   frapi
 */
abstract class Frapi_Plugins_Logger_Base extends Frapi_Action
{
    public function __construct()
    {
        // Do something here. A config for a queuing system driver
        // would be good.
        // $obj = new Queue();
        // $obj->pushJob('request', array('server' => $_SERVER, 'request' => $_REQUEST));
        // gtfo
    }
}
