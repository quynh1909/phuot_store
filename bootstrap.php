<?php

define('ROOTDIR', __DIR__ . DIRECTORY_SEPARATOR);

try {
    // Load Composer autoloader
    require_once ROOTDIR . 'vendor/autoload.php';

    // Load environment variables from .env file
    $dotenv = Dotenv\Dotenv::createImmutable(ROOTDIR);
    $dotenv->load();

    // Initialize Illuminate Database Capsule
    $capsule = new Illuminate\Database\Capsule\Manager;

    $capsule->addConnection([
        'driver' => 'mysql',
        'host' => $_ENV['DB_HOST'],
        'database' => $_ENV['DB_NAME'],
        'username' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASS'],
    ]);

    // Make this Capsule instance available globally via static methods
    $capsule->setAsGlobal();

    // Setup the Eloquent ORM
    $capsule->bootEloquent();
} catch (Exception $e) {
    // Handle errors
    echo 'Error: ' . $e->getMessage();
    // Log the error
    // error_log('Error: ' . $e->getMessage());
    exit(); // Terminate the script on error
}
