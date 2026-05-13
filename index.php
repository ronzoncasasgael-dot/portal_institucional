<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Portal Institucional - CBTis 165</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

<header>
    <div class="overlay"></div>

    <div class="contenido-header">
        <div class="logos">
            <img src="dgeti.png" class="logo">
        </div>

        <h1>CBTis 165</h1>
        <p class="subtitulo">"Leona Vicario" - Coatepec, Veracruz</p>
    </div>
</header>

<nav>
    <a href="#academico">Académico</a>
    <a href="#salud">Salud</a>
    <a href="#ambiental">Ambiental</a>
    <a href="#emprendimiento">Emprendimiento</a>
    <a href="#clubes">Clubes</a>
    <a href="#tabla">Programas</a>
</nav>

<section class="hero">
    <h2>Excelencia Educativa</h2>

    <p>
        Impulsamos el talento de nuestra comunidad estudiantil a través de programas 
        integrales que combinan la innovación tecnológica con el compromiso social 
        y los valores de la institución.
    </p>
</section>

<main>

<section id="academico" class="card">
    <img src="academico.jpeg" class="imagen">
    <div>
        <h2>Fortalecimiento Académico</h2>
        <p><strong>SINATA:</strong> Sistema Nacional de Tutorías Académicas para prevenir el rezago y asegurar tu éxito escolar.</p>
        <p><strong>PRONAFOLE:</strong> Programa Nacional de Fomento a la Lectura para desarrollar habilidades críticas y creativas.</p>
    </div>
</section>

<section id="salud" class="card">
    <img src="salud.jpeg" class="imagen">
    <div>
        <h2>Vida Saludable</h2>
        <p><strong>FOMALASA:</strong> Fomento a los Estilos de Vida Saludable, promoviendo nutrición, prevención y bienestar emocional.</p>
        <p>Atención integral para el desarrollo físico de nuestros jóvenes linces.</p>
    </div>
</section>

<section id="ambiental" class="card">
    <img src="ambiental.jpeg" class="imagen">
    <div>
        <h2>Cultura y Medio Ambiente</h2>
        <p><strong>ECALE:</strong> Encuentros de Arte y Cultura para la expresión de talentos estudiantiles.</p>
        <p><strong>AMA-DGETI:</strong> Acciones de Mitigación Ambiental para fomentar una conciencia ecológica y sustentable en el plantel.</p>
    </div>
</section>

<section id="emprendimiento" class="card">
    <img src="emprendimiento.jpeg" class="imagen">
    <div>
        <h2>Innovación y Liderazgo</h2>
        <p><strong>MEEMS:</strong> Modelo de Emprendedores de la Educación Media Superior para convertir tus ideas en proyectos reales.</p>
        <p>Impulsamos la formación de líderes con visión empresarial y social.</p>
    </div>
</section>

<section id="clubes" class="card">
    <img src="clubes.jpeg" class="imagen">
    <div>
        <h2>Clubes Extracurriculares</h2>
        <p>Participa en nuestras selecciones deportivas, banda de guerra, escolta y clubes de ciencia y tecnología.</p>
        <p>El aprendizaje en el CBTis 165 va mucho más allá del salón de clases.</p>
    </div>
</section>

<section id="tabla" class="tabla-section">

    <h2>Programas y Especialidades</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Categoría</th>
                <th>Programa</th>
                <th>Descripción</th>
                <th>Titular</th>
                <th>Requisitos</th>
            </tr>
        </thead>

        <tbody>

        <?php
        include("conexion.php"); //Llamar al archivo conexión
        $fila = "";

        $res = $con->query("SELECT * FROM catalogo_apoyos");
        while($fila = $res->fetch_assoc()){
            echo "
            <tr>
                <td>".$fila['cod_ref']."</td>
                <td>".$fila['categoria']."</td>
                <td>".$fila['nombre_doc']."</td>
                <td>".$fila['resumen']."</td>
                <td>".$fila['titular']."</td>
                <td>".$fila['condiciones']."</td>
            </tr>
            ";
        }
        ?>

        </tbody>
    </table>
</section>

<section id="opinion" class="formulario">

    <h2>Buzón de Sugerencias</h2>

    <form method="POST" action="index.php">

        <input type="text" name="nombre" placeholder="Nombre completo" required>

        <select name="opinion">
            <option value="Si">¿Recomiendas el portal? Sí</option>
            <option value="No">¿Recomiendas el portal? No</option>
        </select>

        <input type="submit" name="guardar" value="Enviar Comentario">

    </form>

</section>

</main>

<footer>
    <p>CBTis No. 165 "Leona Vicario"</p>
    <p>Orgullosamente DGETI - 2026</p>
</footer>
<?php
	include("Conexion.php"); //Llamar al archivo conexión
	$nombre = "";
    $opinion = "";

	if(isset($_POST['guardar'])){
		$nombre = ($_POST['nombre_usuario']);
		$opinion = ($_POST['comentario']);
		
		//Sentencia sql
		$sql = "INSERT INTO comentario(nombre_usuario, comentario) VALUES('$nombre', '$opinion')";
		
		//Consulta
		$query = mysqli_query($con, $sql);
		
		if($query){
			echo "<script>alert('¡Opinion enviada!');</script>";
		}
		else{
			echo "Error: " . $con->error;
		}
	}
?>
</body>
</html>
