<html>
    <body>
        
    <a href="/lessons">BACK</a>
    <br/>
    <h1>Lesson 4</h1>
    <?php
    echo"<h3> Braces and If statement</h3>";
    echo "<h5>No Braces</h5>";

    if(3 == 2 + 1)
        print("Good - I haven't totally lost my mind.<br>");
        echo"<h5> With Braces</h5>";
    if(3 == 2 + 1)  {
        print("Good - i haven't totally ");
        print("lost my mind.<br>");
    }
    ?>
    </body>
</html>