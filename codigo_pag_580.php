<?php
session_start();
function url($url){
	//si la directiva de configuración session.use_trans_sid
	//está en 0 (no se realiza ninguna transmisión automática por URL) y
	// si SID no está vacío (el equipo ha rechazado la cookie), entonces
	//debemos gestionar la transmisión.
	
	if ((get_cfg_var('session.use_trans_sid')==0) and (SID !=''))
		{
		// Agregar la constante SID detrás de la URL con un ?
		// si todavía no hay ningún parámetro, o con un & en
		// caso contrario
		$url.=((strpos($url,'?')===FALSE)?'?':'&').SID;
		}
		return $url;
	}
	/*
ini_set("session.use_cookies",0);
ini_set("session.use_only_cookies", 0);

session_start();
echo url('pagina2.php').'<br>';
echo url('pagina3.php?nombre=Esther').'<br>';	.
*/

