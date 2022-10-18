<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Reservation Page - Walnut Ridge Wedding Rentals</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <header>
            <a href="https://blueteam2022.greenriverdev.com/Wedding_Website/Main/">
                <img alt="logo img" id="theLogo" src="logo.png"></a>
        </header>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Reserve Page</h1>
                </div>
            </div>


         <!-- print out previously selected info using php -->
        <?php


        ?>

            <!-- collect personal info and submit to vardump -->
            <div id="reserve" ">
                <em>Please fill out the following to reserve your order:</em>
            </div>
            <form class="center" action="vardump.php" method="post">
                <label for="fname">First name*:</label><br>
                <input type="text" id="fname" name="fname" placeholder="Please provide your first name"><br>
                <label for="lname">Last name*:</label><br>
                <input type="text" id="lname" name="lname" placeholder="Please provide your last name"><br>
                <label for="email">Email*:</label><br>
                <input type="text" id="email" name="email" placeholder="Please provide your email address"><br>
                <label for="phone">Phone*:</label><br>
                <input type="text" id="phone" name="phone" placeholder="Please provide your phone number"><br>
                <br><input type="submit" id="button">
            </form>


    </body>
</html>