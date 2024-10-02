<?php
// Include database connection file
include 'includes/connection.php';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $session = mysqli_real_escape_string($conn, $_POST['session']);
    $term = mysqli_real_escape_string($conn, $_POST['term']);
    $class_name = mysqli_real_escape_string($conn, $_POST['class']);

    // Insert data into classes table
    $sql = "INSERT INTO classes (session, term, class_name)
            VALUES ('$session', '$term', '$class_name')";

    if (mysqli_query($conn, $sql)) {
        echo "New class added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>
