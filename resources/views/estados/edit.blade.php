

<!-- estado/2 -->
{{ Form::open(array('url' => 'estado/'.$estado->estado_id , 'method' => 'put')) }}
    <div class="col s3">
    </div>
    <div class="input-field col s6 center-align">
      <h1>Edita la información de este estado</h1>
      <label>Nombre del estado</label>
      <input type="text" name="nombre" value="{{ $estado->nombre }}"></input><br>

      <label>Capital</label>
      <input type="text" name="capital" value="{{ $estado->capital }}"></input><br><br>
      <button type="submit" class="waves-effect waves-light btn">Actualizar</button>
    </div>
    <div class="col s3">
    </div>
{{ Form::close() }}
