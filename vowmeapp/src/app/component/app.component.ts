import { Component, OnInit } from '@angular/core';
import { EventDataService } from '../services/event-data.service'
import { Event } from '../model/event'


@Component({
  selector: 'app-root',
  templateUrl: '../html/app.component.html',
  styleUrls: ['../css/app.component.css'],
  providers: [EventDataService]
})
export class AppComponent implements OnInit{
  
  newEvent: Event = new Event();
  events: any[] = [];
  constructor(private eventDataService : EventDataService){ 
  }

  addEvent(){
  	this.eventDataService.addEvent(this.newEvent).subscribe(_event => this.events.push(_event), 
                                                            err => {console.log(err);}
                                                           );
    this.newEvent = new Event();
  }

  toggleTodoComplete(event: Event){
  	this.eventDataService.dummyTestEventComplete(event);
  }

  removeEvent(event: Event){
  	this.eventDataService.deleteEventById(event.id).subscribe(
                                                              _event => this.events = 
                                                              this.events
                                                              .filter(__event => __event.id !== event.id)
                                                             );
    ;
    
  }

  getEvents(){
   this.eventDataService.getAllEvents().subscribe(
                               events => this.events = events,
                                err => {
                                    console.log(err);
                                });
                               
  }

  ngOnInit(){
    this.getEvents();
  }

}
