<?php  

require_once "conexion.php";

class ModeloFormularios{
    /**
        *registro 
     */
    static public function mdlRegistro($tabla, $datos){
        #statement: declaración de una instrucción

        $stm = Conexion:: conectar() -> prepare ("INSERT INTO $tabla (nombre, email, password) 
        VALUES (:nombre, :email, :password)");

        $stm -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stm -> bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stm -> bindParam(":password", $datos["password"], PDO::PARAM_STR);

        if($stm -> execute()){
            return "ok";
        } else {
            print_r (Conexion::conectar() -> errorInfo());
        }

        //$stm -> close();

        $stm = null;

    }

    static public function mdlSeleccionarRegistros($tabla, $item, $valor){
        if ($item == null && $valor == null){
            $stmt = Conexion::conectar()->prepare(" SELECT *, 
                                                    DATE_FORMAT(fecha, '%d/%m/%Y') as f
                                                    FROM $tabla ORDER BY id DESC");
            $stmt->execute();

            return $stmt->fetchAll();
        } else{
            $stmt = Conexion::conectar()->prepare(" SELECT *, 
                                        DATE_FORMAT(fecha, '%d/%m/%Y') as f
                                        FROM $tabla WHERE $item = :$item
                                        ORDER BY id DESC");
            $stmt->bindParam(":$item", $valor, PDO::PARAM_STR);
            $stmt->execute();

            return $stmt->fetch();
        }
        

        //$stmt -> close();
        $stm = null;
    }

    static public function mdlActualizarRegistro($tabla, $datos){
        $stm = Conexion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre, 
        email=:email, password=:password WHERE id=:id");
    
        $stm->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stm->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stm->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stm->bindParam(":id", $datos["id"], PDO::PARAM_INT);
    
        if ($stm->execute()) {
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }
    
        $stm = null;
    }

    static public function mdlEliminarRegistro($tabla, $valor){
        $stm = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id=:id");
    
        $stm->bindParam(":id", $valor, PDO::PARAM_INT);
    
        if ($stm->execute()) {
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }
    
        $stm = null;
    }

}


?>