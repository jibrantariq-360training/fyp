<?php

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
    
    $this->logger->info("fetching event by id start ");	

    $event = App\Event::find($args['id']);

    $this->logger->info("Getting user : ".$event);

    return $response
    		->withStatus(200)
    		->withJson(($event));
});

$app->post('/events', function ($request, $response, $args) {
     $this->logger->info("Post Event Fire ");       

     $json = $request->getParsedBody();
     $event = App\Event::create($json);

     $this->logger->info("Post Event Ends "+$event->id+" is created");       
     return $response
    		->withStatus(200)
            ->withJson(( $event ));
            
});

$app->delete('/events/{id}', function ($request, $response, $args) {
     $this->logger->info("Delete Event Fire ");          	 
        
     $event = App\Event::find($args['id']);
     $event->delete();
     return $response
    		->withStatus(200)
    		->withJson(($event)); 
});

$app->put('/events/{id}', function ($request, $response, $args) {
    $this->logger->info("Update Event Fire ");               
   	$json = $request->getParsedBody();
    $event = App\Event::find($args['id'])->update($json);

   	 return $response
    		->withStatus(200)
    		->withJson(($event));
});