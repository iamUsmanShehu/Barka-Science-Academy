<?php
include 'includes/connection.php';

// Handle form submission
if (isset($_POST['session'])) {
    // Escape user inputs for security
    $session = mysqli_real_escape_string($conn, $_POST['session']);
    
    // Insert data into sessions table
    $sql = "INSERT INTO sessions (session_name) VALUES ('$session')";

    if (mysqli_query($conn, $sql)) {
        echo "New session created successfully";
        // header("refresh:1; url");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close connection
// mysqli_close($conn);
?>