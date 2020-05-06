<!DOCTYPE html>
<html>
    <head>
     <title>Awsome PXL CI/CD App!</title>
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
    <h1>PXL - CI/CD Demo application</h1><hr/>
        <?php
        // Use 'composer install' to get dependencies
        // Remember to run tests using PHPUnit: 'vendor/bin/phpunit tests'

        // composer autoload. Might require 'composer dump-autoload' to work.
        require('vendor/autoload.php');

        // Define mysql server settings
        $serverName = "localhost";
        $username = "jenkins";
        $password = "pxl";
        $dbName = "employees";

        // Create a new mysqli connection. Remember to enable this in php.ini !!
        $conn = new mysqli($serverName, $username, $password, $dbName);
        // Build sql query and get results
        $sql = "SELECT emp_no, first_name, last_name FROM employees";
        $r = $conn->query($sql);
        // Convert query results to Employee model
        $employees = array();
        while($row = $r->fetch_assoc()){
            $emp = new Employee($row["first_name"], $row["last_name"], $row["emp_no"]);
            array_push($employees, $emp);
        }
        // Print db results
        echo "<ul>";
        foreach ($employees as $emp){
            echo "<li>" . $emp->__toString() . "</li>";
        }
        echo "</ul>";

        ?>
    
        <script src="assets/js/bootstrap.min.js" ></script>
    </body>
</html>
