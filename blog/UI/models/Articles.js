/*global Article*/
/*global localStorage*/

function Articles()
{
   this.models=[]; 
}
Articles.prototype.findArticleById= function(id)
{
    var result;
    for(var i=0;i<this.models.length;i++)
    {
        if(this.models[i].id==id)
        {
            result=this.models[i];
        }
    }
    return result;
};

Articles.prototype.getAll = function()
{
    //get all article items from server/localStorage.
    var articlesStr=localStorage.getItem("articles");
    var articles=JSON.parse(articlesStr);
    if (articles) 
    {
		for (var i=0; i<articles.length; i++) 
		{
			var article = new Article(articles[i]);
			this.models.push(article);
		}

		console.log(articles);
		console.log(this.models);
	}
}

Articles.prototype.removeArticle = function(articleId) 
{
	//here we will search for article model by id
	//and we remove it from models array and from 
	//server/localStorage
}


