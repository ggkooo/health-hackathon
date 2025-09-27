<!-- Main Content -->
<main class="col-md-10 ms-sm-auto px-4">
    <div class="hospital-header">
        <h2 class="mb-0">Filtro de Pacientes</h2>
        <p class="mb-0">Bem-vindo ao sistema de gestão hospitalar</p>
    </div>
    <!-- Container do filtro acima da tabela -->
    <div class="filter-container mb-4 p-3 rounded shadow-sm" style="background: #f8fafc; border: 1px solid #e3e6ea;">
        <div class="row g-3">
            <div class="col-md-3">
                <div class="form-floating">
                    <select id="filterField" class="form-select border-primary" style="font-weight: 500; width: 100%;">
                        <option value="" selected disabled>Selecione o campo</option>
                        <option value="nome">Nome</option>
                        <option value="cpf">CPF</option>
                        <option value="email">Email</option>
                        <option value="telefone">Telefone</option>
                    </select>
                    <label for="filterField"><span class="me-2 text-primary"><i class="bi bi-funnel-fill"></i></span>Campo para filtrar</label>
                </div>
            </div>
            <div class="col-md-9">
                <div class="form-floating">
                    <input id="filterInput" type="text" class="form-control border-primary" placeholder="Digite para filtrar..." disabled style="width: 100%;">
                    <label for="filterInput"><span class="me-2 text-primary"><i class="bi bi-search"></i></span>Digite para filtrar...</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover align-middle" id="patientsTable">
                <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Data de Nascimento</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody id="patientsTbody">
                <!-- Pacientes serão inseridos via JS -->
                </tbody>
            </table>
            <style>
                .filter-container .form-select:focus, .filter-container .form-control:focus {
                    box-shadow: 0 0 0 0.2rem #0d6efd33;
                    border-color: #0d6efd;
                }
                .filter-container .form-select, .filter-container .form-control {
                    background: #fff;
                    transition: border-color 0.2s, box-shadow 0.2s;
                }
                .filter-container {
                    box-shadow: 0 2px 8px rgba(0,0,0,0.04);
                }
                .form-floating label span {
                    vertical-align: middle;
                }
                .filter-container .form-floating > .form-select,
                .filter-container .form-floating > .form-control {
                    height: calc(3.5rem + 2px);
                    min-height: 3.5rem;
                }
            </style>
            <script>
                const filterField = document.getElementById('filterField');
                const filterInput = document.getElementById('filterInput');
                const table = document.getElementById('patientsTable');
                const patientsTbody = document.getElementById('patientsTbody');

                // Array de pacientes
                const patients = [
                    {
                        nome: 'João Silva',
                        cpf: '123.456.789-00',
                        nascimento: '1991-04-12',
                        email: 'joao.silva@email.com',
                        telefone: '(11) 91234-5678'
                    },
                    {
                        nome: 'Maria Oliveira',
                        cpf: '987.654.321-11',
                        nascimento: '1997-08-23',
                        email: 'maria.oliveira@email.com',
                        telefone: '(11) 99876-5432'
                    },
                    {
                        nome: 'Carlos Souza',
                        cpf: '111.222.333-44',
                        nascimento: '1980-12-05',
                        email: 'carlos.souza@email.com',
                        telefone: '(11) 93456-7890'
                    },
                    {
                        nome: 'Ana Costa',
                        cpf: '555.666.777-88',
                        nascimento: '1994-03-17',
                        email: 'ana.costa@email.com',
                        telefone: '(11) 97654-3210'
                    },
                    {
                        nome: 'Pedro Martins',
                        cpf: '999.888.777-66',
                        nascimento: '1973-09-30',
                        email: 'pedro.martins@email.com',
                        telefone: '(11) 96543-2109'
                    },
                    {
                        nome: 'Lucas Pereira',
                        cpf: '222.333.444-55',
                        nascimento: '1985-06-21',
                        email: 'lucas.pereira@email.com',
                        telefone: '(11) 92345-6789'
                    },
                    {
                        nome: 'Fernanda Lima',
                        cpf: '333.444.555-66',
                        nascimento: '1996-11-02',
                        email: 'fernanda.lima@email.com',
                        telefone: '(11) 93456-1234'
                    },
                    {
                        nome: 'Rafael Torres',
                        cpf: '444.555.666-77',
                        nascimento: '1988-02-14',
                        email: 'rafael.torres@email.com',
                        telefone: '(11) 94567-2345'
                    },
                    {
                        nome: 'Juliana Alves',
                        cpf: '555.666.777-99',
                        nascimento: '1999-07-19',
                        email: 'juliana.alves@email.com',
                        telefone: '(11) 95678-3456'
                    },
                    {
                        nome: 'Bruno Rocha',
                        cpf: '666.777.888-00',
                        nascimento: '1975-01-28',
                        email: 'bruno.rocha@email.com',
                        telefone: '(11) 96789-4567'
                    },
                    {
                        nome: 'Patricia Mendes',
                        cpf: '777.888.999-11',
                        nascimento: '1992-05-10',
                        email: 'patricia.mendes@email.com',
                        telefone: '(11) 97890-5678'
                    },
                    {
                        nome: 'Eduardo Ramos',
                        cpf: '888.999.000-22',
                        nascimento: '1984-10-03',
                        email: 'eduardo.ramos@email.com',
                        telefone: '(11) 98901-6789'
                    },
                    {
                        nome: 'Camila Duarte',
                        cpf: '999.000.111-33',
                        nascimento: '1998-12-11',
                        email: 'camila.duarte@email.com',
                        telefone: '(11) 99012-7890'
                    },
                    {
                        nome: 'Felipe Barros',
                        cpf: '000.111.222-44',
                        nascimento: '1989-03-25',
                        email: 'felipe.barros@email.com',
                        telefone: '(11) 90123-8901'
                    },
                    {
                        nome: 'Aline Freitas',
                        cpf: '111.222.333-55',
                        nascimento: '1993-09-07',
                        email: 'aline.freitas@email.com',
                        telefone: '(11) 91234-9012'
                    }
                ];

                function formatDateBR(dateStr) {
                    const date = new Date(dateStr);
                    if (isNaN(date)) return dateStr;
                    return date.toLocaleDateString('pt-BR');
                }

                // Função para renderizar pacientes
                function renderPatients(list) {
                    patientsTbody.innerHTML = '';
                    list.forEach((p, idx) => {
                        const tr = document.createElement('tr');
                        tr.innerHTML = `
                            <td>${idx + 1}</td>
                            <td>${p.nome}</td>
                            <td>${p.cpf}</td>
                            <td>${formatDateBR(p.nascimento)}</td>
                            <td>${p.email}</td>
                            <td>${p.telefone}</td>
                            <td><a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i> Ver detalhes</a></td>
                        `;
                        patientsTbody.appendChild(tr);
                    });
                }

                // Renderiza todos ao carregar
                renderPatients(patients);

                // Garante que o select sempre inicia com a opção padrão
                filterField.selectedIndex = 0;
                filterInput.disabled = true;
                filterInput.value = '';

                filterField.addEventListener('change', function() {
                    if (!filterField.value) {
                        filterInput.disabled = true;
                        filterInput.value = '';
                        renderPatients(patients);
                    } else {
                        filterInput.disabled = false;
                        filterInput.value = '';
                        filterInput.focus();
                    }
                });

                filterInput.addEventListener('input', function() {
                    const field = filterField.value;
                    const value = filterInput.value.toLowerCase();
                    let filtered = patients;
                    if (field && value) {
                        filtered = patients.filter(p => String(p[field]).toLowerCase().includes(value));
                    }
                    renderPatients(filtered);
                });
            </script>
        </div>
    </div>
</main>
