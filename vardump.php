<html>
    <head>
        <title>Vardump</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="vardump_styles.css">
    </head>


    <body>
        <header>
            <a href="https://blueteam2022.greenriverdev.com/Wedding_Website/Main/">
                <img alt="logo img" id="theLogo" src="logo.png"></a>
        </header>

        <?php echo '<h1>Confirmation Page</h1>'; ?>
        <?php
        echo '<em>Name: </em>';
        echo $_POST['fname'].' ';
        echo $_POST['lname'];


        ?>


    </body>
</html>