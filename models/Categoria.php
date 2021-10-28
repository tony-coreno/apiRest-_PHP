<?php

    class Categoria extends Conectar{
        
        public function getCategoria(){

            $conectar = parent::conexion();
            parent::setNames();
            $sql = "SELECT * FROM categoria";
            $sql = $conectar->prepare($sql);
            $sql->execute();
            return $resultado = $sql -> fetchAll(PDO::FETCH_ASSOC);
        }
    }