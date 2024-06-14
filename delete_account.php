<?php
session_start();
require_once 'conn.php';

// Alleen uitvoeren als GET-verzoek is
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Account-ID ophalen
    $id = $_GET['id'];

    // SQL-query
    $sql = "DELETE FROM `account` WHERE id = ?";
    $stmt = $conn->prepare($sql);
    // We moeten natuurlijk niet de ID vergeten
    $stmt->execute([$id]);

    // Redirect naar admin dashboard
    header('Location: admin_dashboard.php');
    exit();
}