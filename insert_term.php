<?php
// Include database connection file
include 'includes/connection.php';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $session = mysqli_real_escape_string($conn, $_POST['session']);
    $term = mysqli_real_escape_string($conn, $_POST['term']);

    // Insert data into terms table
    $sql = "INSERT INTO terms (session, term)
            VALUES ('$session', '$term')";

    if (mysqli_query($conn, $sql)) {
        echo "New term added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>
