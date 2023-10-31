<?php
session_start();

if (isset($_SESSION['email']) && $_SESSION['role'] === 'user') {
    echo "Welcome, User! This is your dashboard.";
    
} else {
    echo "Access denied. Only users can access this page.";
}