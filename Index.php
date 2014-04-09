<!DOCTYPE html>
<html>
<head>
    <title>Grupo 8</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<div id="contenido">
    <header>
        <div id="Titulo Principal">
            <h1>Tarea N°2</h1>
        </div>
        <nav>
            <ul>
                <li><a href='Index.php'>Jose Acuña</a></li>
            </ul>
        </nav>
    </header>
    <section>

        <div id='textopr'>
            <article>
                <div class="Foto"><img  style="float:right" src="http://localhost/Tarea1Ayudantia/Fotos/jose.jpg" alt ='jose' width='160' height='150'></div>

                <div id='NombreTitulo'>
                    <h1>José Acuña</h1>
                </div>
                <p>Nombre: Jose Acuña</p>
                <p> Rut:16.381.843-4</p>
                <p> Carrera:Ingenieria en Informatica.</p>
                <p>  Asignatura: Ingenieria en Software</p>
            </article>

            <div class="hr"><hr /></div>
            
	    		<article>
                <div class="Foto"><img  style="float:right" src="http://localhost/Tarea1Ayudantia/Fotos/luis.jpg" alt ='luis' width='160' height='150'></div>
                <div id='NombreTitulo'>
                    <h1>Luis Sandoval</h1>
                </div>
                <p>Nombre: Luis Sandoval</p>
                <p> Rut:17.771.450-k</p>
                <p> Carrera:Ingenieria en Informatica.</p>
                <p>  Asignatura: Ingenieria en Software</p>
            </article>
		</div>
            <aside>
                <p>
                    Visita Nuestro Repositorio <a href="https://github.com/joseacuna"> Github</a>
                </p>

            </aside>
    </section>
</div>
</body>

<footer>
    <p>
    <?
    $vector = array(
    1=>"”Siempre ha de haber dos, ni más ni menos. Un maestro, y un aprendiz.” Maestro Yoda.",
    2=>"”No lo intentes. Hazlo, o no lo hagas, pero no lo intentes.” Maestro Yoda",
    3=>"”Si hablas con Dios eres religioso, si Dios habla contigo, eres psicópata.”  Gregory House",
    4=>"”Gánate el respeto de los demás teniendo la osadía de ser tú mismo.”  Gregory House",
    5=>"”El amigo ha de ser como el dinero, que antes de necesitarlo, se sabe el valor que tiene.” Socrátes",
    6=>"” La ciencia humana consiste más en destruir errores que en descubrir verdades.” Socrátes",
    );
    $numero = rand(1,6);
    echo "$vector[$numero]";
    ?>
    </p>
</footer>
</html>