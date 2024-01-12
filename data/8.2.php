<?php
return [
    /** @see https://github.com/php/php-src/blob/PHP-8.2.15/UPGRADING */
    'functions' => [
        // @see Standard
        'utf8_encode' => 'Deprecated. Will be removed in PHP 9.0. Use mb_convert_encoding($string, "UTF-8", "ISO-8859-1") instead.',
        'utf8_decode' => 'Deprecated. Will be removed in PHP 9.0. Use mb_convert_encoding($string, "ISO-8859-1", "UTF-8") instead.',
    ],
    'constants' => [
        /** @see https://github.com/php/php-src/blob/PHP-8.2.15/UPGRADING */
        'MYSQLI_IS_MARIADB' => 'Deprecated.',
    ]
];
