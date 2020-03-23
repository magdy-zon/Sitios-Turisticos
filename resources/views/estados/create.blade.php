{{ Form::open(array('url' => 'estado', 'method' => 'post')) }}
    <div class="col s3">
    </div>
    <div class="input-field col s6 center-align">
      <h1>Agrega un nuevo estado</h1>
      <label>Nombre del estado</label>

      <input type="text" name="nombre" value=""></input><br>

      <label>Capital</label>
      <input type="text" name="capital" value=""></input><br><br>

      <button type="submit" class="waves-effect waves-light btn">Guardar</button>
    </div>
    <div class="col s3">
    </div>
{{ Form::close() }}
