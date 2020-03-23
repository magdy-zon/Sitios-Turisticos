
<li>{{ $estado->estado_id }}</li><br>
<li>{{ $estado->nombre }}</li><br>
<li>{{ $estado->capital }}</li><br>





<a href="{{ url('estado/'.$estado->estado_id.'/edit')}}">Editar el estado</a><br><br>
<!-- url =  estado/2/edit     -->


<!-- url = estado/2 -->
{{ Form::open(array('url' => 'estado/'.$estado->estado_id , 'method' => 'delete')) }}
    <button type="submit" class="waves-effect waves-light btn">Elimina</button>
{{ Form::close() }}
