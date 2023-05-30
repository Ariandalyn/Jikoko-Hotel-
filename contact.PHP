<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/contact.css">

</head>

<body>
    <div class="wrapper">
        <?php include_once('inc/header.php'); ?>
        <div class="contact">
            <h1 class="center jumbo" style="text-align: center;">Contact</h1>
            <p>Find us at Kahawa West!</p>
            <p><span class="tag">FYI!</span> We offer full-service catering for any event, large or small. We
                understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both
                look and taste.</p>
            <title class="center" style="text-align: center;">Contact Form</title>

            <footer class="center black padding-48 xxlarge"><br>
                <p class="center" style="text-align: center;">Thank you! visit us again</p>
                <p class="center" style="text-align: center;">@2023 All Rights Reserved.| Design by Jikoko Hotel.</p>

                <form id="fcf-form-id" class="fcf-form-class" method="post" action="contact-form-process.php"></form>
                <style>
                    .position:absolute;
                    .bottom: 100;
                    .width: 100%;
                    .height: 100px;
                    .display:centre;
                    .align-items:centre;
                </style>
                <!-- Add icon library -->
                <link rel="stylesheet"
                    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


                <!-- Add font awesome icons -->
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <style>
                    .fa {
                        padding: 20px;
                        font-size: 30px;
                        width: 50px;
                        text-align: center;
                        text-decoration: none;
                        text-decoration: none;
                        border-radius: 50%;
                    }

                    .fa:hover {
                        opacity: 0.7;
                    }


                    .fa-facebook {
                        background: #3B5998;
                        color: white;
                    }

                    .fa-twitter {
                        background: #55ACEE;
                        color: white;
                    }
                </style>
                <marquee behavior="scroll" direction="up">
                    <img src="img/stick.jpeg" alt="Hotel" style="width:50%">
                </marquee>
                <marquee behavior="scroll" direction="left">
                    <img src="img/sticker.jpeg" alt="Hotel" style="width:50%">

                </marquee>

            </footer>


            <script>
                // Tabbed Menu
                function openMenu(evt, menuName) {
                    var i, x, tablinks;
                    x = document.getElementsByClassName("menu");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablink");
                    for (i = 0; i < x.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" red", "");
                    }
                    document.getElementById(menuName).style.display = "block";
                    evt.currentTarget.firstElementChild.className += "red";
                }
                document.getElementById("myLink").click();
            </script>

</body>



</html>