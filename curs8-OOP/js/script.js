//constructor function

function Car(options){
    this.brand = options.brand || "";
    this.owners = options.owners || [];
    this.color = options.color || "";
    this.nrOfKm = options.km || 0;
}
//class methods
Car.prototype.drive = function(km){
    this.nrOfKm = this.nrOfKm + km;
    //this.nrOfKm += km;
    console.log("i'm driving " + km + " kilometers");
};
Car.prototype.startEngine = function(){
    console.log("Starting engine for " + this.brand);
    console.log("Current number of kilometers " + this.nrOfKm);
};
Car.prototype.stopEngine = function(){
    console.log("Stoping engine at" + this.nrOfKm);
};

var car1 = new Car({
    brand:"Vw",
    owners:["John","Ana"],
    color:"red",
    km:5000
});

var carOptions={
    brand:"Ford",
    km:10000
}
var car2= new Car(carOptions);

var car3= new Car({
    brand:"Bmw",
    color:"black"
});

//class comment

function Comment(options){
    this.content = options.content || "";
    this.author = options.author || "";
    this.timeStamp = options.timeStamp || "";
}
Comment.prototype.saveComment = function(commentData){
    console.log(commentData);
};
var comment1 = new Comment({
    content:"abc",
    author:"John",
    timeStamp:new Date()
});