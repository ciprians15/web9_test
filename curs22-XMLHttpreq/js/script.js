/*global $*/
$(document).ready(onHtmlLoaded);

function onHtmlLoaded()
{
    var req = new XMLHttpRequest();
    req.open("GET", "https://jsonplaceholder.typicode.com/posts");
    req.addEventListener("load", displayPosts);
    req.send();
    console.log(req);

//
//displayPosts(req.response);

    function displayPosts()
    {
        var posts=JSON.parse(this.response);
        var postsContainer= $("#posts");
        for(var i=0; i<posts.length;i++)
        {
        postsContainer.append("<li>" + posts[i].title + "</li>");
        }
    }
    
    addArticle();
  
    function addArticle()
    {
        var response= JSON.parse(this.response);
        if(response.error)
        {
            return false;
        }
        var articleData = 
        {
            //prepare data to send to server
            title:"New title",
            content:"test content",
            user_id:1,
            category_id:1
        }
        var req= new XMLHttpRequest();
        req.open("POST","https://web-development-ciprian15.c9users.io/blog/curs21-php-API/articles/add");
        req.setRequestHeader("Content-type","application/json");
        //convert to string the data before sending it to the server.
        var strArticleData = JSON.stringify(articleData);
        //send the request to the server with the stringified data.
        req.send(strArticleData);
    }
    
     login();
    
    function login()
    {
        // prepare the data to send to the server
        var userData = {
            //my email and pass !!
            email:"simionov.ciprian@gmail.com",
            pass:"123456"
        }
        var req = new XMLHttpRequest();
        req.open("POST","https://web9-siitwebcluj.c9users.io/curs21-PHP-API/login");
        req.setRequestHeader("Content-type","application/json");
        //listen when login request is done
        req.addEventListener("load", addArticle);
        // convert to string the data before sending it to the server
        var strUserData = JSON.stringify(userData);
        // send the request to the server with the stringified data
        req.send(strUserData);
    }
}