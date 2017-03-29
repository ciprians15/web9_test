//1.Inline function
/*global $*/
// $(document).ready(function(){
//    console.log("Dom is loaded here");
//    all js code should be placed here
//});

//2.Function name
$(document).ready(onHtmlLoaded);

function onHtmlLoaded(){
    console.log("Dom is loaded here");
    //all js code should be placed here
    
    // find element by id
    var sectionElem = $("#section_1");
    console.log(sectionElem);
    
    //find element by className
    var classElements=$(".content-text");
    console.log(classElements);
    
    //find element by attribute
    var emailInput = $("input[type = 'email']");
    console.log(emailInput);
    
    var passInput= $("input[name = 'password']");
    console.log(passInput);
    
    //CSS like selector
    //search for p element with content-text class inside a
    //section element with id= section_1.
    
    var pContentElement= $("#section_1 p.content-text");
    console.log(pContentElement);
    
    //get inner Html
    var h2Elem= $("h2");
    var h2Content= h2Elem.html();
    console.log("h2Elem text: "+ h2Content);
    
    //get attribute value
    var h2DataValue = h2Elem.attr("data-value");
    console.log(h2DataValue);
    
    //set innerHtml
    h2Elem.html("new h2 content");
    
    //set attribute 
    h2Elem.attr("data-value","random data value");
    
    //add click event listener
    $("#btn").on("click",onBtnClicked);
    
    function onBtnClicked(){
        h2Elem.toggleClass("text-red");
        
    }
}