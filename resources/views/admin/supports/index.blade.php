<h1>Listagem dos Supports</h1>

<a href="{{ route('supports.create') }}">Criar Dúvida</a>

<table>
  <thead>
    <tr>
      <th>Assunto</th>
      <th>Status</th>
      <th>Descricão</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($supports as $support)
    <tr>
      <td>{{ $support['subject'] }}</td>
      <td>{{ $support['status'] }}</td>
      <td>{{ $support['body'] }}</td>
      <td>
        <a href="{{ route('supports.show', $support['id']) }}">Detalhes</a>
        <a href="{{ route('supports.edit', $support['id']) }}">Editar</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>