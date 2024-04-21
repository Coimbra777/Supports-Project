<h1>Dúvida {{ $support->id }}</h1>

<a href="{{ route('supports.index') }}">Voltar</a>

@if ($errors->any())
<ul>
  @foreach ($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
</ul>
@endif

<form action="{{ route('supports.update', $support->id) }}" method="POST">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="_method" value="PUT">
  <input type=" text" placeholder="Assunto" name="subject" value="{{ $support->subject }}">
  <textarea name="body" id="" cols="30" rows="10" placeholder="Descrição">{{ $support->body }}</textarea>
  <button type="submit">Enviar</button>
</form>