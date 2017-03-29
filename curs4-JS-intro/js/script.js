console.log("working");
/*console.log(confirm("Are you sure?"));
console.log(prompt("numele tau?"));*/

// short comment 1 line.

/*long comment
multiple line.
*/
var firstVar;
console.log(firstVar);

firstVar=3;
console.log(firstVar);

firstVar=5;
console.log(firstVar);

var secondVar=10;
var result= firstVar + secondVar;
console.log("Final result is: " + result);

function addNumbers(){
    var x1=5;
    var x2=7;
    console.log(x1 + x2);
}
addNumbers();

function addNumbersWithParameters(x1,x2){
    var result=x1+x2;
    console.log("The result is:" + result);
}
addNumbersWithParameters(1,2);
addNumbersWithParameters(1,9);
addNumbersWithParameters(3,2);

function addNumbersWithReturn(x1,x2){
    return x1+x2;
}
var res=addNumbersWithReturn(10,20);
console.log(res);

function buildStrings(s1,s2){
    return s1+ " " + s2;
    
}
var fullName= buildStrings("Michael","Phelps");
console.log("My name is " + fullName);

var array=["string",2,3.22,["apples","oranges"]];
console.log(array[1]);
console.log(array[0]);
var fruits= array[3];
console.log(fruits[1]);
//console.log(array[3][1]); echivalent.
for(var i=0;i<array.length;i++){
    console.log(array[i]);
}
var array2=[2,3,4,6,7,9];
var prod=1;
for(i=0;i<array2.length;i++){
    
    prod=prod * array2[i];
}
console.log(prod);

// homework
/* function calculator(op,elements){
    ex code
}
calculator("op",[1,2,3]);
*/


