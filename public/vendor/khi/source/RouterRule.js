Khi.RouterRule=function(validator, callback)
{


	this.validator=validator;
	this.callback=callback;

}


Khi.RouterRule.prototype.execute=function(requestObject) {

	if(this.validator(requestObject)) {
		return this.callback(requestObject);
	}
}