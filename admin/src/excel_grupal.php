<?php

include('crud/config.php');
?>
<!DOCTYPE html>
<html lang="es-es">

<head>
	<meta charset="utf-8">
	<title>excel</title>

	<head>

	<body>
		<?php
		// Definimos el archivo exportado
		$arquivo = 'matricula_grupal.xls';

		// Crear la tabla HTML
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="5">Tabla Lista de matriculados grupalmente</tr>';
		$html .= '</tr>';


		$html .= '<tr>';
		$html .= '<td><b>ID</b></td>';
		$html .= '<td><b>a_paterno</b></td>';
		$html .= '<td><b>a_materno</b></td>';
		$html .= '<td><b>Nombre</b></td>';
		$html .= '<td><b>direccion</b></td>';
        $html .= '<td><b>dni</b></td>';
        $html .= '<td><b>celular</b></td>';
        $html .= '<td><b>correo</b></td>';
        $html .= '<td><b>foto</b></td>';
        $html .= '<td><b>Fecha de registro</b></td>';
		$html .= '</tr>';

		//Seleccionar todos los elementos de la tabla
		$result_msg_contatos = "SELECT * FROM matricula_grupal";
		$resultado_msg_contatos = mysqli_query($con, $result_msg_contatos);

		while ($row_msg_contatos = mysqli_fetch_assoc($resultado_msg_contatos)) {
			$html .= '<tr>';
			$html .= '<td>' . $row_msg_contatos["id"] . '</td>';
			$html .= '<td>' . $row_msg_contatos["a_paterno"] . '</td>';
			$html .= '<td>' . $row_msg_contatos["a_materno"] . '</td>';
			$html .= '<td>' . $row_msg_contatos["namefull"] . '</td>';
            $html .= '<td>' . $row_msg_contatos["direccion"] . '</td>';
            $html .= '<td>' . $row_msg_contatos["dni"] . '</td>';
            $html .= '<td>' . $row_msg_contatos["celular"] . '</td>';
            $html .= '<td>' . $row_msg_contatos["correo"] . '</td>';
            $html .= '<td>' . $row_msg_contatos["foto"] . '</td>';
            $html .= '<td>' . $row_msg_contatos["fechaRegistro"] . '</td>';





			//$data = date('d/m/Y H:i:s', strtotime($row_msg_contatos["fcreacion"]));
			//$html .= '<td>' . $data . '</td>';
			$html .= '</tr>';;
		}
		// Configuración en la cabecera
		header("Expires: Mon, 26 Jul 2227 05:00:00 GMT");
		header("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header("Cache-Control: no-cache, must-revalidate");
		header("Pragma: no-cache");
		header("Content-type: application/x-msexcel");
		header("Content-Disposition: attachment; filename=\"{$arquivo}\"");
		header("Content-Description: PHP Generado Data");
		// Envia contenido al archivo
		echo $html;
		exit; ?>
	</body>

</html>