
/* add code here  */

onload = function(e){


var elements1 =  document.querySelectorAll(".hilightable");

for (var i = 0, element; element = elements1[i++];) {
		element.addEventListener("blur",function(elem){blurred(elem)},true);
		element.addEventListener("focus",function(elem){focused(elem)},true);
	
};

var elements2 =  document.querySelectorAll(".required");

for (var j = 0, element; element = elements2[j++];) {
		element.addEventListener("change",function(elem){release(elem)},true);
		element.addEventListener("click",function(elem){release(elem)},true);
	};
 
var elements3 = document.querySelectorAll("form");

for (var k = 0, element; element = elements3[k++];) {
		element.addEventListener("submit",function(elem){return validateForm(elem)},true);
		element.addEventListener("reset",function(elem){clearset(elem)},true);
	};
};

function release(elem){
	elem.target.classList.remove("error");
}

function focused(elem){
	
	elem.target.classList.add("highlight");
	
	
}

function blurred(elem){
	elem.target.classList.remove("highlight");
	
}

function validateForm(elem){

console.log(elem.target);

var elements = elem.target.elements;

for (var i = 0, element; element = elements[i++];) {
    if (element.classList.contains("required") == true && element.value === ""){
        element.classList.add("error");
        elem.preventDefault();
	
	}
}

}

function clearset(elem){
	
var elements = elem.target.elements;
console.log(elem.target);
for (var i = 0, element; element = elements[i++];) {
		element.classList.remove("error");
}

}
