<?PHP
$hostname_localhost="localhost";
$database_localhost="bd_micoop";
$username_localhost="root";
$password_localhost="";

$json=array();

	if(isset($_GET["user"]) && isset($_GET["password"])){
		
		$user=$_GET['user'];
		$password=$_GET['password'];
		
		$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
		
		$consulta="SELECT * FROM usuarios WHERE user='$user' AND password= '$password'";
        $resultado=mysqli_query($conexion,$consulta);
        if($registro=mysqli_fetch_array($resultado)){
            $json['usuario'][]=$registro;
        }
            mysqli_close($conexion);
			echo json_encode($json);
		
		
	}
	else{
			
			$resulta["user"]='WS No retorna';
			$resulta["password"]='WS No retorna';
			$json['usuario'][]=$resulta;
			echo json_encode($json);
		}

?>