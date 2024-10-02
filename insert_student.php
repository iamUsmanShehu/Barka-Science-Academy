<?php

// Include database connection file (assuming it's in a folder called 'includes')
include 'includes/connection.php';

// Check if form is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Escape user inputs to prevent SQL injection
  $class        = mysqli_real_escape_string($conn, $_POST['class']);
  $reg_no       = mysqli_real_escape_string($conn, $_POST['reg_no']);
  $first_name   = mysqli_real_escape_string($conn, $_POST['first_name']);
  $last_name    = mysqli_real_escape_string($conn, $_POST['last_name']);
  $other_name   = mysqli_real_escape_string($conn, $_POST['other_name']);
  $gender       = mysqli_real_escape_string($conn, $_POST['gender']);
  $dob          = mysqli_real_escape_string($conn, $_POST['dob']);

  // Define target directory for uploaded images
  $targetDirectory = "passports/";

  // Handle image upload
  $uploadOk = 1; // Flag to track upload status

  // Check if image upload exists and there are no errors
  if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {

    // Get the file extension of the uploaded image
    $imageFileType = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));

    // Check if image file is actually an image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }

    // Check if file already exists
    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
    if (file_exists($targetFile)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["image"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }

    // Allow certain file formats only
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
  } else {
    // Handle the scenario where no image was uploaded (e.g., display an error message)
    echo "No image selected for upload.";
  }

  // Check if there are any errors ($uploadOk should be 1 for successful validation)
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // If everything is okay, proceed with upload
  } else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
      echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";

      // Construct a descriptive path for the uploaded image
      $uploadedImagePath = $targetDirectory . basename($_FILES["image"]["name"]);

      // Prepare SQL statement to insert student data
      $sql = "INSERT INTO students (class, reg_no, first_name, last_name, other_name, gender, dob, image_path)
              VALUES ('$class', '$reg_no', '$first_name', '$last_name', '$other_name', '$gender', '$dob', '$uploadedImagePath')";

      // Execute the query and handle the result
      if (mysqli_query($conn, $sql)) {
        echo "New student added successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
}

// Close the connection to the database
// mysqli_close($conn);

?>
