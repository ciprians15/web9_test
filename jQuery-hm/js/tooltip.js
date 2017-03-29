/*global $*/

//code goes here

//!hint:
//On mouseover on the element with id = "tooltip" toggle "hide" 
//css class on the element with class "info".
//Hint no#2
//on mouseenter
    //-remove class 'hide'
    //-add class 'show'
//on mouseleave
    //-remove class 'show'
    //-add class 'hide'

$(document).ready(onHtmlLoaded);

function onHtmlLoaded()
{
//var 1
var visibleIconElem = $("#tooltip");
var infoElement=$(".info");
visibleIconElem.on("mouseenter",function()
    {
    infoElement.removeClass("hide");
    infoElement.addClass("show");
    });   
visibleIconElem.on("mouseleave",function()
    {
    infoElement.removeClass("show");
    infoElement.addClass("hide");
    });
//var 2
/*
visibleIconElem.on("mouseenter",function()
    {
    infoElement.toggleClass("hide");
    })
visibleIconElem.on("mouseleave",function()
    {
    infoElement.toggleClass("hide");    
    })*/
}
    


