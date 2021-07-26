<?php
/**
 * Simple Bookstore API
 * @version 1.0.0
 */
echo 'a'. __DIR__;die();
require_once __DIR__ . '/../vendor/autoload.php';

$app = new Slim\App();


/**
 * POST addBook
 * Summary: Add a new book to the store
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
$app->POST('/grze.musz/LivespaceBookstore/1.0.0/book', function($request, $response, $args) {
            
            
            
            $body = $request->getParsedBody();
            $response->write('How about implementing addBook as a POST method ?');
            return $response;
            });


/**
 * GET getBookByISBN
 * Summary: Find book by ISBN
 * Notes: Returns a single book
 * Output-Formats: [application/json, application/xml]
 */
$app->GET('/grze.musz/LivespaceBookstore/1.0.0/book/{bookISBN}', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getBookByISBN as a GET method ?');
            return $response;
            });


/**
 * PUT updateBook
 * Summary: Update an existing book
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
$app->PUT('/grze.musz/LivespaceBookstore/1.0.0/book', function($request, $response, $args) {
            
            
            
            $body = $request->getParsedBody();
            $response->write('How about implementing updateBook as a PUT method ?');
            return $response;
            });


/**
 * GET getBooks
 * Summary: Returns a list of books
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
$app->GET('/grze.musz/LivespaceBookstore/1.0.0/books', function($request, $response, $args) {
            
            $queryParams = $request->getQueryParams();
            $limit = $queryParams['limit'];    $offset = $queryParams['offset'];    
            
            
            $response->write('How about implementing getBooks as a GET method ?');
            return $response;
            });



$app->run();
