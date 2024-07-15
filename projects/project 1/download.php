<?php
require('fpdf/fpdf.php'); // Include FPDF library

include 'connect.php';

if(isset($_GET['action'])){
    
    $query = "SELECT * FROM doctor";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die('Error:'.$mysqli->error);
    }

    // Set the appropriate headers for PDF download
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="feedback1.pdf"');
    header('Pragma: no-cache');

    // Create a new FPDF object
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 12);

    // Fetch the field names
    $fields = $result->fetch_fields();
    $fieldNames = [];
    foreach ($fields as $field) {
        $fieldNames[] = $field->name;
    }

    // Print the field names
    foreach ($fieldNames as $col) {
        $pdf->Cell(40, 10, $col, 1);
    }
    $pdf->Ln();

    // Fetch and print the data
    $pdf->SetFont('Arial', '', 12);
    while ($row = $result->fetch_assoc()) {
        foreach ($fieldNames as $col) {
            $pdf->Cell(40, 10, $row[$col], 1);
        }
        $pdf->Ln();
    }

    // Output the PDF
    $pdf->Output('D', 'feedback1.pdf'); // Forces download

    // Free the result set
    mysqli_free_result($result);

    // Close the database connection
    mysqli_close($conn);

    exit();
}
?>
