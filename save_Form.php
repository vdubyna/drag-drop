<?php
/**
 * Created by JetBrains PhpStorm.
 * User: klec
 * Date: 07.02.12
 * Time: 23:34
 * To change this template use File | Settings | File Templates.
 */
//echo phpinfo();
$url_root = $_SERVER['SERVER_NAME'];
$note_id = round(rand(0,99999999),8);
echo "This is <a href='http://".$url_root."/note_".$note_id."'>LINK</a> to your content";