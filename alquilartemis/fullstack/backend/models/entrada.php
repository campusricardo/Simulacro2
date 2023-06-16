
<?php 
require_once("./../config/connect.php");


class Entrada extends Connect {
    private $entrada_id;
    private $id_empleado;
    private $id_constructora;
    private $fecha_entrega;
    private $observaciones;

    public function __construct($entrada_id = 0 ,  $id_empleado = "", $id_constructora = 0, $fecha_entrega = "", $observaciones = "", $dbCnx= ""){
        $this->entrada_id = $entrada_id;
        $this->id_empleado = $id_empleado;
        $this->id_constructora = $id_constructora;
        $this->fecha_entrega = $fecha_entrega;
        $this->observaciones = $observaciones;
        parent::__construct($dbCnx);
    }

    public function getIdEntrada(){
        return $this->entrada_id;
    }
////
    public function setIdEntrada($entrada_id){
        $this->entrada_id = $entrada_id;
    }
////
    public function getIdEmpleado(){
        return $this->id_empleado;
    }

    public function setIdEmpleado($id_empleado){
        $this->id_empleado = $id_empleado;
    }
////
    public function getIdConstructora(){
        return $this->id_constructora;
    }

    public function setIdConstructora($id_constructora){
        $this->id_constructora = $id_constructora;
    }
////
    public function getFechaDeEntrega(){
        return $this->fecha_entrega;
    }

    public function setFechaDeEntrega($fecha_entrega){
        $this->$fecha_entrega = $fecha_entrega;
    }
////
    public function getobservaciones(){
        return $this->observaciones;
    }

    public function setobservaciones($observaciones){
        $this->observaciones = $observaciones;
    }



    public function AddData() {
        try {
         $stm = $this->dbCnx->prepare("INSERT INTO entrada(id_empleado, id_constructora, fecha_entrega, observaciones ) VALUES (?,?,?,?)");
         $stm->execute([$this->id_empleado, $this->id_constructora, $this->fecha_entrega, $this->observaciones]);
        } catch (Exception $e) {
         return $e->getMessage();
     }
     }
 
 
 
     public function obtainData(){
         try {
             $stm = $this -> dbCnx -> prepare("SELECT * FROM entrada");
             $stm -> execute();
             return $stm -> fetchAll();
         } catch (Exception $e) {
             return $e->getMessage();
         }
     }
 
     
     public function selectOne(){
         try {
             $stm = $this->dbCnx->prepare("SELECT * FROM entrada WHERE entrada_id=?");
             $stm-> execute([$this-> entrada_id]);
             return $stm-> fetchAll();
         } catch (Exception $e) {
             return $e-> getMessage();
         }
     }

}
?>