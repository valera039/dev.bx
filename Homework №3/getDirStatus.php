<?php

function getDirectionStatus($input){
    echo "Функция вывода статусов файлов в директории".PHP_EOL."Введенная директория: {$input}".PHP_EOL;
    $cur_dir = 0;
    $cur_file = 0;
    $list = ['dirs' => [$cur_dir => ['is_read' => [], 'is_write' => []]],
        'files' => [$cur_file => ['is_read' => [],'is_write' => [],'size' => []]]];
    $dir = opendir($input);
    if ($input[strlen($input)-1] != '/')
        $input .= '/';
    while($elem = readdir($dir))
    {
        $correct_path = $input.$elem;//вычисление правильного пути до файла или директории
        if (in_array($elem, ['.','..']))
        {
            continue;
        }
        if (is_dir($correct_path))
        {
            $list['dirs'][$elem]['is_read'] = is_readable($correct_path);
            $list['dirs'][$elem]['is_write'] = is_writable($correct_path);
        }
        else if (is_file($correct_path))
        {
            $list['files'][$elem]['is_read'] = is_readable($correct_path);
            $list['files'][$elem]['is_write'] = is_writable($correct_path);
            $list['files'][$elem]['size'] = filesize($correct_path);
        }
    }
    closedir($dir);
    unset($list['dirs'][0]);
    unset($list['files'][0]);
    return $list;
}
