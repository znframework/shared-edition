<?php
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 * @since   2011
 */

/*
|--------------------------------------------------------------------------
| Require Core File
|--------------------------------------------------------------------------
|
| It includes the necessary things for the operation of the system.
|
*/

require __DIR__ . '/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run ZN
|--------------------------------------------------------------------------
|
| Simplicity is our principle. Enjoy it.
|
*/

ZN\ZN::defines
([
    'CONTROLLERS_DIR' => 'app/Http/Controllers/',
    'VIEWS_DIR'       => 'app/Http/Views/',
    'COMMANDS_DIR'    => 'app/Console/',
    'LIBRARIES_DIR'   => 'app/Models/',
    'CONFIG_DIR'      => 'config/',
    'DATABASES_DIR'   => 'database/',
    'MODELS_DIR'      => 'database/',
    'BUTCHERY_DIR'    => 'resources/butchery/',
    'FILES_DIR'       => 'resources/files/',
    'LANGUAGES_DIR'   => 'resources/lang/', 
    'TEMPLATES_DIR'   => 'resources/templates/',
    'UPLOADS_DIR'     => 'resources/uploads/',
    'ROUTES_DIR'      => 'routes/',
    'STORAGE_DIR'     => 'storage/',
    'AUTOLOAD_DIR'    => '',
    'THEMES_DIR'      => '',
    'PLUGINS_DIR'     => '',

])::run('CE');