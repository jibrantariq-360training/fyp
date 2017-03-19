import { TestBed, inject } from '@angular/core/testing';

import { EventDataService } from '../services/event-data.service';

import { Event } from '../model/event';

describe('EventDataService', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [EventDataService]
    });
  });

  it('should ...', inject([EventDataService], (service: EventDataService) => {
    expect(service).toBeTruthy();
  }));

  /* describe('#getAllEvents()', () => {
	it('should return an empty array by default', inject([EventDataService], (service: EventDataService) => {
      expect(service.getAllEvents()).toEqual([]);
    }));

    it('should return all Events', inject([EventDataService], (service: EventDataService) => {
      let event1 = new Event({title: 'Hello 1', complete: false});
      let event2 = new Event({title: 'Hello 2', complete: true});
      service.addEvent(event1);
      service.addEvent(event2);
      expect(service.getAllEvents()).toEqual([event1, event2]);
    }));

  	});

  describe('#save(Event)', () => {

    it('should automatically assign an incrementing id', inject([EventDataService], (service: EventDataService) => {
      let event1 = new Event({title: 'Hello 1', complete: false});
      let event2 = new Event({title: 'Hello 2', complete: true});
      service.addEvent(event1);
      service.addEvent(event2);
      expect(service.getEventById(1)).toEqual(event1);
      expect(service.getEventById(2)).toEqual(event2);
    }));

  });

  describe('#deleteEventById(id)', () => {

    it('should remove Event with the corresponding id', inject([EventDataService], (service: EventDataService) => {
      let event1 = new Event({title: 'Hello 1', complete: false});
      let event2 = new Event({title: 'Hello 2', complete: true});
      service.addEvent(event1);
      service.addEvent(event2);
      expect(service.getAllEvents()).toEqual([event1, event2]);
      service.deleteEventById(1);
      expect(service.getAllEvents()).toEqual([event2]);
      service.deleteEventById(2);
      expect(service.getAllEvents()).toEqual([]);
    }));

    it('should not removing anything if Event with corresponding id is not found', inject([EventDataService], (service: EventDataService) => {
      let event1 = new Event({title: 'Hello 1', complete: false});
      let event2 = new Event({title: 'Hello 2', complete: true});
      service.addEvent(event1);
      service.addEvent(event2);
      expect(service.getAllEvents()).toEqual([event1, event2]);
      service.deleteEventById(3);
      expect(service.getAllEvents()).toEqual([event1, event2]);
    }));

  });

  describe('#updateEventById(id, values)', () => {

    it('should return Event with the corresponding id and updated data', inject([EventDataService], (service: EventDataService) => {
      let event = new Event({title: 'Hello 1', complete: false});
      service.addEvent(event);
      let updatedEvent = service.updateEventById(1, {
        title: 'new title'
      });
      expect(updatedEvent.title).toEqual('new title');
    }));

    it('should return null if Event is not found', inject([EventDataService], (service: EventDataService) => {
      let event = new Event({title: 'Hello 1', complete: false});
      service.addEvent(event);
      let updatedEvent = service.updateEventById(2, {
        title: 'new title'
      });
      expect(updatedEvent).toEqual(null);
    }));

  });

  describe('#dummyTestEventComplete(event)', () => {

    it('should return the updated Event with inverse complete status', inject([EventDataService], (service: EventDataService) => {
      let event = new Event({title: 'Hello 1', complete: false});
      service.addEvent(event);
      let updatedEvent = service.dummyTestEventComplete(event);
      expect(updatedEvent.completed).toEqual(true);
      service.dummyTestEventComplete(event);
      expect(updatedEvent.completed).toEqual(false);
    }));

  });*/

});
