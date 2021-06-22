<?php

include_once("class_conection.php");

class Color extends Conection
{

    private $color;
    private $conexion_bd;

    function __construct()
    {
        $this->conexion_bd = new Conection();
        $this->conexion_bd = $this->conexion_bd->connect();
    }

    function createColor($color_name)
    {
        $this->color = $color_name;
        $query = "INSERT INTO tb_color (color_name) VALUES(?)";
        $insert = $this->conexion_bd->prepare($query);
        $data = array($color_name);
        $insert->execute($data);
    }

    function showColors()
    {
        $queryShow = "SELECT * FROM tb_color ORDER BY color_name ASC";
        $consulta = $this->conexion_bd->query($queryShow);
        $response = $consulta->fetchall(PDO::FETCH_ASSOC);
        return $response;
    }

    function searchById($id)
    {
        $queryById = "SELECT id_color, color_name FROM tb_color WHERE id_color = ?";
        $consulta = $this->conexion_bd->prepare($queryById);
        $arrayId = array($id);
        $consulta->execute($arrayId);
        $response = $consulta->fetch(PDO::FETCH_ASSOC);
        return $response;
    }

    function updateColor($id, $color_name)
    {
        $this->color = $color_name;
        $queryUpdate = "UPDATE tb_color SET color_name = ? WHERE id_color = " . $id;
        $update = $this->conexion_bd->prepare($queryUpdate);
        $data = array($this->color);
        $response = $update->execute($data);
        return "Actualizado con exito, para verificar de <a href='../color/show_colors.php'>clíc aquí</a>";
    }
}