/*
     List your colleagues dynamically from JS:
- Create a variable (array) with all your colleagues names
- Iterate over the array and append a li element for each one of them , 
in the container (the ul element).
After the script is loaded all your colleagues names should be listed.
*/
window.addEventListener("load",onHtmlLoaded);

function onHtmlLoaded()
{
    var colleagues=["spanu sorin","simionov ciprian","valenas sergiu","sebastian stan","dascal rares","paul somlea","ciprian biscovan"];
   for(var i=0;i<colleagues.length;i++)
   {
    var listElem=document.createElement("li");
    //var textListElem=document.createTextNode(colleagues[i]);
    //listElem.appendChild(textListElem);
    listElem.innerHTML=colleagues[i];

    //var bodyElem=document.getElementsByTagName("body")[0];
    //bodyElem.appendChild(listElem);
    var ulElem=document.getElementsByClassName("js-users-list")[0];
    ulElem.appendChild(listElem);



   }
    

}



