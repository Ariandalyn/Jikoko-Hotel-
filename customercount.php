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


            <form method="post" action="report.php">
                <label for="report-type">Customer report type:</label>
                <select id="report-type" name="report-type">

                    <option value="customer-count">Customer count report</option>

                </select>
                <br><br>
                <input type="submit" value="Generate report" id="view-report-btn">
            </form>

            <style>
                table {
                    border-collapse: collapse;
                    width: 100%;
                    display: none;

                }

                th,
                td {
                    border: 1px solid black;
                    padding: 8px;
                    text-align: left;
                }

                th {
                    background-color: #dddddd;
                }

                .table-visible {
                    display: block !important;

                }
            </style>


            <script>
                document.getElementById("view-report-btn").addEventListener("click", function (event) {
                    event.preventDefault();
                    document.getElementById("customer-table").classList.add("table-visible");
                });

            </script>



            <?php
            session_start();
            require_once "db/config.php";
            $errors = [];
            $messages = [];

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }


            $query = "SELECT * FROM users";
            $result = mysqli_query($conn, $query);


            $total = 0;





            echo " <h1>Jikoko Customer total sales Report</h1>";
            echo "<table id='customer-table'>";
            echo "<tr><th>id</th><th>email</th></tr>";


            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row['id'] . "</td><td>" . $row['email'] . "</td></tr>";


                $total++;
            }
            echo "</table>";


            echo "<h2>Total number of customers: " . $total;

            echo "<br><br>";
            //echo "<button onclick=\"window.location.href='another-page.php'\">View total sales</button>";
            
            mysqli_close($conn);

            ?>
            <button onclick="window.print()">Print</button><br><br>
            <a href="sales.php">View total sales</a><br><br>


            <a href="addcustomer.php">Add customer</a>

            <style>
                @media print {


                    header,
                    #form,
                    button {
                        display: none !important;
                    }


                    table {
                        display: table !important;
                    }
                }
            </style>