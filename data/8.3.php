<?php
return [
    /** @see https://github.com/php/php-src/blob/PHP-8.3.2/UPGRADING */
    'functions' => [
        // @see Standard
        'assert_options' => 'Function is now deprecated.'
    ],
    'constants' => [
        /** @see https://github.com/php/php-src/blob/PHP-8.3.2/UPGRADING */
        // @see Zip
        'FL_RECOMPRESS' => 'Deprecated and will be removed in a future version of libzip.',
        // @see Intl
        'U_MULTIPLE_DECIMAL_SEPERATORS' => 'Deprecated. Use U_MULTIPLE_DECIMAL_SEPARATORS instead.',
        'TYPE_CURRENCY' => 'DeprecaThe NumberFormatter::TYPE_CURRENCY has been deprecated. Try using CURRENCY constant instead.',
        // @see Standard
        'ASSERT_ACTIVE' => 'Deprecated. For more info you can check: https://wiki.php.net/rfc/assert-string-eval-cleanup',
        'ASSERT_BAIL' => 'deprecated. They already had no effect previously.',
        'ASSERT_CALLBACK' => 'Deprecated. For more info you can check: https://wiki.php.net/rfc/assert-string-eval-cleanup',
        'ASSERT_EXCEPTION' => 'Deprecated. For more info you can check: https://wiki.php.net/rfc/assert-string-eval-cleanup',
        'ASSERT_WARNING' => 'Deprecated. For more info you can check: https://wiki.php.net/rfc/assert-string-eval-cleanup',
    ],
    'ini_settings' => [
        'assert.active' => 'Deprecated. The zend.assertions INI setting should be used instead.',
        'assert.bail' => 'Deprecated. The zend.assertions INI setting should be used instead.',
        'assert.callback' => 'Deprecated. The zend.assertions INI setting should be used instead.',
        'assert.exception' => 'Depreacated. The zend.assertions INI setting should be used instead.',
        'assert.warning' => 'Deprecated. The zend.assertions INI setting should be used instead.',
    ]
];
