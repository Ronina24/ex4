<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Php login</title>
    </head>
    <body>
        <section>
           <h1> Welcome</h1>
            <?php
                $username = $_GET["fName"];
                $password = $_GET["pass"];
                $apples = $_GET["apple"];
                
                if ($username == "Roni" && $password == "123456") {

                    echo "<h2> Hello user " . $username . "</h2>";
                    echo "<h2> Date and Time is: " . date("D M j Y G:i:s") . "</h2><br>";

                    if ($apples==0){
    
                        echo "<h3> An apple a day keeps the doctor away!<br>Go ahead and eat some apples</h3>";
    
                    } else if ($apples>0) {
    
                        echo "<h3> Great! You ate $apples apples today!</h3>";
    
                    } else { echo "<h3>Don't full me, you cannot eat minus apples!</h3>";}

                } else {

                    echo "<h2>Who are you ?! You can't get in</h2>";

                }


            ?>

        </section>

    </body>

</html>