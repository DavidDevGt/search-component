<?php

class Curso
{
    public $titulo;
    public $contenido;

    public function __construct($titulo, $contenido)
    {
        $this->titulo = $titulo;
        $this->contenido = $contenido;
    }
}

class BuscadorCursos
{
    private $cursos = [];

    /**
     * La función "agregarCurso" agrega un objeto de curso a un conjunto de cursos.
     * 
     * Args:
     *   curso (Curso): El parámetro "curso" es de tipo "Curso".
     */
    public function agregarCurso(Curso $curso)
    {
        $this->cursos[] = $curso;
    }

    /**
     * La función "buscar" busca cursos que contengan una determinada palabra clave en su título o
     * contenido.
     * 
     * Args:
     *   palabraClave: El parámetro "palabraClave" representa la palabra clave o término de búsqueda
     * que se utiliza para buscar cursos.
     * 
     * Returns:
     *   una variedad de cursos que coinciden con la palabra clave dada.
     */
    public function buscar($palabraClave)
    {
        $resultados = [];
        foreach ($this->cursos as $curso) {
            if (
                strpos(strtolower($curso->titulo), strtolower($palabraClave)) !== false ||
                strpos(strtolower($curso->contenido), strtolower($palabraClave)) !== false
            ) {
                $resultados[] = $curso;
            }
        }
        return $resultados;
    }
}