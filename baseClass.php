<?php

namespace App\Controladores;

use App\Soporte\Renderizado\RenderizarInterfaz;

class ClaseBase
{
	protected $_objRender;
	protected $_rutaInterfaz;

	function __construct()
	{		
		$this->set();

		$this->_objRender = new RenderizarInterfaz(
			$this->_rutaInterfaz = dirname(__DIR__, 1).'/Vistas/Vista.php',
		);
	}

	private function setDatos()
	{
		//Set datos
	}
}

$objeto = new ClaseBase();