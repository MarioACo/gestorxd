<?php

    class Conectar{
        public function conexion(){
            /*$servidor = "localhost";
            $usuario = "root";
            $password = "";
            $base = "gestor";*/
            $servidor = "mysql5046.site4now.net";
            $usuario = "a75039_gestor";
            $password = "Mafer180899";
            $base = "db_a75039_gestor";

            $conexion = mysqli_connect($servidor,
                                        $usuario,
                                        $password,
                                        $base);
            $conexion->set_charset('utf8mb4');

            return $conexion;
        }
    }



?>
