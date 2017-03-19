export class Event {
	id: number;
	title: string ='';
	name: string ='';
	details: string ='';
	
	completed: boolean= false;
	
	constructor(values: Object={}) {
		Object.assign(this,values);
	}
}
