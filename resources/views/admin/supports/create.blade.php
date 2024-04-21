<h1>Nova Dúvida</h1>

<a href="{{ route('supports.index') }}">Voltar</a>

@if ($errors->any())
<ul>
  @foreach ($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
</ul>
@endif

<form action="{{ route('supports.store') }}" method="POST">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type=" text" placeholder="Assunto" name="subject" value="{{old('subject')}}">
  <textarea name="body" id="" cols="30" rows="10" placeholder="Descrição">{{old('body')}}</textarea>
  <button type="submit">Enviar</button>
</form>