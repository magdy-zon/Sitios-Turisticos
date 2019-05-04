@extends('layouts.app')
@section('content')
<div class="section home-container background-orange-2">
  <div class="had-container">
    <div class="row"><br><br>
          <h5 class="color-white center-align">Primer paso</h5>
          <!-- <span class="color-white font-home lincoln">A dónde nos vamos?</span> -->
          <div class="col s12">
            {{ Form::open(array('url' => 'estados/buscar', 'method' => 'post')) }}
            <div class="col s3">
            </div>
            <div class="input-field col s6 center-align">
              <select name="estado">
                <option value="" disabled selected>Elige una opción</option>
                <option value="mexico">México</option>
                <option value="guanajuato">Guanajuato</option>
                <option value="oaxaca">Oaxaca</option>
              </select>
              <label>Estado</label>
              <button type="submit" name="submit" class="waves-effect waves-light btn">Consultar</button>

            </div>
            <div class="col s3">

            </div>

            {{ Form::close() }}
          </div>
        <div class="img-container from-right">
          <!-- <img src="assets/img/home.jpg" alt=""> -->
          @foreach($lugarturistico as $lugar)
            <li>{{ $lugar->nombre }}</li>
            <li>{{ $lugar->descripcion }}</li>
          @endforeach
        </div>
    </div>
    <div class="row">
      <div class="center-align">
        <p class="color-green-1 lincoln title-text">Conoce México</p>
        <p>Debes de conocer todos los estados de la república mexicana</p>

      </div>
    </div>
  </div>

  </div>
</div>

@endsection
@section('after_includes')
<script type="text/javascript">
$( document ).ready(function() {
    $('nav.nav-element').addClass('background-orange-2');
    $('nav.nav-element').removeClass('background-green-2');
});
</script>
@endsection
