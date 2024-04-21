<h1>Nova Dúvida</h1>

<a href="{{ route('supports.index') }}">Voltar</a>

<form action="{{ route('supports.store') }}" method="POST">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type=" text" placeholder="Assunto" name="subject">
  <textarea name="body" id="" cols="30" rows="10" placeholder="Descrição"></textarea>
  <button type="submit">Enviar</button>
</form>