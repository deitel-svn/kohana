<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-27 16:39:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in D:\OpenServer\domains\kohana\application\classes\Controller\Welcome.php:12
2015-10-27 16:39:13 --- DEBUG: #0 D:\OpenServer\domains\kohana\application\classes\Controller\Welcome.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 12, Array)
#1 D:\OpenServer\domains\kohana\system\classes\Kohana\Core.php(511): require('D:\OpenServer\d...')
#2 [internal function]: Kohana_Core::auto_load('Controller_Welc...')
#3 [internal function]: spl_autoload_call('Controller_Welc...')
#4 D:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client\Internal.php(74): class_exists('Controller_Welc...')
#5 D:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\kohana\application\classes\Controller\Welcome.php:12
2015-10-27 16:39:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting T_FUNCTION ~ APPPATH\classes\Controller\Welcome.php [ 9 ] in file:line
2015-10-27 16:39:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-27 16:39:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in D:\OpenServer\domains\kohana\application\classes\Controller\Welcome.php:8
2015-10-27 16:39:32 --- DEBUG: #0 D:\OpenServer\domains\kohana\application\classes\Controller\Welcome.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 8, Array)
#1 D:\OpenServer\domains\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 D:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\kohana\application\classes\Controller\Welcome.php:8
2015-10-27 17:23:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\Welcome.php [ 10 ] in D:\OpenServer\domains\kohana\application\classes\Controller\Welcome.php:10
2015-10-27 17:23:31 --- DEBUG: #0 D:\OpenServer\domains\kohana\application\classes\Controller\Welcome.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 10, Array)
#1 D:\OpenServer\domains\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 D:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\kohana\application\classes\Controller\Welcome.php:10
2015-10-27 17:26:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in file:line
2015-10-27 17:26:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-27 17:26:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in file:line
2015-10-27 17:26:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-27 17:27:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in file:line
2015-10-27 17:27:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-27 17:44:21 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/about could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in D:\OpenServer\domains\kohana\system\classes\Kohana\View.php:145
2015-10-27 17:44:21 --- DEBUG: #0 D:\OpenServer\domains\kohana\system\classes\Kohana\View.php(145): Kohana_View->set_filename('/pages/about')
#1 D:\OpenServer\domains\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/about', NULL)
#2 D:\OpenServer\domains\kohana\application\classes\Controller\page.php(7): Kohana_View::factory('/pages/about')
#3 D:\OpenServer\domains\kohana\system\classes\Kohana\Controller.php(84): Controller_Page->action_about()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 D:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\kohana\system\classes\Kohana\View.php:145
2015-10-27 17:44:28 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/about could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in D:\OpenServer\domains\kohana\system\classes\Kohana\View.php:145
2015-10-27 17:44:28 --- DEBUG: #0 D:\OpenServer\domains\kohana\system\classes\Kohana\View.php(145): Kohana_View->set_filename('/pages/about')
#1 D:\OpenServer\domains\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/about', NULL)
#2 D:\OpenServer\domains\kohana\application\classes\Controller\page.php(7): Kohana_View::factory('/pages/about')
#3 D:\OpenServer\domains\kohana\system\classes\Kohana\Controller.php(84): Controller_Page->action_about()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 D:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\kohana\system\classes\Kohana\View.php:145
2015-10-27 17:46:26 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/about could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in D:\OpenServer\domains\kohana\system\classes\Kohana\View.php:145
2015-10-27 17:46:26 --- DEBUG: #0 D:\OpenServer\domains\kohana\system\classes\Kohana\View.php(145): Kohana_View->set_filename('/pages/about')
#1 D:\OpenServer\domains\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/about', NULL)
#2 D:\OpenServer\domains\kohana\application\classes\Controller\page.php(7): Kohana_View::factory('/pages/about')
#3 D:\OpenServer\domains\kohana\system\classes\Kohana\Controller.php(84): Controller_Page->action_about()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 D:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\kohana\system\classes\Kohana\View.php:145