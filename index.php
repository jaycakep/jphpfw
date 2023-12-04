<?php
// Start measuring execution time
$startTime = microtime(true);

//this function to count exectution time
function CountExecutionTime($startTime)
{
    // Record the end of execution time
    $endTime = microtime(true);

    // Calculate the execution time
    $executionTime = $endTime - $startTime;

    // Output the execution time to the JavaScript console
    echo "<script>console.log('Execution time: " . number_format($executionTime, 4) . " seconds');</script>";
}

// Include the koneksi.php file to establish the database connection
require 'koneksi.php';

// Determine the server host
$serveHost = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
define('SERVER_HOST', '//' . $serveHost); // Define a constant for the server host

// Get the current URL
$url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
$url = rtrim($url, '/'); // Remove trailing slashes from the URL
$url = explode('/', $url); // Split the URL into an array of segments

// Determine the requested action based on the second URL segment
$action = isset($url[1]) ? $url[1] : 'index';

// Handle the default (empty) action
if (empty($url[1])) {
    include 'controllers/index.php'; // Include the index controller file
    $controller = new Index(); // Create an instance of the Index controller
    $controller->index(); // Call the index action of the Index controller
    CountExecutionTime($startTime); // Call count execution time function
    exit; // Terminate the script execution
}

// Attempt to load the corresponding controller file
$file = 'controllers/' . $url[1] . '.php'; // Construct the controller file path
if (file_exists($file)) {
    include $file; // Include the controller file
} else {
    require '404.php'; // Handle the 404 error
    CountExecutionTime($startTime); // Call count execution time function
    exit; // Terminate the script execution
}

// Instantiate the corresponding controller class
$controllerName = (ucfirst($url[1]) . 'Controller'); // Construct the controller class name
$controller = new $controllerName; // Create an instance of the controller class

// Check if the requested method exists
if (isset($url[3])) {
    $methodName = $url[2]; // Get the method name
    if (method_exists($controller, $methodName)) { // Check if the method exists
        $controller->$methodName($url[3]); // Call the method with the third URL segment as an argument
    } else {
        require '404.php'; // Handle the 404 error
        CountExecutionTime($startTime); // Call count execution time function
        exit; // Terminate the script execution
    }
} elseif (isset($url[2])) {
    $methodName = $url[2]; // Get the method name
    if (method_exists($controller, $methodName)) { // Check if the method exists
        $controller->$methodName(); // Call the method
    } else {
        require '404.php'; // Handle the 404 error
        CountExecutionTime($startTime); // Call count execution time function
        exit; // Terminate the script execution
    }
} else {
    $controller->index(); // Call the default index action
}

CountExecutionTime($startTime); // Call count execution time function