<?php
// SMTP Configuration using .env
use Dotenv\Dotenv;

// Ensure Composer autoloader is loaded if not already
if (!class_exists('Dotenv\Dotenv')) {
    require_once __DIR__ . '/../phpmailer/vendor/autoload.php';
}

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->safeLoad();

// Helper to fetch env variables reliably
if (!function_exists('get_env_value')) {
    function get_env_value($key, $default = '') {
        if (array_key_exists($key, $_ENV)) return $_ENV[$key];
        if (array_key_exists($key, $_SERVER)) return $_SERVER[$key];
        $val = getenv($key);
        return $val !== false ? $val : $default;
    }
}

define('SMTP_HOST', get_env_value('SMTP_HOST'));
define('SMTP_USERNAME', get_env_value('SMTP_USERNAME'));
define('SMTP_PASSWORD', get_env_value('SMTP_PASSWORD'));
define('SMTP_PORT', get_env_value('SMTP_PORT', 465));
define('SMTP_FROM_EMAIL', get_env_value('SMTP_FROM_EMAIL'));
define('SMTP_FROM_NAME', get_env_value('SMTP_FROM_NAME'));
?>
