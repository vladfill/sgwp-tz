<?php

require( "config.php" );
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";

if(isset($_POST['newPage'])){
  $action = $_POST['newPage'];
  $page = (int)$_POST['page'];
  $start = $page * HOMEPAGE_NUM_ARTICLES - HOMEPAGE_NUM_ARTICLES;
}

switch ( $action ) {
  case 'archive':
    archive();
    break;
  case 'viewArticle':
    viewArticle();
    break;
  case 'about':
    require( TEMPLATE_PATH . "/about.php" );
    break;
  case 'contacts':
    require( TEMPLATE_PATH . "/contacts.php" );
    break;
  case 'newPage':
    newPage($start);
    break;
  default:
    homepage();
}

function archive() {
  $results = array();
  $data = Article::getList();
  $results['articles'] = $data['results'];
  $results['totalRows'] = $data['totalRows'];
  $results['pageTitle'] = "Article Archive | Widget News";
  require( TEMPLATE_PATH . "/archive.php" );
}

function viewArticle() {
  if ( !isset($_GET["articleId"]) || !$_GET["articleId"] ) {
    homepage();
    return;
  }

  $results = array();
  $results['article'] = Article::getById( (int)$_GET["articleId"] );
  $results['pageTitle'] = $results['article']->title . " | Widget News";
  require( TEMPLATE_PATH . "/viewArticle.php" );
}

function newPage($page){
  $results = array();
  $data = Article::getList( HOMEPAGE_NUM_ARTICLES , $page );
  $results['articles'] = $data['results'];
  $results['totalRows'] = $data['totalRows'];
  $results['pageTitle'] = "Widget News";
  require( TEMPLATE_PATH . "/newPage.php" );
}

function homepage() {
  $results = array();
  $data = Article::getList( HOMEPAGE_NUM_ARTICLES );
  $results['articles'] = $data['results'];
  $results['totalRows'] = $data['totalRows'];
  $results['pageTitle'] = "Widget News";
  require( TEMPLATE_PATH . "/homepage.php" );
}

?>
