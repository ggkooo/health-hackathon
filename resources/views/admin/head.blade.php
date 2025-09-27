<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Hospital - Lista de Pacientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            min-height: 100vh;
            box-shadow: 2px 0 5px rgba(0,0,0,0.05);
        }
        .sidebar .nav-link {
            color: #333;
            font-weight: 500;
        }
        .sidebar .nav-link.active {
            background: #e9ecef;
            color: #007bff;
        }
        .hospital-header {
            background: linear-gradient(90deg, #007bff 0%, #00bcd4 100%);
            color: #fff;
            padding: 32px 24px 24px 24px;
            border-radius: 0 0 12px 12px;
            margin-bottom: 32px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
    </style>
</head>