<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 05/04/2018
 * Time: 11:19 AM
 */

namespace Usuario;


class usuario
{
    private $nombre;
    private $apellido;
    private $usuario;
    private $pass;
    private $correo;
    private $telefono;
    private $lema;
    private $logo;

    function __construct($nombre,$apellido,$usuario,$pass,$correo,$telefono,$lema,$logo)
    {
        $this->nombre;
        $this->apellido;
        $this->usuario;
        $this->pass;
        $this->correo;
        $this->telefono;
        $this->lema;
        $this->logo;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @return mixed
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @return mixed
     */
    public function getLema()
    {
        return $this->lema;
    }

    /**
     * @return mixed
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @param mixed $pass
     */

    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    /**
     * @param mixed $correo
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    /**
     * @param mixed $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * @param mixed $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    /**
     * @param mixed $lema
     */
    public function setLema($lema)
    {
        $this->lema = $lema;
    }
}