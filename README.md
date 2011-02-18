Frapi Logger Plugin
===================

Third party services like http://apigee.com and http://mashery.com are services we usually strongly recommend. However some people like to manage all this because
sending data to or going through a third party provider is sometimes an area of concern.

This very simple plugin will allow you to log the incoming requests to a simple database table so you can have your own analytics running in the background or even
implemented in the administration interface if you want to (You have to do that though).

introduction
------------
In order to get the Logger running you have to do a few things. Follow the steps below and you might be running in no time.

  1. If it doesn't exist already, create a **Library** directory in your FRAPI CUSTOM_PATH. 
  2. In that **Library** directory, create the following directories **Frapi/Plugins/Logger**. This can be done by doing **mkdir -p Frapi/Plugins/Logger**
  3. Copy the content of the Frapi/Plugins/Logger/* in this repository to the one you created in your FRAPI install 
     Alternatively you can do: cd FRAPI_CUSTOM_PATH; mkdir Library; cd Library; git clone git://github@github.com/davidcoallier/frapi-logger.git . 
  4. Import the setup.sql database file into your database (preferably with the same settings you set in your FRAPI admin)
  5. Add the following to your custom/AllFiles.php

	defined('CUSTOM_LIBRARY') || define('CUSTOM_LIBRARY', CUSTOM_PATH. DIRECTORY_SEPARATOR . 'Library');
	defined('CUSTOM_LIBRARY_FRAPI_PLUGINS') || 
		define('CUSTOM_LIBRARY_FRAPI_PLUGINS', CUSTOM_LIBRARY . DIRECTORY_SEPARATOR . 'Frapi' . DIRECTORY_SEPARATOR . 'Plugins');

	require CUSTOM_LIBRARY_FRAPI_PLUGINS . DIRECTORY_SEPARATOR . 'Logger' . DIRECTORY_SEPARATOR . 'Base.php';

  6. Now when you generate new actions in the FRAPI administration panel, change the class it extends to Frapi_Plugins_Logger_Base so it looks like
    
	class Action_Name extends Frapi_Plugins_Logger_Base implements Frapi_Action_Interface {...}

You can make changes to the logger/base if you need different formats.
