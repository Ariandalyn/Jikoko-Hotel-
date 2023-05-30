<label for="report-type">Sales report type:</label>
<select id="report-type" name="report-type">

    <option value="Total sales">Total sales report</option>

</select>
<br><br>

<form id="sales-form" method="get" action="sales.php">
    <input type="hidden" name="view" value="total_sales">
    <button type="submit">Generate total sales</button>
</form>

<style>
    /* Give a unique ID to the sales table */
    #sales-table {
        border-collapse: collapse;
        width: 100%;
        display: none;
        /* hide the table by default */
    }

    #sales-table th,
    #sales-table td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }

    #sales-table th {
        background-color: #dddddd;
    }

    .table-visible {
        display: block !important;
        /* override the display property to show the table */
    }
</style>

<script>
    document.getElementById("sales-form").addEventListener("submit", function (event) {
        event.preventDefault(); // prevent the form from submitting
        document.getElementById("sales-table").classList.add("table-visible"); // show the table
    });
</script>

<?php
//session_start();
require_once "db/config.php";
$errors = [];
$messages = [];

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch the sales data from the database
//$query = "SELECT * FROM orderforms";
$query = "SELECT * FROM orderforms WHERE date = CURDATE()";
$result = mysqli_query($conn, $query);


$total = 0;

// Display sales data in a table
echo "<h1>Jikoko Hotel Total sales</h1>";
echo "<table id='sales-table'>";
echo "<tr><th>id</th><th>mobilephone</th><th>date</th><th>price</th></th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row['id'] . "</td><td>" . $row['mobilephone'] . "</td><td>" . $row['date'] . "</td><td>" . $row['price'] . "</td></tr>";

    // Calculate the total
    $total += (float) $row['price'];
}
echo "</table>";

//  total
echo "<h2> Daily Total sales: sh" . $total;

// mysqli_close($conn);
?>

<?php
if (isset($_GET['view']) && $_GET['view'] === 'total_sales') {

}
?>
<button onclick="window.print()">Print</button>
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