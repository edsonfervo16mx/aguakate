<?php
	class Subscripcion{

		public function listar($key){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'SELECT * from subscripcion where status = "active"';
			$res = $connection->consultaDatos($key,$sql);
			return ($res);
		}

		public function ver($key, $id){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'SELECT * from subscripcion where id = "'.$id.'" and status = "active"';
			$res = $connection->consultaDatos($key,$sql);
			return ($res);
		}

		public function agregar($key,$atr){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'INSERT INTO subscripcion(titulo,detalle,precio,dias) values (upper("'.$atr['titulo'].'"),upper("'.$atr['detalle'].'"),upper("'.$atr['precio'].'"),upper("'.$atr['dias'].'"))';
			$res = $connection->disparadorSimple($key,$sql);
			return ($res);
		}

		public function editar($key, $id, $atr){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'UPDATE subscripcion SET titulo = upper("'.$atr['titulo'].'"),detalle = upper("'.$atr['detalle'].'"),precio = upper("'.$atr['precio'].'"),dias = upper("'.$atr['dias'].'") where id = "'.$id.'"';
			$res = $connection->disparadorSimple($key,$sql);
			return ($res);
		}

		public function eliminar($key, $id){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'UPDATE subscripcion SET status = "inactive" where id = "'.$id.'"';
			$res = $connection->disparadorSimple($key,$sql);
			return ($res);
		}

		public function restaurar($key, $id){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'UPDATE subscripcion SET status = "active" where id = "'.$id.'"';
			$res = $connection->disparadorSimple($key,$sql);
			return ($res);
		}

		public function papelera($key){
			$connection = new Connection;
			$connection->abrir($key);
			$sql = 'SELECT * from subscripcion where status = "inactive"';
			$res = $connection->consultaDatos($key,$sql);
			return ($res);
		}

	}

?>
