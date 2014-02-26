
$(document).ready(function() {function say_hello(){
	alert("hello");
}

var button1 = document.getElementById("test");
console.log(button1);

button1.addEventListener("click", say_hello, false);
    
say_hello();


});
