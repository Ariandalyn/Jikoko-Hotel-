<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jikoko Hotel System Gallery</title>
    <link rel="stylesheet" href="css/index.css">


</head>

<body>
    <div class="wrapper">
        <?php include_once('inc/header.php'); ?>
        <main></main>

        <html>

        <head>
            <title>JIKOKO ORDER FORM</title>
            <link rel="stylesheet" type="text/css" href="formCssFile.css">
            <script type="text/javascript" src="scriptfile.js">  </script>
        </head>

        <body>
            <div>
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
                                <input type="text">
                            </td>
                        </tr>
                        <tr>
                            <td>Mobile: </td>
                            <td><input type="text" id="mblenmb" onfocusout="checkmob()"></td>
                        </tr>
                    </table>
                    <br>


                    <form name="tblform">
                        <table width="80%" id="alignment">
                            <tr>
                                <th>Food Item</th>
                                <th> </th>
                                <th>Quantity</th>
                                <th>Price</th>
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
                                <td><input type="text" id="p1"></td>
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
                                <td><input type="text" id="p2"></td>
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
                                <td><input type="text" id="p3"></td>
                            </tr>



                            <tr>
                                <td></td>
                                <td></td>
                                <td><input type="submit" class="button" value="Create Bill" onclick=createBill()></td>
                                <td><input type="reset" class="button" value="Clear"></td>
                            </tr>
                        </table>
                    </form>


                    <script>

                        function createBill() {
                            var item1 = document.getElementById("item1").value;
                            var item2 = document.getElementById("item2").value;
                            var item3 = document.getElementById("item3").value;

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
                            alert(" Dear user Thank you for the orders, your Total price is: Ksh. " + totalPrice.toFixed(2));
                        }

                    </script>
                </h>
            </div>
        </body>

        </html>