<?php
        function obtenerMarca () {

        include 'admin/conex.php';

        $query = "SELECT * FROM `marcas`";
        $result = mysqli_query($conn, $query);

        $json = array();

        while($row = mysqli_fetch_array($result)){
            $json[] = array(

                'codId' => $row['id'],
                'nomMarca' => $row['marca'], 

            );

        }
        $jsonstring = json_encode($json);
        echo $jsonstring;
    }
?>