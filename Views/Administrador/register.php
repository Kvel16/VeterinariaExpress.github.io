<p>Bienvenido al register usuario..!</p>

<form action='Controllers/usuario_controller.php' method='post'>
	<input type='hidden' name='action' value='register'>
	<table>
	<tr>
			<td><label>Cedula: </label></td><td><input type='text' name='cedula'></td>
		</tr>
		<tr>
			<td><label>Nombres: </label></td><td><input type='text' name='nombres'></td>
		</tr>
		<tr>
			<td><label>Telefono: </label></td><td><input type='text' name='telefono'></td>
		</tr>
		<tr>
			<td><label>Direccion: </label></td><td><input type='text' name='direccion'></td>
		</tr>
		<tr>
			<td><label>Alias:</label></td><td><input type='text' name='alias'></td>
		</tr>
		<tr>
			<td><label>Email:</label></td><td><input type='text' name='email'></td>
		</tr>
	</table>
		
	<input type='submit' value='Guardar'>
</form>