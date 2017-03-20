import { Injectable } from '@angular/core';
import { Http, Response, Headers, RequestOptions } from '@angular/http';
import {Observable} from 'rxjs/Rx';
import {Event} from '../model/event';


@Injectable()
export class EventDataService {
	
	lastId: number = 0;
	private url = 'http://vowme-rest/events'; 


 	constructor (private http: Http) {

 		

 	}


 	getEventById(id:number): Observable<Event[]> {
 		return this.http
 				   .get(`${this.url}/${id}`)
 				   .map((res:Response) => res.json())
 				   .catch( (error:any) => Observable.throw(error.json().error || 'Server error') );
 	}

	addEvent(body: Event): Observable<Event[]> { 
   	 let bodyString = JSON.stringify(body);
		return this.http.post(this.url, body) 
                         .map((res:Response) => res.json()) 
                         .catch((error:any) => Observable.throw(error));
		
	}

	deleteEventById(id:number): Observable<Event[]> {
		return this.http.delete(`${this.url}/${id}`) 
                         .map((res:Response) => res.json()) 
                         .catch((error:any) => Observable.throw(error.json().error || 'Server error'));
	}

	updateEventById(id:number, body: Object = {}): Observable<Event[]>{
		let bodyString = JSON.stringify(body);
		return this.http.put(`${this.url}/${body['id']}`, body) 
                         .map((res:Response) => res.json()) 
                         .catch((error:any) => Observable.throw(error.json().error || 'Server error'));
	}

	getAllEvents() : Observable<Event[]> {
		return this.http
 				   .get(this.url)
 				   .map((res:Response) => res.json())
 				   .catch( (error:any) => Observable.throw(error.json().error || 'Server error') );
	}

	dummyTestEventComplete(event:Event){
		
		
	}

}
