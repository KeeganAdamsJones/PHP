<?php

/*Keegan Jones
CSD - 440
Module 11
12/06/2021

Assignment:
Create a PDF holding all of your database data from Module 8.
In the PDF, display general information about the topic related to the data, 
    and then display the data in a table format.
Include in your data table a header and footer.
Title all files starting with your first name such as <YourFirstName> PDF.php.
*/

$width_cell = array(20, 20, 20, 20, 20, 50, 35);

function SetCol($pdf, $col) {
    // TODO: Make sure these match...get global...something.
    $col_width = array(20, 20, 30, 20, 20, 35,20);
    $x = 10 + $col * $col_width[$col];
    //$pdf->SetLeftMargin($x);
    //$pdf->SetX($x);
}
$lineBreak = '<br />';
                
// had to copy the following into msql to allow connection
// ALTER USER 'student1'@'%' IDENTIFIED WITH mysql_native_password BY 'pass';


// Create connection
$conn = new mysqli('127.0.0.1', 'student1', 'pass', 'baseball_01');  

// Check connection
if ($conn->connect_error) {
    die("The connection failed: " . $conn->connect_error);
}
//echo "The connection was successful!<br>";

// Querry Database Table
$sql="SELECT * FROM Birthdays_php";
$result = mysqli_query($conn, $sql);
            
if (!$result) {
    exit("Error in SQL");
}

require('pdf_files/fpdf.php');

// Create the PDF 
$pdf = new FPDF();
$pdf->addPage();

// Display general info.
$pdf->setFont("Helvetica", 'BU', 8);
$pdf->cell(40, 10, 'This is a list of birthday records.');
$pdf->ln();

// Header
$pdf->setFont("Helvetica", 'BU', 8);
$pdf->setFillColor(180,184,183);

// Headers for table columns 
//                   element of array 
//                    !    height
//                    !    !        string
//                    !    !       !      param border
//                    !    !       !        !  which row
//                    !    !       !        !  !   center
//                    !    !       !        !  !   !   fill
$pdf->cell($width_cell[0], 10, "First Name", 1, 0, 'c', true);
$pdf->cell($width_cell[1], 10, "Middle Name", 1, 0, 'c', true);
$pdf->cell($width_cell[2], 10, "Last Name", 1, 0, 'c', true);
$pdf->cell($width_cell[3], 10, "Birthday", 1, 0, 'c', true);
$pdf->cell($width_cell[4], 10, "Phone", 1, 0, 'c', true);
$pdf->cell($width_cell[5], 10, "Address", 1, 0, 'c', true);
$pdf->cell($width_cell[6], 10, "Email", 1, 1, 'c', true);

// Data output to table from db.
$pdf->setFont("Helvetica", '', 6);
$pdf->setFillColor(175,227,220);

// give alternate fill for every other line
$fill='false';


if (mysqli_num_rows($result) > 0) {
    while($row = $result->fetch_assoc()) {
        $pdf->cell($width_cell[0], 10, $row["fName"], 1, 0, 'c', $fill);
        $pdf->cell($width_cell[1], 10, $row["mName"], 1, 0, 'c', $fill);
        $pdf->cell($width_cell[2], 10, $row["lname"], 1, 0, 'c', $fill);
        $pdf->cell($width_cell[3], 10, $row["birthday"], 1, 0, 'c', $fill);
        $pdf->cell($width_cell[4], 10, $row["phone"], 1, 0, 'c', $fill);
        $pdf->cell($width_cell[5], 10, $row["textarea"], 1, 0, 'c', $fill);
        $pdf->cell($width_cell[6], 10, $row["email"], 1, 1, 'c', $fill);
        // Give alternate background fill to rows
        $fill = !$fill;
    }
}

// Footer
$pdf->setFont("Helvetica", 'BU', 8);
$pdf->SetY(255);
$pdf->setFillColor(180,184,183);
$pdf->cell(40, 10, 'End of birthday records.');



// Close connection
$conn->close();

$pdf->Output();
?>
