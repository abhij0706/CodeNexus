<?php
/**
 * PHPMailer Autoloader
 * This script loads PHPMailer classes dynamically.
 */

spl_autoload_register(function ($className) {
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    
    // Define PHPMailer library path
    $file = __DIR__ . '/PHPMailer/' . $className . '.php';

    if (file_exists($file)) {
        require $file;
    }
});
?>
