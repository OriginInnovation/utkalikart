<?php
include 'admin/conn.php';
$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["footer_email"];
    $email = strtolower($email);

    $stmt = $conn->prepare("SELECT * FROM newsletter WHERE email_id = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row) {
        $response["status"] = "success";
        $response["message"] = "Already Subscribe Our Newsletter";
    } else {
        $stmt = $conn->prepare("INSERT INTO newsletter (email_id) VALUES (?)");
        $stmt->bind_param("s", $email);
        if ($stmt->execute()) {
            $response["status"] = "success";
            $response["message"] = "Thank You For Subscribe Our Newsletter";
        } else {
            $response["status"] = "error";
            $response["message"] = "Error: " . $conn->error;
        }
    }

    $stmt->close();
    $conn->close();
}

header('Content-Type: application/json');
echo json_encode($response);
?>