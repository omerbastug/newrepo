<?php
require_once 'C:\Bitnami\wampstack-8.1.2-0\apache2\htdocs\cinemaProject\rest\services\PersonService.class.php';
Flight::register('persondao', 'PersonService');

// Prints person Table
Flight::route('GET /get/person', function(){
    Flight::json(Flight::persondao()->getAllFromTable());
});

Flight::route('GET /get/person/@id', function($id){
    Flight::json(Flight::persondao()->getByID($id));
  });

Flight::route('GET /get/isaperson/@email', function($email){
   Flight::json(Flight::persondao()->IsAperson($email));
 });
// Adds Person to person table
Flight::route('POST /add/person', function(){
    Flight::json(Flight::persondao()->add(Flight::request()->data->getData()));
});

// Updates person
Flight::route('PUT /update/person/@id', function($id){
    Flight::persondao()->update($id, Flight::request()->data->getData());
});

// Deletes person by id
Flight::route('PUT /delete/person/@id', function($id){
    Flight::persondao()->deleteByID($id);
});


?>