<h1>
  Detalhes da dúvida
</h1>

<a href="{{ route('supports.index') }}">Voltar</a>

<ul>
  <li>Assunto: {{ $support->subject }}</li>
  <li>Descrição: {{ $support->body }}</li>
  <li>Status: {{ $support->status }}</li>
</ul>

<form action="{{route('supports.destroy', $support->id)}}" method="POST"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{csrf_token()}}">
  <button type="submit">Deletar</button>
</form>