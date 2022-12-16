<!DOCTYPE HTML>
<html>
<body bgcolor="lightpink">
    <center><h2>Welcome to Shwetha Library</h2></center>
    <br>
 
    <?php
        include("DBConnection.php");
 
        $isbn=$_POST["isbn"];
        $title=$_POST["title"];
        $author=$_POST["author"];
        $edition=$_POST["edition"];
        $publication=$_POST["publication"];
 
        $query = "insert into book_info(isbn,title,author,edition,publication) values('$isbn','$title','$author','$edition','$publication')"; 
        $result = mysqli_query($db,$query);
    ?>
    <h3> Book information is inserted successfully </h3>
 
    <a href="SearchBooks.php"> To search for the Book information click here </a>
 
</body>
</html>