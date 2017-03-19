<?php
/**
 * Created by PhpStorm.
 * User: Kozub Eugen
 * Date: 19.03.2017
 * Time: 12:09
 */

$token = '332153319:AAE5mbWS3cnriBvwCh9XqnkzF1UhFaaig90';

$output = file_get_contents('php://input');
file_put_contents('logs.txt', $output);