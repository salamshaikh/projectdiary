message = "in global";
console.log("global: message = " + message);

a = function () {
	   //var message = "inside a";
	   console.log("a: message = " + message);
	   function b () {
	    // message="inside b";
	    console.log("b: message = " + message); 
	  }

	b();
 }

a();