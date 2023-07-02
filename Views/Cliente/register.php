<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>REGISTRAR</title>
    <link rel="stylesheet" href="../../Css/register.php">
  </head>
  <body>
    <div class="register">
    
      <div class="login-box">
        <img src="../../Imagenes/logocliente.png" class="avatar" alt="Cliente icon">
        <h1>BIENVENIDO</h1>
        <center>
        <a>Registrate para Ingresar a la plataforma!</a>
        </center>
    <form action='../../Controllers/cliente_controller.php' method='POST'>
      <input type='hidden' name='action' value='register'>
      <br>
          <table>
          <td>
            <input type="text" placeholder="Cédula" name="cedula" id="cedula">
            <input type="text" placeholder="Nombres" name="nombres" id="nombres">
            <input type="text" placeholder="Teléfono" name="telefono" id="telefono">
            <input type="text" placeholder="Dirección" name="direccion" id="dirección">
          </td>
          <td>
            <input type="text" placeholder="Usuario" name="usuario" id="usuario">
            <input type="text" placeholder="Clave" name="clave" id="clave">
            <br><br>
            <center>
              <input type="submit" value="Registrarse">
            </center>
          </td>
        </table>
    </form>
      </div>
    </div>
  </body>
</html>