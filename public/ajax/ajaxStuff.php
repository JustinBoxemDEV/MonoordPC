<?php
$con = mysqli_connect("dasounds.nl","monoord","vbh7rv7nAqhQwbkn!","monoord");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Retrieve data from Query String
$timeA = $_GET['dateInputArchive1'];
$timeB = $_GET['dateInputArchive2'];

// Escape User Input to help prevent SQL Injection
mysqli_real_escape_string($con,$timeA,$timeB);

//build query
$query = "SELECT * FROM temporary__reservations WHERE DATE(reservation_time_start) BETWEEN $timeA AND $timeB;";

//Execute query
$qry_result = mysqli_query($con,$query) or die(mysqli_connect_errno());


// Insert a new row in the table for each person returned

echo '<table class="table table-striped table-bordered table-hover">';
echo"<TR><TD>Straatnaam</TD><TD>Postcode:</TD><TD>Suffix</TD></TR>";
while ($row = mysqli_fetch_assoc($qry_result)) {
  echo "<tr><td>";
  echo $row['OFFICIALSTREETNAME'];
  echo "</td><td>";
  echo $row['POSTALCODE'];
  echo "</td><td>";
  echo $row['POSTALCODESUFFIX'];
  echo "</TD></tr>";
}
echo "</table>";

