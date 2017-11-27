<?php
	class Sexo{

		public function listar($key){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'SELECT * from sexo where status = "active"';
			$res = $connection->consultaDatos($key,$sql);
			return ($res);
		}

		public function ver($key, $id){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'SELECT * from sexo where id = "'.$id.'" and status = "active"';
			$res = $connection->consultaDatos($key,$sql);
			return ($res);
		}

		public function agregar($key,$atr){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'INSERT INTO sexo(id) values (upper("'.$atr['id'].'"))';
			$res = $connection->disparadorSimple($key,$sql);
			return ($res);
		}

		public function editar($key, $id, $atr){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'UPDATE sexo SET id = upper("'.$atr['id'].'") where id = "'.$id.'"';
			$res = $connection->disparadorSimple($key,$sql);
			return ($res);
		}

		public function eliminar($key, $id){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'UPDATE sexo SET status = "inactive" where id = "'.$id.'"';
			$res = $connection->disparadorSimple($key,$sql);
			return ($res);
		}

		public function restaurar($key, $id){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'UPDATE sexo SET status = "active" where id = "'.$id.'"';
			$res = $connection->disparadorSimple($key,$sql);
			return ($res);
		}

		public function papelera($key){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'SELECT * from sexo where status = "inactive"';
			$res = $connection->consultaDatos($key,$sql);
			return ($res);
		}

	}

?>
