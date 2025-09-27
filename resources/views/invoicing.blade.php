<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Hospital - Lista de Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-2 d-none d-md-block bg-white sidebar py-4">
            <div class="text-center mb-4">
                <i class="bi bi-hospital fs-1 text-primary"></i>
                <h5 class="mt-2">Hospital Vida</h5>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-people me-2"></i>Pacientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-file-earmark-text me-2"></i>Faturas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-calendar-check me-2"></i>Consultas</a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="col-md-10 ms-sm-auto px-4">
            <div class="hospital-header">
                <h2 class="mb-0">Lista de Pacientes</h2>
                <p class="mb-0">Bem-vindo ao sistema de gestão hospitalar</p>
            </div>
            <div class="card shadow-sm">
                <div class="card-body">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Idade</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>João Silva</td>
                            <td>34</td>
                            <td>joao.silva@email.com</td>
                            <td>(11) 91234-5678</td>
                            <td><a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i> Ver detalhes</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Maria Oliveira</td>
                            <td>28</td>
                            <td>maria.oliveira@email.com</td>
                            <td>(11) 99876-5432</td>
                            <td><a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i> Ver detalhes</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Carlos Souza</td>
                            <td>45</td>
                            <td>carlos.souza@email.com</td>
                            <td>(11) 93456-7890</td>
                            <td><a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i> Ver detalhes</a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Ana Costa</td>
                            <td>31</td>
                            <td>ana.costa@email.com</td>
                            <td>(11) 97654-3210</td>
                            <td><a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i> Ver detalhes</a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Pedro Martins</td>
                            <td>52</td>
                            <td>pedro.martins@email.com</td>
                            <td>(11) 96543-2109</td>
                            <td><a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i> Ver detalhes</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html>
