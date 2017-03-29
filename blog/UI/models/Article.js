function Article(options)
{
    this.id = options.id;
    this.title = options.title;
    this.category = options.category || "default topic";
    this.content = options.content;
    this.date = options.date || new Date();
}
Article.prototype.save = function(articleData) {
	//here we should save the new article to server
}
Article.prototype.update = function(data)
{
    //here we save data to server.
    //do an Ajax request or save it in local storage.
};
function Article(options)
{
    this.id=options.id;
    this.title=options.title;
    this.category=options.category || "default topic";
    this.content=options.content;
    this.date=options.date || new Date();
}
Article.prototype.save=function(articleData){};
Article.prototype.update=function(data);

//git modify
