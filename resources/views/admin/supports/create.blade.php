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
  @include('admin.supports.partials.form')
</form>