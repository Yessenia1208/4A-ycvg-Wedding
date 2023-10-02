<?php  
class ControladorFromularios{


    static public function ctrRegistro(){
        if(isset($_POST["registroNombre"])){

            $tabla = "wedding";

            $datos = array(
                "nombre" => $_POST["registroNombre"],
                "email" => $_POST["registroEmail"],
                "password" => $_POST["registroPassword"]
            );
            $respuesta = ModeloFormularios:: mdlRegistro($tabla, $datos);

            return $respuesta;
        }
    }

    static public function ctrSeleccionarRegistros($item, $valor){
        
        $tabla = "wedding";

        $respuesta  = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);
        return $respuesta;
    }

    static public function ctrIngreso(){
        if(isset($_POST["ingresoEmail"])){
            $tabla = "wedding";
            $item = "email";
            $valor = $_POST["ingresoEmail"];

            $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

            //echo "<prep>"; print_r($respuesta); echo "</prep>";
            if (is_array($respuesta)) {
                if (
                    $respuesta["email"] == $_POST["ingresoEmail"] &&
                    $respuesta["password"] == $_POST["ingresoPassword"]
                ) {

                    $_SESSION["validarIngreso"] = "ok";

                    echo '<script>
                            if (window.history.replaceState){
                            window.history.replaceState(null, null, window.location.href);
                            }
                            window.location = "index.php?wedding=home";
                        </script>';
                } else {
                    echo '<script>
                        if (window.history.replaceState){
                            window.history,replaceState(null, null, window.location.href);
                        }
                        </script>';
                    echo '<div class="alert alert-danger">Error! EMAIL o CONTRASEÑA incorrectas</div>';
                }
            } else {
                echo '<script>
                        if (window.history.replaceState){
                            window.history,replaceState(null, null, window.location.href);
                        }
                        </script>';
                echo '<div class="alert alert-danger">Error! EMAIL o CONTRASEÑA incorrectas</div>';
            }
        }
    
    }

    static public function ctrActualizarRegistro(){
        if(isset($_POST["actualizarNombre"])){

            if($_POST["actualizarPassword"] !=""){
                $password = $_POST["actualizarPassword"];
            } else {
                $password = $_POST["passwordActual"];
            }

            $tabla = "wedding";


            $datos = array(
                "id" => $_POST["idUsuario"],
                "nombre" => $_POST["actualizarNombre"],
                "email" => $_POST["actualizarEmail"],
                "password" => $password
            );

            $respuesta = ModeloFormularios::mdlActualizarRegistro($tabla, $datos);

            
            return $respuesta;

        }
    }

    public function ctrEliminarRegistro(){
        if(isset($_POST["eliminarRegistro"])){
            $tabla = "wedding";
            $valor = $_POST["eliminarRegistro"];


            $respuesta = ModeloFormularios::mdlEliminarRegistro($tabla, $valor);


            if($respuesta == "ok"){
                echo '<script>
                        if (window.history.replaceState){
                            window.history,replaceState(null, null, window.location.href);
                        }
                        window.location = "index.php?wedding=home";
                        </script>';
            }


        }
    }

    }
