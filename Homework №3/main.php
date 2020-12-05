<?php

require_once 'getDirStatus.php';

function assertEquals($expected, $received, $message)
{
    if ($expected === $received) {
        echo $message . " - passed" . PHP_EOL;
    } else {
        echo $message . " - failed" . PHP_EOL;
    }
}

$arr = getDirectionStatus('../Mockup/');
assertEquals(array (
        'dirs' =>
            array (
            ),
        'files' =>
            array (
                'main.php' =>
                    array (
                        'is_read' => true,
                        'is_write' => true,
                        'size' => 2987,
                    ),
                'img5.png' =>
                    array (
                        'is_read' => true,
                        'is_write' => true,
                        'size' => 53274,
                    ),
                'header.php' =>
                    array (
                        'is_read' => true,
                        'is_write' => true,
                        'size' => 6,
                    ),
                'style.css' =>
                    array (
                        'is_read' => true,
                        'is_write' => true,
                        'size' => 1331,
                    ),
                'Logo4.svg' =>
                    array (
                        'is_read' => true,
                        'is_write' => true,
                        'size' => 4766,
                    ),
                'Logo2.svg' =>
                    array (
                        'is_read' => true,
                        'is_write' => true,
                        'size' => 4105,
                    ),
                'Logo3.svg' =>
                    array (
                        'is_read' => true,
                        'is_write' => true,
                        'size' => 4911,
                    ),
                'Logo1.svg' =>
                    array (
                        'is_read' => true,
                        'is_write' => true,
                        'size' => 6772,
                    ),
            ),
    ), $arr, 'test - arr'
);
$arr = getDirectionStatus('..');

assertEquals(array (
    'dirs' =>
        array (
            'Mockup2' =>
                array (
                    'is_read' => true,
                    'is_write' => true,
                ),
            'database' =>
                array (
                    'is_read' => true,
                    'is_write' => true,
                ),
            'tests' =>
                array (
                    'is_read' => true,
                    'is_write' => true,
                ),
            'lib' =>
                array (
                    'is_read' => true,
                    'is_write' => true,
                ),
            'Homework №2' =>
                array (
                    'is_read' => true,
                    'is_write' => true,
                ),
            '.git' =>
                array (
                    'is_read' => true,
                    'is_write' => true,
                ),
            'Mockup' =>
                array (
                    'is_read' => true,
                    'is_write' => true,
                ),
            'Homework №4' =>
                array (
                    'is_read' => true,
                    'is_write' => true,
                ),
            'Homework №3' =>
                array (
                    'is_read' => true,
                    'is_write' => true,
                ),
            '.idea' =>
                array (
                    'is_read' => true,
                    'is_write' => true,
                ),
        ),
    'files' =>
        array (
            'info.php' =>
                array (
                    'is_read' => true,
                    'is_write' => true,
                    'size' => 17,
                ),
            'phpunit.phar' =>
                array (
                    'is_read' => true,
                    'is_write' => true,
                    'size' => 4353790,
                ),
            '.DS_Store' =>
                array (
                    'is_read' => true,
                    'is_write' => true,
                    'size' => 6148,
                ),
            'phpunit.xml' =>
                array (
                    'is_read' => true,
                    'is_write' => true,
                    'size' => 426,
                ),
            'index.php' =>
                array (
                    'is_read' => true,
                    'is_write' => true,
                    'size' => 1469,
                ),
            'LICENSE' =>
                array (
                    'is_read' => true,
                    'is_write' => true,
                    'size' => 1066,
                ),
            'lession.php' =>
                array (
                    'is_read' => true,
                    'is_write' => true,
                    'size' => 6,
                ),
            'function.php' =>
                array (
                    'is_read' => true,
                    'is_write' => true,
                    'size' => 8,
                ),
            'calc.php' =>
                array (
                    'is_read' => true,
                    'is_write' => true,
                    'size' => 1464,
                ),
            'README.md' =>
                array (
                    'is_read' => true,
                    'is_write' => true,
                    'size' => 8,
                ),
            '.gitignore' =>
                array (
                    'is_read' => true,
                    'is_write' => true,
                    'size' => 7,
                ),
            '.phpunit.result.cache' =>
                array (
                    'is_read' => true,
                    'is_write' => true,
                    'size' => 481,
                ),
        ),
), $arr, 'test-prev_dir');



/*getDirectionStatus('../Mockup/');
getDirectionStatus('./');
getDirectionStatus('/tmp/');
*/
