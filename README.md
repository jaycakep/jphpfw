# J PHP Framework

Simple - fast and lightweight PHP framework for routing HTTP requests, measuring execution time, and establishing a database connection using RedbeanPHP.

## Features

- **Routing:** Maps URLs to controller actions.
- **Execution Time Measurement:** Calculates and displays the execution time of each request.
- **404 Handling:** Displays a 404 error page for non-existent URLs.
- **Database Connection:** Connects to a MySQL database using RedbeanPHP.

## Usage

1. Place the scripts (`index.php` and `koneksi.php`) in the root directory of your application.
2. Create controllers in the `controllers` directory.
3. Define actions within your controllers.
4. Access the actions using URLs in the format `http://your-domain/controller/action/parameter`.
5. Uncomment the database connection code in `koneksi.php` and fill in the correct database credentials.

## Script Breakdown

### `index.php`

- Measures execution time using `microtime(true)`.
- Parses the URL to determine the requested controller and action.
- Loads the corresponding controller file.
- Instantiates the controller class.
- Calls the appropriate action method.
- Handles 404 errors for non-existent controllers or actions.
- Displays execution time to the JavaScript console.

### `koneksi.php`

- Establishes a database connection using RedbeanPHP.
- Sets the database connection parameters.
- Tests the database connection.

### `htaccess`

Provides URL rewriting rules:

- Removes the index.php file from the URL.
- Handles 404 errors for non-existent URLs.
- Enforces HTTPS connections by redirecting to the HTTPS version of the URL.

## Customization

- Modify the file structure and routing logic as needed for your specific application.
- Implement a more robust error handling mechanism.
- Explore alternative logging options for execution time data.
- Adjust database connection parameters in `koneksi.php`.

## Further Information

- For more detailed information on specific functions and techniques used in this script, refer to the [PHP documentation](https://www.php.net/docs.php).
- For RedbeanPHP documentation, visit [RedbeanPHP](https://www.redbeanphp.com/).
- For Apache .htaccess configuration, refer to the Apache documentation: [https://httpd.apache.org/docs/current/mod/mod_rewrite.html]: (<https://httpd.apache.org/docs/current/mod/mod_rewrite.html>).
