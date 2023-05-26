<?php
if (isset($_POST['email'])) {
  // Retrieve the email address from the form
  $email = $_POST['email'];

  // Validate the email address (you can add your own validation logic here)
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Generate the PDF file path (replace with your actual PDF file path)
    $pdfFilePath = 'documents/portfolio.pdf';

    // Set the appropriate headers for file download
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="portfolio.pdf"');

    // Read the PDF file and output it for download
    readfile($pdfFilePath);

    // You can perform additional actions here, such as logging the email address

    exit; // Terminate the script after the file download
  }
}
