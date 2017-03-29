/*global $*/
//GET
var config = {
    url: "https://jsonplaceholder.typicode.com/posts",
    method: "GET",
    dataType: "json",
    success: function(resp){
        console.log(resp);
    },
    error: function(xhr, status, error) {
        alert("Oops!Something is wrong " + error);
    },
    complete: function(){
        console.log("The request is complete");
    }
}

$.ajax(config);

//POST
var config = {
    url: "https://web9-siitwebcluj.c9users.io/curs21-PHP-API/login",
    method: "POST",
    data:{
        email:"simionov.ciprian@gmail.com",
        pass:"123456"
    },
    dataType: "json",
    success: function(resp){
        console.log(resp);
    },
    error: function(xhr, status, error) {
        alert("Oops!Something is wrong " + error);
    },
    complete: function(){
        console.log("The request is complete");
    }
}
var jqXHRObj = $.ajax(config);
console.log(jqXHRObj);