<?php
session_start();
require_once 'conn.php';

// Alleen uitvoeren als POST-verzoek is
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Gegevens ervan ophalen
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    // Alleen admins horen accounts te kunnen maken, dus wordt er gecheckt of de account wel een admin is
    $isadmin = isset($_POST['isadmin']) ? 1 : 0;

    // SQL-query
    $sql = "INSERT INTO `account` (name, surname, username, password, email, isadmin) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$name, $surname, $username, $password, $email, $isadmin]);

    // Redirect naar admin dashboard
    header('Location: admin_dashboard.php');
    exit();
}