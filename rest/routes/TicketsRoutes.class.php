<?php
require_once '../dao/TicketsDao.class.php';
Flight::register('ticketsdao', 'TicketsDao');

// Prints person Table
Flight::route('GET /get/tickets', function(){
    Flight::json(Flight::ticketsdao()->getAllFromTable());
});
Flight::route('GET /tickets/@id', function($id){
    Flight::json(Flight::ticketsdao()->getByID($id));
  });
// Adds Person to person table
Flight::route('POST /add/tickets', function(){
    Flight::json(Flight::ticketsdao()->add(Flight::request()->data->getData()));
});

// Updates person
Flight::route('PUT /update/tickets/@id', function($id){
    Flight::ticketsdao()->update($id, Flight::request()->data->getData());
});

// Deletes person by id
Flight::route('PUT /delete/tickets/@id', function($id){
    Flight::ticketsdao()->deleteByID($id);
});

?>