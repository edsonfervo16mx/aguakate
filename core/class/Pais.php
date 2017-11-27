<?php
	class Pais{

		public function listar($key){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'SELECT * from pais where status = "active"';
			$res = $connection->consultaDatos($key,$sql);
			return ($res);
		}

		public function ver($key, $id){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'SELECT * from pais where clave = "'.$id.'" and status = "active"';
			$res = $connection->consultaDatos($key,$sql);
			return ($res);
		}

		public function agregar($key,$atr){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'INSERT INTO pais(clave,nombre) values (upper("'.$atr['id'].'"),upper("'.$atr['nombre'].'"))';
			$res = $connection->disparadorSimple($key,$sql);
			return ($res);
		}

		public function editar($key, $id, $atr){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'UPDATE pais SET clave = upper("'.$atr['id'].'"),nombre = upper("'.$atr['nombre'].'") where clave = "'.$id.'"';
			$res = $connection->disparadorSimple($key,$sql);
			return ($res);
		}

		public function eliminar($key, $id){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'UPDATE pais SET status = "inactive" where clave = "'.$id.'"';
			$res = $connection->disparadorSimple($key,$sql);
			return ($res);
		}

		public function restaurar($key, $id){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'UPDATE pais SET status = "active" where clave = "'.$id.'"';
			$res = $connection->disparadorSimple($key,$sql);
			return ($res);
		}

		public function papelera($key){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'SELECT * from pais where status = "inactive"';
			$res = $connection->consultaDatos($key,$sql);
			return ($res);
		}

	}

?>
