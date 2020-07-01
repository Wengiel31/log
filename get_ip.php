<?php
    function get_ip()
    {
        $ip = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
        {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        elseif (isset($_SERVER['HTTP_X_FORWARDED']))
        {
            $ip = $_SERVER['HTTP_X_FORWARDED'];
        }
        elseif (isset($_SERVER['HTTP_FORWARDED_FOR']))
        {
            $ip = $_SERVER['HTTP_FORWARDED_FOR'];
        }
        elseif (isset($_SERVER['HTTP_FORWARDED']))
        {
            $ip = $_SERVER['HTTP_FORWARDED'];
        }
        elseif (isset($_SERVER['REMOTE_ADDR']))
        {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        else
        {
            $ip = 'UNKNOWN';
        }
        return $ip;
    }
?>