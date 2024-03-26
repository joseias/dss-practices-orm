<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/styles.user.css')}}" rel="stylesheet" type="text/css">
  </head>
  <body>
    <form id="form_user" action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
      <div class="container">
        <h1>Nuevo usuario</h1>
        <hr>
        <label for="name">
          <b>Nombre y apellidos:</b>
        </label>
        <input type="text" placeholder="Nombre y apellidos" name="name" id="name" required>
        <label for="email">
          <b>Correo electrónico:</b>
        </label>
        <input type="text" placeholder="Correo electrónico" name="email" id="email" required>
        <label for="phone">
          <b>Teléfono:</b>
        </label>
        <input type="tel" placeholder="123456789" id="phone" name="phone" pattern="[0-9]{9}" required>
        <input type="submit" value="Enviar">
      </div>
    </form>
  </body>
</html>