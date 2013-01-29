<?php
//服务器上存放的文件
$local_file = '../music.mp3';
//用户下载时候的文件名
$download_file = 'download_default.mp3';
//限制的下载速度:20 k/s
$limit_rate = 20;

if ( file_exists($local_file) && is_file($local_file) ) {
    header('Cache-control:private');
    header('Content-Type:application/octet-stream');
    header("Content-Length:{filesize($local_file)}");
    header("Content-Disposition:filename={$download_file}");

    flush();

    $file = fopen($local_file, "r");
    while (!feof($file)) {
        print fread($file, round($limit_rate * 1024));
        flush();
        sleep(1);
    }
    fclose($file);
} else {
    die("Error:The file {$local_file} does not exist!\r\n");
}

