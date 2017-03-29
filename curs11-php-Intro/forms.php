<form method="GET" action="formsdata.php">
    
    <input type="text" name="search"/>
    <input type="text" name="job"/>
    <input type="submit" value="search"/>
    
</form>

<form method="POST" action="formsdata.php">
    <input type="text" name="name"/>
    <input type="text" name="age"/>
    <input type="text" name="job"/>
    <input type="submit" value="submit"/> 
</form>

<form method="POST" action="formsdata.php" enctype="multipart/form-data">
    <input type="text" name="name"/>
    <input type="file" name="file"/>
    <input type="submit" value="submit"/>
</form>