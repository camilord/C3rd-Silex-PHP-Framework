<?php
/**
 * Created by PhpStorm.
 * User: Camilo3rd
 * Date: 7/27/2015
 * Time: 9:50 PM
 */

// load default contronller provider
$app->mount('/', new NotesLocker\Controllers\DefaultControllerProvider());