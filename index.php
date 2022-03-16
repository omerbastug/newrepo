<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';
require_once ('/rest/dao/dao.class.php');

echo "hello world";

$dao = new MoviesDao();
$op = $_REQUEST['op'];
switch ($op) {
    case 'insert':
      $descriptionn = $_REQUEST['descriptionn'];
      $created = $_REQUEST['created'];
      $dao->add($descriptionn, $created);
      break;
  
    case 'delete':
      $id = $_REQUEST['id'];
      $dao->delete($id);
      echo "DELETED $id";
      break;
  
    case 'update':
      $id = $_REQUEST['id'];
      $description = $_REQUEST['descriptionn'];
      $created = $_REQUEST['created'];
      $dao->update($id, $descriptionn, $created);
      echo "UPDATED $id";
      break;
  
    case 'get':
    default:
      $results = $dao->get_all();
      print_r($results);
      break;
  }
?>