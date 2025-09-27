<!-- Main Content -->
<main class="col-md-10 ms-sm-auto px-4">
    <div class="hospital-header">
        <h2 class="mb-0">Detalhes do Paciente</h2>
        <p class="mb-0">Informações completas e faturamento</p>
    </div>

    <!-- Informações do Paciente -->
    <div class="card shadow-sm mb-4">
        <div class="card-header">
            <strong>Dados Pessoais</strong>
        </div>
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-md-4"><strong>Nome:</strong> João Silva</div>
                <div class="col-md-2"><strong>Idade:</strong> 34</div>
                <div class="col-md-3"><strong>Email:</strong> joao.silva@email.com</div>
                <div class="col-md-3"><strong>Telefone:</strong> (11) 91234-5678</div>
            </div>
            <div class="row mb-2">
                <div class="col-md-4"><strong>CPF:</strong> 123.456.789-00</div>
                <div class="col-md-4"><strong>Endereço:</strong> Rua Exemplo, 123, São Paulo</div>
                <div class="col-md-4"><strong>Convênio:</strong> HCI Saúde</div>
            </div>
        </div>
    </div>

    <!-- Histórico de Faturamento -->
    <div class="card shadow-sm mb-4">
        <div class="card-header">
            <strong>Histórico de Faturamento</strong>
        </div>
        <div class="card-body">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Data</th>
                        <th>Procedimento</th>
                        <th>Valor</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Internação com Remédio de Alto Custo -->
                    <tr>
                        <td>1</td>
                        <td>15/09/2025</td>
                        <td>Internação</td>
                        <td>R$ 1.200,00</td>
                        <td>
                            <span class="badge bg-warning text-dark">Pendente</span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalDetalhes3">
                                <i class="bi bi-eye"></i> Detalhes
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

<!-- Modal 3 - Internação Detalhada -->
<div class="modal fade" id="modalDetalhes3" tabindex="-1" aria-labelledby="modalDetalhes3Label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDetalhes3Label">Detalhes da Internação</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">

        <!-- Status Geral da Solicitação -->
        <h6>Status da Solicitação</h6>
        <p>
          <span class="badge bg-warning text-dark">Pendente</span>
        </p>

        <!-- Diária hospitalar -->
        <h6>Diária Hospitalar</h6>
        <p>Quantidade de dias: <strong>5 dias</strong></p>
        <table class="table table-bordered mb-3">
          <thead class="table-light">
            <tr>
              <th>Item</th>
              <th>Descrição</th>
              <th>Valor</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Diária hospitalar (5 dias)</td>
              <td>R$ 800,00</td>
            </tr>
          </tbody>
        </table>

        <!-- Remédios -->
        <h6>Remédios Utilizados</h6>
        <table class="table table-bordered mb-3">
          <thead class="table-light">
            <tr>
              <th>Item</th>
              <th>Remédio</th>
              <th>Valor</th>
              <th>Status do Convênio</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Dipirona</td>
              <td>R$ 50,00</td>
              <td><span class="badge bg-success">Aceito</span></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Paracetamol</td>
              <td>R$ 30,00</td>
              <td><span class="badge bg-success">Aceito</span></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Spinraza</td>
                <td>R$ 700,00</td>
                <td><span class="badge bg-warning text-dark">Pendente Convênio</span></td>
            </tr>

          </tbody>
        </table>

        <!-- Raio-X -->
        <h6>Raio-X Realizados</h6>
        <table class="table table-bordered mb-3">
          <thead class="table-light">
            <tr>
              <th>Item</th>
              <th>Tipo de Raio-X</th>
              <th>Valor</th>
              <th>Status do Convênio</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Raio-X Torácico</td>
              <td>R$ 100,00</td>
              <td><span class="badge bg-success">Aceito</span></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Raio-X Abdômen</td>
              <td>R$ 100,00</td>
              <td><span class="badge bg-success">Aceito</span></td>
            </tr>
          </tbody>
        </table>

        <!-- Observações -->
        <h6>Observações</h6>
        <p>Procedimentos com remédios de alto custo dependem da aprovação do convênio. O status geral da solicitação só será marcado como Concluída quando todos os itens forem aceitos e pagos.</p>

      </div>
    </div>
  </div>
</div>
