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
  @csrf
  @method('PUT')
  @include('admin.supports.partials.form', [
  'support' => $support
  ])


</form>