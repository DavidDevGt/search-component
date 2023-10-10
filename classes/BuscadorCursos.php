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

    public function agregarCurso(Curso $curso)
    {
        $this->cursos[] = $curso;
    }

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