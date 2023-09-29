<?php

require "../vendor/autoload.php";
require "./services/ProjectService.php";

Flight::register('projectService', 'ProjectService');

require 'routes/MidtermRoutes.php';

Flight::start();
 ?>