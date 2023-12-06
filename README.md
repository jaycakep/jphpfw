# J PHP Framework

## Project Background

This project is a result of my experience in developing web-based software using PHP. Having worked with various existing frameworks, I observed that many of them tend to be excessively complex, featuring numerous functionalities that are rarely, if ever, utilized in practical scenarios. These superfluous features, while part of the framework package, contribute to unnecessary complexity.

## Project Objectives

The primary goal of developing this project is to empower developers to create software rapidly and efficiently. The emphasis is on minimizing complexity, optimizing resource usage, facilitating seamless database access, and simplifying code structure. The overarching aim is to provide a framework that is not only user-friendly but also easy to maintain in the long run.

The main objectives of this PHP framework are:

1. **Routing**: Efficiently map URLs to controller actions for seamless navigation within the application.

2. **Execution Time Measurement**: Provide a mechanism to measure and log the execution time of each request, aiding in performance analysis.

3. **Database Connection**: Establish a connection to a MySQL database using RedBeanPHP for efficient data persistence.

4. **Template System**: Implement a simple template system for consistent and maintainable rendering of views.

5. **404 Handling**: Display a user-friendly 404 error page for non-existent URLs, enhancing the overall user experience.

6. **SSL Redirection**: Enforce secure HTTPS connections through automatic redirection using `.htaccess`.

## Installation

Follow these steps to set up the PHP framework in your project:

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/jaycakep/jphpfw.git
   ```

2. Navigate to the Project Directory:

    ```bash
    cd your-project
    ```

3. Place Required Files:

    Move index.php, koneksi.php, 404.php, and .htaccess to the root directory of your application.

4. Database Configuration:

   - Uncomment the database connection parameters in koneksi.php.
   - Fill in the correct details for your MySQL database.

5. Create Controllers and Views:

   - Create controllers in the controllers directory and define actions within them.
   - Create view templates in the views directory, following the provided structure.

6. Access the Application:

    Open your web browser and navigate to <http://your-domain/>.

## Project Structure

- `index.php`: Main application entry point
- `koneksi.php`: Database connection configuration (uncommented by default)
- `404.php`: 404 error page
- `models/frontpage.php`: Model for retrieving data from the database
- `controllers/index.php`: Controller for handling the home page
- `views/`:
  - `view_header.php`: Header template for all pages
  - `view_index.php`: Template for the home page
  - `view_footer.php`: Footer template for all pages
- `.htaccess`: URL rewriting configuration for routing and HTTPS redirection

## Features

- **Routing**: Maps URLs to controller actions.
- **Execution Time Measurement**: Calculates and logs the execution time of each request to the JavaScript console.
- **Database Connection**: Connects to a MySQL database using RedBeanPHP for data persistence.
- **Template System**: Renders views using a simple template system for consistent page layouts.
- **404 Handling**: Displays a 404 error page for non-existent URLs.
- **SSL Redirection**: Enforces HTTPS connections using `.htaccess`.

## Usage

1. Place the `index.php`, `koneksi.php`, `404.php`, and `.htaccess` files in the root directory of your application.
2. Uncomment the database connection parameters in `koneksi.php` and fill in the correct details for your database.
3. Create controllers in the `controllers` directory and define actions within them.
4. Create view templates in the `views` directory, following the provided structure.
5. Access the home page using the URL `http://your-domain/`.

## Script Breakdown

### `index.php`

- Handles routing and dispatching to controller actions.
- Measures execution time using `microtime(true)` and logs it to the JavaScript console.
- Includes the `koneksi.php` file to establish the database connection (uncommented by default).

### `controllers/index.php`

- Handles actions for the home page.
- Retrieves data from the database using the `FrontPage` model.
- Renders the `view_index.php` template using data from the model.

### `models/frontpage.php`

- Contains methods for retrieving data from the database.
- Provides a `getHomeFromDB()` method that retrieves example data for the home page.

### `views/view_index.php`

- Defines the HTML structure and content for the home page.
- Uses PHP `echo` statements to embed dynamic data from the controller.

### `views/template/view_header.php`

- Defines the header template for all pages.
- Includes the necessary CSS and JavaScript files.

### `views/template/view_footer.php`

- Defines the footer template for all pages.

### `.htaccess`

- Provides URL rewriting rules:
  - Removes the `index.php` file from the URL.
  - Handles 404 errors for non-existent URLs.
  - Enforces HTTPS connections by redirecting to the HTTPS version of the URL.

## Customization

- Modify the file structure and routing logic as needed for your specific application.
- Implement a more robust error-handling mechanism.
- Enhance the template system to support more complex layouts and data manipulation.
- Explore alternative database connection options and ORM libraries.

## Further Information

- For more detailed information on specific functions and techniques used in this script, refer to the [PHP documentation](https://www.php.net/docs.php).
- For information on RedBeanPHP, used for database connection, visit [RedBeanPHP](https://redbeanphp.com).
- For Apache `.htaccess` configuration, refer to the [Apache documentation](https://httpd.apache.org/docs/current/mod/mod_rewrite.html).

Feel free to adjust the content as needed to better align with the specific goals and details of your PHP framework project.
