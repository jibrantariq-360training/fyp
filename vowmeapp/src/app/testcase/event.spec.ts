import {Event} from '../model/event';

describe('Event', () => {
  
  it('should create an instance', () => {
    expect(new Event()).toBeTruthy();
  });

  it('should accept values in the constructor', () => {
    let event = new Event({
      title: 'hello',
      complete: true
    });
    expect(event.title).toEqual('hello');
    expect(event.completed).toEqual(true);
  });

});
