<!DOCTIPE html>
<html lang="es">
<head>
	<title>Instituto Nacional de Comercio INCOS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css2/demo.css">
    <link rel="stylesheet" href="dist/ladda.min.css">
</head>
<body>
    <header>
         <h1>Instituto Nacional de Comercio INCOS</h1>
    </header>

    

    <div id="nav">
    <div id="nav_wrapper">
        <ul>
            <li><a href="materias.php">HISTORIA</a>
            </li>
            <li> <a href="Galeria.html">FOTOGRAFIAS</a>
            </li>
            <li> <a href="#">CARRERAS</a>

                <ul>
                    <li><a href="Sistemas.html">Analisis de sistemas</a>
                    </li>
                    <li><a href="Contabilidad.html">Contaduria Pública</a>
                    </li>
                    <li><a href="secretariado.html">Secretariado</a>
                    </li>
                    <li><a href="Gatronomia.html">Gastronomia</a>
                    </li>
                     
                </ul>
                </li>
            <li> <a href="estudiantes.html">ESTUDIANTES</a>
            <li> <a href="inscripciones.php">INSCRIPCIONES</a>    
            </li>
            
            
        </ul>
    </div>
</div>




   
    <section>

    <form id="formulario" method="post" action="./login/verificar.php">
        <?php 
        if(isset($_GET['error']))
        {
            echo '<center>Datos No Validos</center>';
        }
        ?>

        <label for="usuario">Usuario</label><br>
        <input type="text" id="usuario" name="Usuario" placeholder="usuario" ><br>
        <label for="password">Password</label><br>
        <input type="password" id="password" name="Password" placeholder="password" ><br>
        <br>
        <input type="submit" name="aceptar" value="Aceptar" class="aceptar">


    </form>


    	<article id="historia">
    		<h1>GASTRONOMÍA</h1>
            <p>El licenciado en gastronomía titulado, es un profesional que contará con las competencias necesarias para la administración de los establecimientos de alimentos y bebidas turísticas, hospitalarias y comedores industriales, vinculando la gastronomía, el tiempo libre, la recreación y el turismo; así como la elaboración, diseño y presentación de platos dietéticos Internacionales y nacionales, con sanidad e higiene.
            <a href="Gastronomia.html"> más..!!</a></p>
        
           

            <h1>ANALISTA DE SISTEMAS</h1>
            <p>	El analista en Sistemas del Incos implementa sistemas integrados de información de variada complejidad, en diferentes niveles de organización.
            Dirige centros informáticos de diversas aplicaciones como investigador en el campo de los sistemas y tecnología informática
            Imparte docencia universitaria, ejerce la profesión libre, y realiza consultorías en Ingeniería de Sistemas.
            Desarrollo web y consultoria.
            El diseño de base de datos y conectividad de redes.
            <a href="Sistemas.html"> más..!!</a></p>

            <h1>SECRETARIADO</h1>
            <p> El Abogado está preparado para desarrollar la actividad jurídica en todos los perfiles laborales del que hacer nacional e internacional. Presta asistencia o asesoría a instituciones públicas y privadas, en acciones judiciales de derecho civil, penal, social o administrativo, garantizando en su tratamiento los más altos principios éticos. Desempeña funciones de Notario, fiscal, Juez, Legislador o cualquier otra función relacionado con la aplicación de las normas jurídicas.
                <a href="secretariado.html"> más..!!</a></p>

            <h1>CONTABILIDAD GENERAL</h1>
            <p>	El Licenciado de Contaduría Pública, satisface las necesidades de información financiera y de auditoría correcta, clara y oportuna.
            Administra y protege los intereses de las organizaciones aportando elementos de juicio para la toma de decisiones. 
            Responde al ejercicio profesional con aptitudes, habilidades y conocimientos de respeto y observancia a los cánones éticos.
            <a href="Contabilidad.html"> más..!!</a></p>

    	</article>
    </section>
    <footer>
    	<RIGHT>Creado por Cristian Monrroy Fuentes 2015</RIGHT>
    </footer>
</body>
</html>