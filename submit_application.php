<?php
// submit_application.php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_name = $_POST['student_name'];
    $parent_name = $_POST['parent_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO training_applications (student_name, parent_name, email, phone, course, message) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $student_name, $parent_name, $email, $phone, $course, $message);

    if ($stmt->execute()) {
        echo "Application submitted successfully. We will contact you soon.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
