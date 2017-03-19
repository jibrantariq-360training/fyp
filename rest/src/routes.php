<?php
// Routes

$app->get('/events', function ($request, $response, $args) {
    
    $this->logger->info("get('/[{id}]') start ");
    $this->logger->info("fetching all events start ");	

    $events = App\Event::all();

    $this->logger->info("Getting data : ".$events);
	$this->logger->info("fetching all events end ");
	$this->logger->info("get('/[{id}]') end ");

    return $response
    		->withStatus(200)
    		->withJson(($events));
});

$app->get('/events/{id}', function ($request, $response, $args) {
    
    $this->logger->info("fetching all events start ");	

    $event = App\Event::find($args['id']);

    $this->logger->info("Getting data : ".$event);
	

    return $response
    		->withStatus(200)
    		->withJson(($event));
});

$app->post('/events', function ($request, $response, $args) {
	$events = App\Event::all();
     return $response
    		->withStatus(200)
    		->withJson(($events));
});

$app->delete('/events/{id}', function ($request, $response, $args) {
   	$events = App\Event::all();
   	 return $response
    		->withStatus(200)
    		->withJson(($events)); 
});

$app->put('/events/{id}', function ($request, $response, $args) {
   	$events = App\Event::all();
   	 return $response
    		->withStatus(200)
    		->withJson(($events));
});
