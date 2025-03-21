<?php
	
	function isNull($nombre, $apellido, $correo, $tel, $contra, $confirmcontra){
		if(strlen(trim($nombre)) < 1 || strlen(trim($apellido)) < 1 || strlen(trim($correo)) < 1 || strlen(trim($tel)) < 1 || strlen(trim($contra)) < 1 || strlen(trim($confirmcontra)) < 1)
		{
			return true;
			} else {
			return false;
		}		
	}
	
	function isEmail($correo)
	{
		if (filter_var($correo, FILTER_VALIDATE_EMAIL)){
			return true;
			} else {
			return false;
		}
	}
	
	function validaPassword($var1, $var2)
	{
		if (strcmp($var1, $var2) !== 0){
			return false;
			} else {
			return true;
		}
	}
	
	function minMax($min, $max, $valor){
		if(strlen(trim($valor)) < $min)
		{
			return true;
		}
		else if(strlen(trim($valor)) > $max)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function nombreExiste($nombre)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("SELECT id FROM usuarios WHERE nombre = ? LIMIT 1");
		$stmt->bind_param("s", $nombre);
		$stmt->execute();
		$stmt->store_result();
		$num = $stmt->num_rows;
		$stmt->close();
		
		if ($num > 0){
			return true;
			} else {
			return false;
		}
	}

	function apellidoExiste($apellido)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("SELECT id FROM usuarios WHERE apellidos = ? LIMIT 1");
		$stmt->bind_param("s", $apellido);
		$stmt->execute();
		$stmt->store_result();
		$num = $stmt->num_rows;
		$stmt->close();
		
		if ($num > 0){
			return true;
			} else {
			return false;
		}
	}
	
	function emailExiste($correo)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("SELECT id FROM usuarios WHERE correo = ? LIMIT 1");
		$stmt->bind_param("s", $correo);
		$stmt->execute();
		$stmt->store_result();
		$num = $stmt->num_rows;
		$stmt->close();
		
		if ($num > 0){
			return true;
			} else {
			return false;	
		}
	}

	function hashPassword($contra) 
	{
		$hash = password_hash($contra, PASSWORD_DEFAULT);
		return $hash;
	}
	
	function resultBlock($errores){
		if(count($errores) > 0)
		{
			echo "<div id='error' class='alert alert-info text-center' role='alert'>
			<img src=\"../imagenes/logo e icono.jpg\" alt=\"logoHopital\" width=\"30\" height=\"30\">
			<ul>";
			foreach($errores as $error)
			{
				echo "<li>".$error."</li>";
			}
			echo "</ul>";
			echo "</div>";
		}
	}
	
	function registraUsuario($nombre, $apellido, $correo, $tel, $contra, $tipousuario){
		
		global $mysqli;
		
		$stmt = $mysqli->prepare("INSERT INTO usuarios (nombre, apellidos, correo, telefono, contrasena, tipo_usuario ) VALUES(?,?,?,?,?,?)");
		$stmt->bind_param('ssssss', $nombre, $apellido, $correo, $tel, $contra, $tipousuario);
		
		if ($stmt->execute()){
			return $mysqli->insert_id;
			} else {
			return 0;	
		}		
	}
	
	function enviarEmail($email, $nombre, $asunto, $cuerpo){
		
		require_once 'PHPMailer/PHPMailerAutoload.php';
		
		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tipo de seguridad';
		$mail->Host = 'smtp.hosting.com';
		$mail->Port = 'puerto';
		
		$mail->Username = 'miemail@dominio.com';
		$mail->Password = 'password';
		
		$mail->setFrom('miemail@dominio.com', 'Sistema de Usuarios');
		$mail->addAddress($email, $nombre);
		
		$mail->Subject = $asunto;
		$mail->Body    = $cuerpo;
		$mail->IsHTML(true);
		
		if($mail->send())
		return true;
		else
		return false;
	}
	
	function activarUsuario($id)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("UPDATE usuarios SET activacion=1 WHERE id = ?");
		$stmt->bind_param('s', $id);
		$result = $stmt->execute();
		$stmt->close();
		return $result;
	}
	
	function isNullLogin($correo, $contra)
	{
		if(strlen(trim($correo)) < 1 || strlen(trim($contra)) < 1)
		{
			return true;
		}
		else
		{
			return false;
		}		
	}
	
	function login($correo, $contra)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("SELECT id, tipo_usuario, contrasena FROM usuarios WHERE correo = ? LIMIT 1");
		$stmt->bind_param("s", $correo);
		$stmt->execute();
		$stmt->store_result();
		$rows = $stmt->num_rows;
		
		if($rows > 0) {
		
			$stmt->bind_result($id, $tipous, $passwd);
			$stmt->fetch();
				
			$validaPassw = password_verify($contra, $passwd);
				
			if($validaPassw){
					
				ultimaSesion($id);
				$_SESSION['id_usuario'] = $id;
				$_SESSION['tipo_usuario'] = $tipous;
					
				header("location: bienvenido.php");
				} else {
					
				$errors = "La contrase&ntilde;a es incorrecta";
				}
			} else {
			$errors = "El correo electr&oacute;nico no existe";
		}
		return $errors;
	}
	
	function ultimaSesion($id)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("UPDATE usuarios SET ultima_sesion=NOW() WHERE id = ?");
		$stmt->bind_param('s', $id);
		$stmt->execute();
		$stmt->close();
	}
	
	function generaTokenPass($user_id)
	{
		global $mysqli;
		
		$token = generateToken();
		
		$stmt = $mysqli->prepare("UPDATE usuarios SET token_password=?, password_request=1 WHERE id = ?");
		$stmt->bind_param('ss', $token, $user_id);
		$stmt->execute();
		$stmt->close();
		
		return $token;
	}
	
	function getValor($campo, $campoWhere, $valor)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("SELECT $campo FROM usuarios WHERE $campoWhere = ? LIMIT 1");
		$stmt->bind_param('s', $valor);
		$stmt->execute();
		$stmt->store_result();
		$num = $stmt->num_rows;
		
		if ($num > 0)
		{
			$stmt->bind_result($_campo);
			$stmt->fetch();
			return $_campo;
		}
		else
		{
			return null;	
		}
	}
	
	function getPasswordRequest($id)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("SELECT password_request FROM usuarios WHERE id = ?");
		$stmt->bind_param('i', $id);
		$stmt->execute();
		$stmt->bind_result($_id);
		$stmt->fetch();
		
		if ($_id == 1)
		{
			return true;
		}
		else
		{
			return null;	
		}
	}
	
	function verificaTokenPass($user_id, $token){
		
		global $mysqli;
		
		$stmt = $mysqli->prepare("SELECT activacion FROM usuarios WHERE id = ? AND token_password = ? AND password_request = 1 LIMIT 1");
		$stmt->bind_param('is', $user_id, $token);
		$stmt->execute();
		$stmt->store_result();
		$num = $stmt->num_rows;
		
		if ($num > 0)
		{
			$stmt->bind_result($activacion);
			$stmt->fetch();
			if($activacion == 1)
			{
				return true;
			}
			else 
			{
				return false;
			}
		}
		else
		{
			return false;	
		}
	}
	
	function cambiaPassword($password, $user_id, $token){
		
		global $mysqli;
		
		$stmt = $mysqli->prepare("UPDATE usuarios SET password = ?, token_password='', password_request=0 WHERE id = ? AND token_password = ?");
		$stmt->bind_param('sis', $password, $user_id, $token);
		
		if($stmt->execute()){
			return true;
			} else {
			return false;		
		}
	}		