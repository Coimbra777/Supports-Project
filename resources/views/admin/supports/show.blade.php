<h1>
  Detalhes da dúvida
</h1>

<a href="{{ route('supports.index') }}">Voltar</a>

<ul>
  <li>Assunto: {{ $support->subject }}</li>
  <li>Descrição: {{ $support->body }}</li>
  <li>Status: {{ $support->status }}</li>
</ul>