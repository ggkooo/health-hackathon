<!-- Main Content -->
<main class="col-md-10 ms-sm-auto px-4">
    <div class="hospital-header">
        <h2 class="mb-0">Solicitações Pendentes</h2>
        <p class="mb-0">Gerencie os procedimentos dos pacientes</p>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Paciente</th>
                        <th>Procedimento</th>
                        <th>Data da Solicitação</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>João Silva</td>
                        <td>Internação</td>
                        <td>12/09/2025</td>
                        <td><span class="badge bg-warning text-dark">Pendente</span></td>
                        <td>
                            <a href="{{ route('patients_invoicing_details') }}" class="btn btn-sm btn-outline-primary">Exibir</a>

                            <!-- Condicional: se tudo aprovado -->
                            <span class="action-container">
                                <!-- Será preenchido via JS -->
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

<script>
    // Simulação do status de aprovação de todos os itens da internação
    const itensAprovados = false; // alterar para true se todos aprovados

    document.querySelectorAll('.action-container').forEach(container => {
        if(itensAprovados) {
            container.innerHTML = `
                <button class="btn btn-sm btn-outline-success ms-1" onclick="alert('Solicitação concluída!')">
                    <i class="bi bi-check-circle"></i> Concluir
                </button>
            `;
        } else {
            container.innerHTML = `<span class="text-muted ms-2">Aguardando convênio</span>`;
        }
    });
</script>
