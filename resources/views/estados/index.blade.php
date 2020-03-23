
@foreach($estados as $estado)
  <li>
    <strong>Estado:</strong>
    <a href="{{ url('estado/'.$estado->estado_id) }}">{{ $estado->nombre }}</a> |
    <strong>Capital:</strong> {{ $estado->capital }}
  </li>
@endforeach

<br>
<a type="button" name="button" href="{{ url('estado/create') }}">Agregar un nuevo estado</a>
