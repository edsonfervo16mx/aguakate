<?php

	require_once '../core/config/Connection.php';
	require_once '../core/class/Autoload.php';

	#$sexo = new Sexo;
	/*
	//listar
	$datos = $sexo->listar($key);
	print_r($datos);
	/**/
	/*
	//ver
	$id = utf8_decode('F');
	$datos = $sexo->ver($key,$id);
	print_r($datos);
	/**/
	/*
	//insertar
	$atr = array('id' => utf8_decode('D'));
	$status = $sexo->agregar($key,$atr);
	//imprime 1 | 0 si se ejecuto la insercion
	echo $status;
	/**/
	/*
	//editar
	$atr = array('id' => utf8_decode('P'));
	$id = utf8_decode('D');
	$status = $sexo->editar($key,$id,$atr);
	echo $status;
	/**/
	/*
	//eliminar
	$id = utf8_decode('D');
	$status = $sexo->eliminar($key,$id);
	echo $status;
	/**/
	/*
	//restaurar
	$id = utf8_decode('D');
	$status = $sexo->restaurar($key,$id);
	echo $status;
	/**/
	/*
	//papelera
	$datos = $sexo->papelera($key);
	print_r($datos);
	/**/
	//-----------------------------------------------------------
	#$captacion = new Captacion;
	/*
	//listar
	$datos = $captacion->listar($key);
	print_r($datos);
	/**/
	/*
	//ver
	$id = utf8_decode('TELÉFONO');
	$datos = $captacion->ver($key,$id);
	print_r($datos);
	/**/
	/*
	//insertar
	$atr = array('id' => utf8_decode('RECEPCIÓN'));
	$status = $captacion->agregar($key,$atr);
	//imprime 1 | 0 si se ejecuto la insercion
	echo $status;
	/**/
	/*
	//editar
	$atr = array('id' => utf8_decode('TELÉFONO'));
	$id = utf8_decode('TELÉFONO2');
	$status = $captacion->editar($key,$id,$atr);
	echo $status;
	/**/
	/*
	//eliminar
	$id = utf8_decode('TELÉFONO');
	$status = $captacion->eliminar($key,$id);
	echo $status;
	/**/
	/*
	//restaurar
	$id = utf8_decode('TELÉFONO');
	$status = $captacion->restaurar($key,$id);
	echo $status;
	/**/
	/*
	//papelera
	$datos = $captacion->papelera($key);
	print_r($datos);
	/**/
	//-----------------------------------------------------------
	#$categoria = new Categoria;
	/*
	//listar
	$datos = $categoria->listar($key);
	print_r($datos);
	/**/
	/*
	//ver
	$id = utf8_decode('BEBIDAS');
	$datos = $categoria->ver($key,$id);
	print_r($datos);
	/**/
	/*
	//insertar
	$atr = array('id' => utf8_decode('ENTRADAS'));
	$status = $categoria->agregar($key,$atr);
	//imprime 1 | 0 si se ejecuto la insercion
	echo $status;
	/**/
	/*
	//editar
	$atr = array('id' => utf8_decode('ENTRADAS'));
	$id = utf8_decode('ENTRADAS2');
	$status = $categoria->editar($key,$id,$atr);
	echo $status;
	/**/
	/*
	//eliminar
	$id = utf8_decode('ENTRADAS');
	$status = $categoria->eliminar($key,$id);
	echo $status;
	/**/
	/*
	//restaurar
	$id = utf8_decode('ENTRADAS');
	$status = $categoria->restaurar($key,$id);
	echo $status;
	/**/
	/*
	//papelera
	$datos = $categoria->papelera($key);
	print_r($datos);
	/**/
	//-----------------------------------------------------------
	#$estadopago = new EstadoPago;
	/*
	//listar
	$datos = $estadopago->listar($key);
	print_r($datos);
	/**/
	/*
	//ver
	$id = utf8_decode('PAGADO');
	$datos = $estadopago->ver($key,$id);
	print_r($datos);
	/**/
	/*
	//insertar
	$atr = array('id' => utf8_decode('NO PAGADO'));
	$status = $estadopago->agregar($key,$atr);
	//imprime 1 | 0 si se ejecuto la insercion
	echo $status;
	/**/
	/*
	//editar
	$atr = array('id' => utf8_decode('PAGADO'));
	$id = utf8_decode('PAGADO2');
	$status = $estadopago->editar($key,$id,$atr);
	echo $status;
	/**/
	/*
	//eliminar
	$id = utf8_decode('PAGADO');
	$status = $estadopago->eliminar($key,$id);
	echo $status;
	/**/
	/*
	//restaurar
	$id = utf8_decode('PAGADO');
	$status = $estadopago->restaurar($key,$id);
	echo $status;
	/**/
	/*
	//papelera
	$datos = $estadopago->papelera($key);
	print_r($datos);
	/**/
	//-----------------------------------------------------------
	#$estadosubscripcion = new EstadoSubscripcion;
	/*
	//listar
	$datos = $estadosubscripcion->listar($key);
	print_r($datos);
	/**/
	/*
	//ver
	$id = utf8_decode('VENCIDA');
	$datos = $estadosubscripcion->ver($key,$id);
	print_r($datos);
	/**/
	/*
	//insertar
	$atr = array('id' => utf8_decode('ACTIVA'));
	$status = $estadosubscripcion->agregar($key,$atr);
	//imprime 1 | 0 si se ejecuto la insercion
	echo $status;
	/**/
	/*
	//editar
	$atr = array('id' => utf8_decode('VENCIDA'));
	$id = utf8_decode('VENCIDA2');
	$status = $estadosubscripcion->editar($key,$id,$atr);
	echo $status;
	/**/
	/*
	//eliminar
	$id = utf8_decode('VENCIDA');
	$status = $estadosubscripcion->eliminar($key,$id);
	echo $status;
	/**/
	/*
	//restaurar
	$id = utf8_decode('VENCIDA');
	$status = $estadosubscripcion->restaurar($key,$id);
	echo $status;
	/**/
	/*
	//papelera
	$datos = $estadosubscripcion->papelera($key);
	print_r($datos);
	/**/
  //-----------------------------------------------------------
  #$medio = new Medio;
  /*
	//listar
	$datos = $medio->listar($key);
	print_r($datos);
	/**/
	/*
	//ver
	$id = utf8_decode('FACEBOOK');
	$datos = $medio->ver($key,$id);
	print_r($datos);
	/**/
	/*
	//insertar
	$atr = array('id' => utf8_decode('WHATSAPP'),'icono' => utf8_decode('iconfns'));
	$status = $medio->agregar($key,$atr);
	//imprime 1 | 0 si se ejecuto la insercion
	echo $status;
	/**/
	/*
	//editar
	$atr = array('id' => utf8_decode('WHATSAPP'));
	$id = utf8_decode('WHATSAPP2');
	$status = $medio->editar($key,$id,$atr);
	echo $status;
	/**/
	/*
	//eliminar
	$id = utf8_decode('WHATSAPP');
	$status = $medio->eliminar($key,$id);
	echo $status;
	/**/
	/*
	//restaurar
	$id = utf8_decode('WHATSAPP');
	$status = $medio->restaurar($key,$id);
	echo $status;
	/**/
	/*
	//papelera
	$datos = $medio->papelera($key);
	print_r($datos);
	/**/
	//-----------------------------------------------------------
	#$metodopago = new MetodoPago;
	/*
	//listar
	$datos = $metodopago->listar($key);
	print_r($datos);
	/**/
	/*
	//ver
	$id = utf8_decode('EFECTIVO');
	$datos = $metodopago->ver($key,$id);
	print_r($datos);
	/**/
	/*
	//insertar
	$atr = array('id' => utf8_decode('TRANSFERENCIA'));
	$status = $metodopago->agregar($key,$atr);
	//imprime 1 | 0 si se ejecuto la insercion
	echo $status;
	/**/
	/*
	//editar
	$atr = array('id' => utf8_decode('TRANSFERENCIA'));
	$id = utf8_decode('TRANSFERENCIA2');
	$status = $metodopago->editar($key,$id,$atr);
	echo $status;
	/**/
	/*
	//eliminar
	$id = utf8_decode('TRANSFERENCIA');
	$status = $metodopago->eliminar($key,$id);
	echo $status;
	/**/
	/*
	//restaurar
	$id = utf8_decode('TRANSFERENCIA');
	$status = $metodopago->restaurar($key,$id);
	echo $status;
	/**/
	/*
	//papelera
	$datos = $metodopago->papelera($key);
	print_r($datos);
	/**/
	//-----------------------------------------------------------
	#$pais = new Pais;
	/*
	//listar
	$datos = $pais->listar($key);
	print_r($datos);
	/**/
	//-----------------------------------------------------------
	#$presentacion = new Presentacion;
	/*
	//listar
	$datos = $presentacion->listar($key);
	print_r($datos);
	/**/
	/*
	//insertar
	$atr = array('id' => utf8_decode('BOTELLA'));
	$status = $presentacion->agregar($key,$atr);
	//imprime 1 | 0 si se ejecuto la insercion
	echo $status;
	/**/
?>
