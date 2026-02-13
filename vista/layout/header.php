<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>SuperMarketUG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background-color: #f4f6f9;
        }

        .navbar-custom {
            background: linear-gradient(135deg, #1e7e34, #28a745);
        }

        .card-custom {
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        .table thead {
            background-color: #198754;
            color: white;
        }

        .btn-success {
            background-color: #198754;
            border: none;
        }

        .btn-success:hover {
            background-color: #157347;
        }

        .section-title {
            font-weight: 600;
            color: #198754;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

<?php 
$accionActual = $_GET['accion'] ?? 'inicio';
?>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom mb-4">
    <div class="container d-flex justify-content-between align-items-center">

        <span class="navbar-brand">
            <i class="fa-solid fa-store"></i> SuperMarketUG
        </span>

        <?php if (!in_array($accionActual, ['menu', 'login', 'inicio'])): ?>
            <a href="index.php?accion=menu" 
               class="btn btn-light btn-sm">
               <i class="fa-solid fa-house"></i> Menú
            </a>
        <?php endif; ?>

    </div>
</nav>

<div class="container">
