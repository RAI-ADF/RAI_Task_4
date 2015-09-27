<?php
/**
 * Created by PhpStorm.
 * User: rizki
 * Date: 24/09/15
 * Time: 10:57
 */
session_start();
session_destroy();
header("Location: index.php");