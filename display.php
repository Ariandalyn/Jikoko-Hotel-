<?php
session_start();
require_once "db/config.php";
$errors = [];
$messages = [];

if (isset($_POST['username'], $_POST['password'], $_POST['mobilephone'], $_POST['date'], $_POST['price'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $mobilephone = $_POST['mobilephone'];
    $date = $_POST['date'];
    $price = $_POST['price'];

    $query = "INSERT INTO orderforms (username, password, mobilephone, date, price) VALUES ('$username', '$password', '$mobilephone','$date','$price')";
    if ($conn->query($query)) {
        $message = "Ordering successfull";
        array_push($messages, $message);
    } else {
        $error = "Ordering failed: " . $conn->error;
        array_push($errors, $error);
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jikoko Hotel System Gallery</title>
    <link rel="stylesheet" href="css/index.css">

<body>
    <div class="wrapper">
        <?php include_once('inc/header.php'); ?>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form">


            <div style="width:90%; margin:10px auto;">
                <h2>==========Jikoko Hotel Price list==========</h2>
                <table width="40%" id="alignment">

                    <tr>
                        <th>Food Item</th>
                        <th></th>
                        <th>Price(Ksh.)</th>
                    </tr>
                    <tr>
                        <td>tastybeans</td>
                        <td> - </td>
                        <td>30.00</td>
                    </tr>
                    <tr>
                        <td>tastytea</td>
                        <td> - </td>
                        <td>50.00</td>
                    </tr>
                    <tr>
                        <td>tastychapati</td>
                        <td> - </td>
                        <td>20.00</td>
                    </tr>

                </table><br><br>

                <h>JIKOKO SYSTEM - Order Reciept Form</h1><br><br>
                    <table style="background-color:aquamarine;margin-left: 100px;">
                        <tr>
                            <td>Branch : </td>
                            <td>
                                <select>
                                    <option>--Select Item--</option>
                                    <option>Kahawa west</option>
                                    <option>Kahawa sukari</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Username:</td>
                            <td>
                                <input type="text" name="username">
                            </td>
                        </tr>
                        <tr>
                            <td>Password: </td>
                            <td><input type="password" id="password" name="password"></td>
                        </tr>
                        <tr>
                            <td>mobilephone: </td>
                            <td><input type="mobilephone" id="mobilephone" name="mobilephone"></td>
                        </tr>
                        <td>date: </td>
                        <td><input type="date" id="date" name="date"></td>
                        </tr>

                    </table>
                    <br>
                    <table style="width:80%;margn: 16px auto;" id="alignment">
                        <tr>
                            <th>Food Item</th>
                            <th> </th>
                            <th>Quantity</th>

                        </tr>
                        <tr>
                            <td>Item 1:</td>
                            <td>
                                <select id="item1">
                                    <option value="1">--Select Item--</option>
                                    <option value="tastybeans">tastybeans</option>
                                    <option value="tastytea">tastytea</option>
                                    <option value="tastychapati">tastychapati</option>



                                </select>
                            </td>
                            <td><input type="number" value="0" id="q1"></td>
                            ...
                        </tr>
                        <tr>
                            <td>Item 2:</td>
                            <td>
                                <select id="item2">
                                    <option value="1">--Select Item--</option>
                                    <option value="tastybeans">tastybeans</option>
                                    <option value="tastytea">tastytea</option>
                                    <option value="tastychapati">tastychapati</option>


                                </select>
                            </td>
                            <td><input type="number" value="0" id="q2"></td>
                            ...
                        </tr>
                        <tr>
                            <td>Item 3:</td>
                            <td><select id="item3">
                                    <option value="1">--Select Item--</option>
                                    <option value="tastybeans">tastybeans</option>
                                    <option value="tastytea">tastytea</option>
                                    <option value="tastychapati">tastychapati</option>


                                </select>
                            </td>
                            <td><input type="number" value="0" id="q3"></td>
                            ....
                        </tr>



                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" class="button" value="Create Bill" onclick=createBill()>
                            </td>
                            <td><input type="reset" class="button" value="Clear"></td>
                        </tr>
                    </table>
                    <input type="hidden" name="price" id="price" value="0">
        </form>

        </head>
        </h>
    </div>
</body>



<script>
    function createBill() {
        var item1 = document.getElementById("item1").value;
        var item2 = document.getElementById("item2").value;
        var item3 = document.getElementById("item3").value;
        var form = document.getElementById("form");

        var q1 = parseInt(document.getElementById("q1").value);
        var q2 = parseInt(document.getElementById("q2").value);
        var q3 = parseInt(document.getElementById("q3").value);

        var p1 = 0;
        var p2 = 0;
        var p3 = 0;

        if (item1 == "tastybeans") {
            p1 = 30;
        } else if (item1 == "tastytea") {
            p1 = 50;
        } else if (item1 == "tastychapati") {
            p1 = 20;
        }

        if (item2 == "tastybeans") {
            p2 = 30;
        } else if (item2 == "tastytea") {
            p2 = 50;
        } else if (item2 == "tastychapati") {
            p2 = 20;
        }

        if (item3 == "tastybeans") {
            p3 = 30;
        } else if (item3 == "tastytea") {
            p3 = 50;
        } else if (item3 == "tastychapati") {
            p3 = 20;
        }

        var totalPrice = q1 * p1 + q2 * p2 + q3 * p3;
        document.getElementById('price').value = totalPrice;
        alert("Jikoko Hotel Payment. Dear " + document.getElementsByName("username")[0].value + ", thank you for your order. Your total price is Ksh. " + totalPrice.toFixed(2) + ". Payment method: cash only. Please proceed to payment. Your mobilephone is " + document.getElementById("mobilephone").value);


        //generateReceipt(item1, q1, p1, item2, q2, p2, item3, q3, p3, totalPrice);
        //form.submit();
        generateReceipt(document.getElementsByName("username")[0].value, item1, q1, p1, item2, q2, p2, item3, q3, p3, totalPrice);
        form.submit();
    }

    function generateReceipt(username, item1, q1, p1, item2, q2, p2, item3, q3, p3, totalPrice) {
        var currentDate = new Date().toLocaleDateString();
        var receipt = "<html><head><title>Receipt</title></head><body>";
        receipt += "<h1>Jikoko Hotel Receipt</h1>";
        receipt += "<p>Kahawa West, P.O.Box 64450 Nairobi Kenya</p>";
        receipt += "<p>Date: " + currentDate + "</p>"; // date 
        receipt += "<p>Customer Name: " + username + "</p>"; // name
        receipt += "<table>";
        receipt += "<thead><tr><th>Item</th><th>Quantity</th><th>Price</th></tr></thead>";
        receipt += "<tbody>";
        receipt += "<tr><td>" + item1 + "</td><td>" + q1 + "</td><td>Ksh. " + (q1 * p1).toFixed(2) + "</td></tr>";
        receipt += "<tr><td>" + item2 + "</td><td>" + q2 + "</td><td>Ksh. " + (q2 * p2).toFixed(2) + "</td></tr>";
        receipt += "<tr><td>" + item3 + "</td><td>" + q3 + "</td><td>Ksh. " + (q3 * p3).toFixed(2) + "</td></tr>";
        receipt += "</tbody>";
        receipt += "</table>";
        receipt += "<div class='total'>Total Price: Ksh. " + totalPrice.toFixed(2) + "</div>";
        receipt += "<div class='thanks'>Thank you for choosing Jikoko Hotel! All rights reserved.</div>";
        receipt += "</body></html>";
        var win = window.open("", "Receipt");
        win.document.write(receipt);
        win.document.close();
        win.print();
    }

</script>