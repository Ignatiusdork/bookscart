<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function pdo_connect_mysql() {

    // create a data-source-name to connect to db
    $dsn = "mysql:host=localhost;dbname=bookshop";
    $dbusername = "root";
    $dbpassword = "";

    try {
        // pdo: php-data-object
        $pdo = new PDO($dsn, $dbusername, $dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection Failed " . $e->getMessage();
        
    } 
    return $pdo; // Return the PDO instance
}


// Template header, feel free to customize this
function template_header($title)
{
    echo <<<EOT
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>$title</title>
            <link href="style.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        </head>
        <body>
            <header>
                <div class="content-wrapper">
                    <h1>BookShop Corner</h1>
                    <nav>
                        <a href="index.php">Home</a>
                        <a href="index.php?page=products">Products</a>
                    </nav>
                    <div class="link-icons">
                        <a href="index.php?page=cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </div>
                </div>
            </header>
            <main>
    EOT;
}

// Template footer
function template_footer()
{
    $year = date('Y');
    echo <<<EOT
            </main>
            <footer>
                <div class="content-wrapper">
                    <p>&copy; $year, BookShop Corner</p>
                </div>
            </footer>
        </body>
    </html>
    EOT;
}