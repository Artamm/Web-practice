<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap-grid.css">
    <link rel="stylesheet" href="style_.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Artamm page</title>
</head>
<body class="container-fluid">

<div class="row wrapper justify-content-center">

    <div class="col-md-4"style="background-color: #0c5460">
        <div class="desc" >
            <div id="logo">Artamm <br>
                Works</div>
            <div class="navbar">
                <a href="https://github.com/Artamm">Home</a>
                <a href="#">C# Practice</a>

            </div>
            <div class="fill-form">


                <form action="index.php" id="questions" method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: column; max-width: 700px" >
                    <H2>Have Questions?</H2>

                    <input type="text" placeholder="Name" required>
                    <input type="email" placeholder="E-mail adress" required>
                    <textarea rows="4" cols="50" name="question" form="questions" placeholder="Describe your question here..."> </textarea>
                    <input id ="submit"  type="submit" >


                </form>

            </div>
        </div>
    </div>
    <div class="col-md-8" style="margin-top:10px;">

        <div class="row">
            <div class="col-md-4 justify-content-center">
                <a class= "img-link" href="https://artamm.github.io/Pages/FirstExample/Socket.html"> <img  src="11.jpg"></a>
            </div>
        </div>
    </div>
</div>
<div class="push"></div>
<footer>2018 </footer>


</body>
</html>

<?php
$name=$_POST['Name'];
$email=$_POST['email'];
$message=$_POST['question'];

$mymail="tiuxw@yandex.ru";
mail($mymail,'Subject',$message);
