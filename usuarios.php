<?php
include 'sql.php';
class usuario
{
	public $sql;
	public function __construct()
	{
		$this->sql = new sql();
	}
	public function muestra_usuarios()
	{
		$result = $this->sql->select('select * from usuarios');
		if($result != null)
		{
			echo '<div class = "container">';
			echo '<table class = "table table-striped">';
			echo '<tr>';
			echo '<th>id</th>';
			echo '<th>nombre</th>';
			echo '<th>app</th>';
			echo '<th>apm</th>';
			echo '<th>modificar</th>';
			echo '<th>eliminar</th>';
			echo '</tr>';

			while ($row = $result->fetch_object()) 
			{
				echo '<tr>';
				echo '<td>'. $row->id . '</td>';
				echo '<td>'. $row->nombre . '</td>';
				echo '<td>'. $row->app . '</td>';
				//echo '<td>'. utf8_encode($row->apm) . '</td>';
				echo '<td>'. $row->apm . '</td>';
				echo '<td><button onclick = "modificar('.$row->id.')" type="button" class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
</td>';
				echo '<td><button onclick = "eliminar('.$row->id.')" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i>
</td>';
				echo '</tr>';
			}
			echo '</table>';
			echo '</div>';
		}
	}
	public function addusuario($nombre,$app,$apm,$fnac,$salario)
	{
		$sql = "INSERT INTO usuarios(nombre,app,apm,fnac,salario) VALUES ('$nombre', '$app', '$apm', '$fnac', '$salario')";
		$this->sql->execute($sql);
	}

	public function deleteUsuario($id)
	{
		$sql = "delete from usuarios where id = '$id'";
		$this->sql->execute($sql);
	}

	public function updateUsuario($id,$nombre,$app,$apm,$fnac,$salario)
	{
		$sql = "update usuarios set nombre = '$nombre', app = '$app', apm = '$apm', fnac = '$fnac', salario = '$salario' where id = $id";
		//echo $sql;
		$this->sql->execute($sql);
	}
	public function updateFormulario($id)
	{
		$sql = "SELECT id,nombre,app,apm,date_format(fnac,'%Y-%m-%d') AS fnac,salario FROM usuarios WHERE id = '$id'";
		$result = $this->sql->select($sql);

		while($row = $result->fetch_object())
		{
			echo '<form class="form-horizontal" role="form">
					<div class="form-group">
						<label class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" id="nombre" value="'.$row->nombre.'" name="nombre">
							<input class="form-control" type="hidden" id="id" value="'.$row->id.'" name="id">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Apellido Paterno</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" id="app" value="'.$row->app.'" name="app">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Apellido Materno</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" id="apm" value="'.$row->apm.'" name="apm">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Fecha de nacimiento</label>
						<div class="col-sm-9">
							<input class="form-control" type="date" id="fnac"  value="'.$row->fnac.'" name="fnac">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Salario</label>
						<div class="col-sm-9">
							<input class="form-control" type="int" id="salario" value="'.$row->salario.'" name="salario">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"></div>
						<div class="col-sm-9 text-right">
						<button class="btn btn-primary btn-md" onclick = "updateFormulario()" type="button">enviar</button>
						</div>
					</div>
				  </form>';
		}
	}

	public function addFormulario()
	{
		echo '<form class="form-horizontal" role="form">
				<div class="form-group">
					<label class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-9">
						<input class="form-control" type="text" id="nombre" value="" name="nombre">
						<input class="form-control" type="hidden" id="id" value="" name="id">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Apellido Paterno</label>
					<div class="col-sm-9">
						<input class="form-control" type="text" id="app" value="" name="app">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Apellido Materno</label>
					<div class="col-sm-9">
						<input class="form-control" type="text" id="apm" value="" name="apm">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Fecha de nacimiento</label>
					<div class="col-sm-9">
						<input class="form-control" type="date" id="fnac"  value="" name="fnac">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Salario</label>
					<div class="col-sm-9">
						<input class="form-control" type="int" id="salario" value="" name="salario">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-2"></div>
					<div class="col-sm-9 text-right">
					<button class="btn btn-primary btn-md" onclick = "addusuario()" type="button">enviar</button>
					</div>
				</div>
			  </form>';
	}
}
?>
