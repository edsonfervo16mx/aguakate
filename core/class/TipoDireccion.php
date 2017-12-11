<?php
	class TipoDireccion{

		public function listar($key){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'SELECT * from tipo_direccion where status = "active"';
			$res = $connection->consultaDatos($key,$sql);
			return ($res);
		}

		public function ver($key, $id){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'SELECT * from tipo_direccion where clave = "'.$id.'" and status = "active"';
			$res = $connection->consultaDatos($key,$sql);
			return ($res);
		}

		public function agregar($key,$atr){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'INSERT INTO tipo_direccion(clave) values (upper("'.$atr['id'].'"))';
			$res = $connection->disparadorSimple($key,$sql);
			return ($res);
		}

		public function editar($key, $id, $atr){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'UPDATE tipo_direccion SET clave = upper("'.$atr['id'].'") where clave = "'.$id.'"';
			$res = $connection->disparadorSimple($key,$sql);
			return ($res);
		}

		public function eliminar($key, $id){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'UPDATE tipo_direccion SET status = "inactive" where clave = "'.$id.'"';
			$res = $connection->disparadorSimple($key,$sql);
			return ($res);
		}

		public function restaurar($key, $id){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'UPDATE tipo_direccion SET status = "active" where clave = "'.$id.'"';
			$res = $connection->disparadorSimple($key,$sql);
			return ($res);
		}

		public function papelera($key){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'SELECT * from tipo_direccion where status = "inactive"';
			$res = $connection->consultaDatos($key,$sql);
			return ($res);
		}

	}

?>
