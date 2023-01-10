<?php

declare(strict_types=1);

if (file_exists(DIR_FS_DOCUMENT_ROOT . '/vendor-no-composer/autoload.php')) {
    require_once DIR_FS_DOCUMENT_ROOT . '/vendor-no-composer/autoload.php';
} else {
    trigger_error(
        'MMLC Module composer/autoload notice: can`t find file: ' .
        DIR_FS_DOCUMENT_ROOT . '/vendor-no-composer/autoload.php ' .
        ' This file is generated by the MMLC.',
        E_USER_NOTICE
    );
}
