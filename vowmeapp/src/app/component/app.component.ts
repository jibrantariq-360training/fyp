import { Component, OnInit } from '@angular/core';
import { EventDataService } from '../services/event-data.service'
import { Event } from '../model/event'

@Component({
  selector: 'app-root',
  templateUrl: '../html/app.component.html',
  styleUrls: ['../css/app.component.css'],
  
})
export class AppComponent implements OnInit{
  
  newEvent: Event = new Event();
  events: Event[];
  constructor(){ 
  }

  addEvent(){
  /*	this.eventDataService.addEvent(this.newEvent);
    this.events.push(this.newEvent);
  	this.newEvent = new Event();
  */  

  }

  toggleTodoComplete(event: Event){
  	//this.eventDataService.dummyTestEventComplete(event);
  }

  removeEvent(event: Event){
  /*	this.eventDataService.deleteEventById(event.id);
    this.events = this.events.filter(_event => _event.id !== event.id);
  */  
  }

  getEvents(){
   /*this.eventDataService.getAllEvents().subscribe(
                               events => this.events = events,
                                err => {
                                    console.log(err);
                                });;
    */                            
  }

  ngOnInit(){
   // this.getEvents();    
  }

}
