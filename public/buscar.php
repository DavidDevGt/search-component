<?php

require_once '../classes/BuscadorCursos.php';

$palabraClaveParaBuscar = $_GET["palabraClave"] ?? "";

$buscadorDeCursos = new BuscadorCursos();

$cursos = [
    ["Desarrollo Web con HTML", "Aprende desarrollo web con HTML desde cero."],
    ["PHP Básico", "Inicia tu aprendizaje con PHP desde lo más básico."],
    ["PHP y MySQL", "Aprende a construir aplicaciones web dinámicas con PHP y MySQL."],
    ["Introducción a CSS", "Descubre cómo estilizar tus aplicaciones web con CSS."],
    ["CSS Grid y Flexbox", "Aprende a crear layouts modernos con CSS Grid y Flexbox."],
    ["JavaScript para Principiantes", "Introducción completa al lenguaje de programación JavaScript."],
    ["JavaScript Asíncrono", "Entiende las promesas, async/await y la programación asíncrona en JavaScript."],
    ["Node.js desde Cero", "Construye aplicaciones backend utilizando JavaScript y Node.js."],
    ["Express.js Fundamentos", "Crea aplicaciones web robustas con el framework Express.js en Node.js."],
    ["Kubernetes en Práctica", "Aprende a gestionar contenedores con Kubernetes."]
];


/* El bucle `foreach` está iterando sobre la matriz ``, que contiene información sobre
diferentes cursos. */
foreach ($cursos as $cursoInfo) {
    $buscadorDeCursos->agregarCurso(new Curso($cursoInfo[0], $cursoInfo[1]));
}

$resultadosDeBusqueda = $buscadorDeCursos->buscar($palabraClaveParaBuscar);

/* El código es responsable de mostrar los resultados de la búsqueda en la página web. */
echo "<h2>Resultados para: {$palabraClaveParaBuscar}</h2>";
foreach ($resultadosDeBusqueda as $cursoEncontrado) {
    echo "<h3>" . $cursoEncontrado->titulo . "</h3>";
    echo "<p>" . $cursoEncontrado->contenido . "</p>";
}
