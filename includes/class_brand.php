<?php
    include_once ("class_conection.php");

class Brand extends Conection
{
    private $nombre;
    private $tipo;
    private $conexion_bd;

    function __construct()
    {
        $this->conexion_bd = new Conection();
        $this->conexion_bd = $this->conexion_bd->connect();
    }

    function createBrand($nombre_form, $tipo_form)
    {
        $this->nombre = $nombre_form;
        $this->tipo = $tipo_form;

        $query = "INSERT INTO tb_brand (brand_name, type) VALUES(?,?);";
        $insert = $this->conexion_bd->prepare($query);
        $data_array = array($this->nombre, $this->tipo);
        $insert->execute($data_array);
        $last_id = $this->conexion_bd->lastInsertId();
        return $last_id;
    }

    function query_brand()
    {
        $query_brand_2 = "SELECT * FROM tb_brand";
        $query_brand_3 = $this->conexion_bd->prepare($query_brand_2);
        $result = $query_brand_3->fetchall(PDO::FETCH_ASSOC);
        return $result;
    }

    function update_brand($id_brand, $nombre_marca)
    {
        $this->mar = $nombre_marca;

            $query = "INSERT INTO tb_brand (brand_name, type) VALUES(?,?);";
            $insert = $this->conexion_bd->prepare($query);
            $data_array = array($this->nombre, $this->tipo);
            $insert->execute($data_array);
            $last_id = $this->conexion_bd->lastInsertId();
            return $last_id;
        }

        function showBrands(){
            $query_show = "SELECT * FROM tb_brand";
            $consulta = $this->conexion_bd->query($query_show);
            $response = $consulta->fetchall(PDO::FETCH_ASSOC);
            return $response;
        }

        function searchById($id){
            $queryById = "SELECT id_brand, brand_name, type FROM tb_brand WHERE id_brand = ?";
            $consulta = $this->conexion_bd->prepare($queryById);
            $arrayId = array($id);
            $consulta->execute($arrayId);
            $response = $consulta->fetch(PDO::FETCH_ASSOC);
            return $response;
        }

        function updateBrand($id, $name, $tipo){
            $this->nombre = $name;
            $this->tipo = $tipo;
            $queryUpdate = "UPDATE tb_brand SET brand_name = ?, type = ? WHERE id_brand = ". $id;
            $update = $this->conexion_bd->prepare($queryUpdate);
            $data = array($this->nombre, $this->tipo);
            $response = $update->execute($data);
            return "Actualizado con exito, para verificar de <a href='../brand/show_brands.php'>clíc aquí</a>";           
        }
    }
}