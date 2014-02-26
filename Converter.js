var Converter = (function () {

 // private stuff goes here

 return {

 convertFromImperialToMetric: function (weight) {
 	var num parseInt(weight);

 	if(isNaN(num) == true) {
 		throw new Error ("not a number");
 	}
 	num = num / converterValue;
 	return Math.round(num);

 },

 convertFromMetricToImperial: function (weight) {

 }
 	return weight/converterValue;

 }

})();