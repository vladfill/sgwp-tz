<?php
ini_set( "display_errors", true );
date_default_timezone_set( "Europe/Kiev" );  
define( "DB_DSN", "mysql:host=localhost;dbname=cms" );
define( "DB_USERNAME", "root" );
define( "DB_PASSWORD", "" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "HOMEPAGE_NUM_ARTICLES", 1 );
define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "mypass" );
require( CLASS_PATH . "/Article.php" );

function handleException( $exception ) {
  echo "Произошла ошибка, попробуйте зайти позже";
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
?>
