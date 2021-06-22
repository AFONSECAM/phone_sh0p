<?php
include_once("class_conection.php");

class Battery extends Conection
{
    public $capacidad;
    public $conexion_bd;

    function __construct()
    {
        $this->conexion_bd = new Conection();
        $this->conexion_bd = $this->conexion_bd->connect();
    }

    function createBatery($cap)
    {
        $query = "INSERT INTO tb_battery (capacity) VALUES(?)";
        $insert = $this->conexion_bd->prepare($query);
        $data = array($cap);
        $insert->execute($data);
    }

    function showBatteries()
    {
        $query_show = "SELECT * FROM tb_battery";
        $consulta = $this->conexion_bd->query($query_show);
        $response = $consulta->fetchall(PDO::FETCH_ASSOC);
        return $response;
    }

    function searchById($id)
    {
        $queryById = "SELECT * FROM tb_battery WHERE id_battery = ?";
        $consulta = $this->conexion_bd->prepare($queryById);
        $arrayId = array($id);
        $consulta->execute($arrayId);
        $response = $consulta->fetch(PDO::FETCH_ASSOC);
        return $response;
    }

    function updateBattery($id, $cap)
    {
        $this->capacidad = $cap;
        $queryUpdate = "UPDATE tb_battery SET capacity = ? WHERE id_battery = " . $id;
        $update = $this->conexion_bd->prepare($queryUpdate);
        $data = array($this->capacidad);
        $response = $update->execute($data);
        return "Actualizado con exito, para verificar de <a href='../battery/show_bateries.php'>clíc aquí</a>";
    }

    function deleteBattery($id)
    {
        $queryDelete = "DELETE FROM tb_battery WHERE id_battery = ?";
        $delete = $this->conexion_bd->prepare($queryDelete);
        $arrayDelete = array($id);
        $delete->execute($arrayDelete);
        return "Eliminado con exito, para verificar de <a href='../battery/show_bateries.php'>clíc aquí</a>";
    }
}