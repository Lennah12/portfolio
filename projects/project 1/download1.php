<?php
include'connect.php';
if(isset($_GET['action'])){
    
$query= "SELECT * FROM doctor";
$result = mysqli_query($conn,$query);
if (!$result){
    die('Error:'.$mysqli->error);
}
// Get the filename from the GET request, default to "display.jpg"
$filename = "feedback1.csv";

    // Set the appropriate headers
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="'. $filename .'";');
    header('Pragma: no-cache');
   // header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

   $output = fopen ('php://output','w');
//fetch the field names
$fields = $result->fetch_fields();
$fieldnames =[];
foreach ($fields as $field) {
    $fieldNames[] = $field->name;
}

// Write the field names to the CSVfputcsv($output, $fieldNames);

// Fetch and write the data to the CSV
while ($row = $result->fetch_assoc()) {
    fputcsv($output, $row);

}
//Close output stream
fclose($output);

// Free the result set
mysqli_free_result($result);

// Close the database connection
mysqli_close($conn);

exit();
}
?>

