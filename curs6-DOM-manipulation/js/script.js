
//1.Inline function
window.addEventListener("load",function(){
    console.log("DOM is fully loaded here");
    //all JS code should go here
});

//2.function name
window.addEventListener("load",onHtmlLoaded);

function onHtmlLoaded(){
    console.log("[onHtmlLoaded]: The page was loaded");
    //all JS code should go here
    var h2Elem= document.getElementById("page_title");
    var p1Elem= document.getElementsByClassName("content-text");
    //find element by tagName.
    var p1ElemByTag= document.getElementsByTagName("p");
    console.log(h2Elem);
    console.log(p1Elem);
    console.log(p1ElemByTag);
    
    var h2Text = h2Elem.innerHTML;
    console.log(h2Text);
    
    var p1Text= p1ElemByTag[0].innerHTML;
    console.log(p1Text);
    
   var h2Value= h2Elem.getAttribute("data-value");
   console.log(h2Value);
   
   //set text to an HTML node
   h2Elem.innerHTML="New title";
   
   //set new value for data-value attribute
   h2Elem.setAttribute("data-value","new data value text");
   
   //set CSS
   h2Elem.style.color="red";
   //add/remove CSS classes
  var p1Classes= p1ElemByTag[0].classList;
  p1Classes.add("color-green");
  
  p1Classes.remove("p1");
  
  //remove nodes
  
  //first find the parent for the element to be removed
  var sectionElem= document.getElementById("section_1");
  
  //find the element you want to remove
  var toRemoveElem=document.getElementById("to_be_removed");
 
  //remove the element
  sectionElem.removeChild(toRemoveElem);
  
  //add DOM node
  //create the new HTML element
  var newElem=document.createElement("nav");
  newElem.classList.add("menu");
  newElem.innerHTML="This is navigation menu";
  //find the parent where we want to append the new element
  var bodyElem=document.getElementsByTagName("body")[0];
  
  bodyElem.appendChild(newElem);
  
  //listen to click events
  var btnElem=document.getElementById("btn");
  btnElem.onclick=function(ev){
      h2Elem.style.color="pink";
      //"this"will refer to the element that was clicked.
      this.classList.toggle("color-green");
  };
  
}

