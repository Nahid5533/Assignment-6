<?php
session_start();

if (isset($_SESSION['email']) && $_SESSION['role'] === 'admin') {
    
    echo "Welcome, Admin! You can manage roles here.";
    
} else {
    echo "Access denied. Only admins can access this page.";
}