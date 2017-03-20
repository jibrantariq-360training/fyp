export class Event {
	id: number;
	startdate : string ='';
	name: string ='';
	details: string ='';
	enddate: string ='';
	complete: boolean = false;

	constructor(values: Object={}) {
		Object.assign(this,values);
	}
}
