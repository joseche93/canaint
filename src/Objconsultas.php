<?php  
include('conexion.php');
	echo "hola mundo";
	$frac=$_POST['fraccion'];
	$cap=$_POST['capitulo'];
	$part=$_POST['partida'];
	$subpart=$_POST['subpartida'];
	$pe=$_POST['PE'];

/*
$frac=isset($_POST['fraccion'])?$_POST['fraccion']:'no existe el valor';
$cap=isset($_POST['capitulo'])?$_POST['capitulo']:'no existe el valor';
$part=isset($_POST['partida'])?$_POST['partida']:'no existe el valor';
$subpart=isset($_POST['subpartida'])?$_POST['subpartida']:'no existe el valor';
$pe=$frac=isset($_POST['fraccion'])?$_POST['fraccion']:'no existe el valor';
*/




	class consultas{


		public function ReadRegistros(){
			global $db;
			$sql= "SELECT sum(DOLARES) as VALOR, sum(CANTIDAD) as VOLUMEN, VALOR/VOLUMEN AS PrecioMedio   from `2015` where 
			FRACCION = '$frac' and CAPITULO = '$cap' and PARTIDA='$part' and SUBPARTIDA='$subpart' and PE= '$pe'  ";
			$result= $db->query($sql);

			if($result->num_rows>0){
				
				$listar="";

				while($row=$result->fetch_assoc()){
					$listar= 
						"<tr>
							<td>".$result['VALOR']."</td>
							<td>".$result['VOLUMEN']."</td>
							<td>".$result['PrecioMedio']."</td>
						</tr>";

				}
					$tabla= "<table>
								<th>
									<td>Valor(dls)</td>
									<td>Volumen(m2)</td>
									<td>Precio Medio(dls/m2)</td>
								</th>"
								.$listar.
							"</table>";

					echo $tabla;

			
			}
			else{
				return false;
			}

		}
	}