var car1={
    model:"VW",
    drivers:["john","mike","kevin"],
    km:78000,
    
    // drive:driveCar, (function listed bellow,and used here without "()")
    
    drive: function(kilometers){
        console.log("I'm driving " + kilometers + " km");
    },
    stopEngine: function(){
        console.log("I'm stoping the engine now");
    },
    startEngine: function(){
        console.log("Starting the engine now");
    },
    listDrivers: function(){
        var drivers=this.drivers;
        for(var i=0;i<drivers.length;i++){
            console.log(drivers[i]);
        }
    }
};

/*function driveCar(){
    code
}
*/

var car2={
    model:"Ford",
    drivers:["johnny","michael","kelvin"],
    km:178000,
    drive: function(kilometers){
        console.log("I'm driving " + kilometers + " km");
    },
    stopEngine: function(){
        console.log("I'm stoping the engine now");
    },
    startEngine: function(){
        console.log("Starting the engine now");
    },
    listDrivers: function(){
        var drivers=this.drivers;
        for(var i=0;i<drivers.length;i++){
            console.log(drivers[i]);
        }
    }
};



// Christmas Homework.
/*

Step1:

Implement a function that will have two parameters : 
type of person(girl,boy,adult) and Santa’s conclusion of this year for that person (good/naughty). 

Knowing that Santa has the following available presents on his bag: 
car, doll, book, socks, stick; 
return from the function the deserved present for that person by applying the following rules:
Good boys should get a car
Naughty boys should get the stick
Good girls should get a doll
Naughty girls should get the stick
Good adults should get a book
Naughty adults should get the boring socks

Step2:

Create an object for each person and add it in a list(array). 
Person object should have the following attributes: 
name,type(girl, boy, adult) and verdict(good, naughty). 
Iterate over the people array and call getPresent function on each one.

*/

  var x1={
    name:"John",
    type:"boy",
    verdict:"good"
    };
    var x2={
    name:"Johnny",
    type:"boy",
    verdict:"naughty"
    };
    var x3={
    name:"Lee",
    type:"girl",
    verdict:"good"
    };
    var x4={
    name:"Angela",
    type:"girl",
    verdict:"naughty"
    };
    var x5={
    name:"Mark",
    type:"adult",
    verdict:"good"
    };
     var x6={
    name:"Serena",
    type:"adult",
    verdict:"naughty"
    };
    var x7={
    name:"Michael",
    type:"boy",
    verdict:"good"
    };
    
    var people=[x1,x2,x3,x4,x5,x6,x7];
    
function getPresent(typeOfPerson,verdict){
    
     var presents=["car","doll","book","socks","stick"];
    for(var i=0;i<people.length;i++){
        for(var j=0;j<presents.length;j++){
        if(typeOfPerson==="boy" && verdict==="good"){
        return presents[i];
            }  
        else if(typeOfPerson==="girl" && verdict==="good"){
        return presents[1];
            }  
        else if(typeOfPerson==="boy" && verdict==="naughty"){
        return presents[4];
            } 
        else if(typeOfPerson==="girl" && verdict==="naughty"){
        return presents[4];
            }  
        else if(typeOfPerson==="adult" && verdict==="good"){
        return presents[2];
            }  
        else if(typeOfPerson==="adult" && verdict==="naughty"){
        return presents[4];
            }    
    } 
} 
}

console.log(getPresent("girl","good"));


