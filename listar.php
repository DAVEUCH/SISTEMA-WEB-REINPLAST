<?php

class listar{
	private $host  = 'localhost';
    private $user  = 'root';
    private $password   = "";
    private $database  = "dbcarrito";   
	private $listarpedido = 'factura_orden_producto';	
	private $dbConnect = false;
    public function __construct(){
        if(!$this->dbConnect){ 
            $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
            if($conn->connect_error){
                die("Error failed to connect to MySQL: " . $conn->connect_error);
            }else{
                $this->dbConnect = $conn;
            }
        }
    }
private function getData($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error en query: '. mysqli_error());
		}
		$data= array();
		while ($row = mysqli_fetch_assoc($result)) {
			$data[]=$row;            
		}
		return $data;
}

private function getNumRows($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$numRows = mysqli_num_rows($result);
		return $numRows;
	}
	public function getInvoiceList(){
		$sqlQuery = "
			SELECT * FROM ".$this->listarpedido." 
			WHERE nombre_usu = '".$_SESSION['nombre']."'";
		return  $this->getData($sqlQuery);
	}
	

		public function deleteInvoice($item_id){
		$sqlQuery = "
			DELETE FROM ".$this->listarpedido." 
			WHERE item_id = '".$item_id."'";
		mysqli_query($this->dbConnect, $sqlQuery);	
		
	
	}
	public function getInvoice($item_id){
		$sqlQuery = "
			SELECT * FROM ".$this->listarpedido." 
			WHERE nombre_usu = '".$_SESSION['nombre']."' AND item_id = '$item_id'";
		$result = mysqli_query($this->dbConnect, $sqlQuery);	
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	public function Eliminar($id){
		try 
		{
			$stm = $this->dbConnect
			          ->prepare("DELETE FROM factura_orden_producto WHERE item_id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $conn) 
		{
			die($conn->getMessage());
		}
		}
		



	
		public function getInvoiceItems($item_id){
		$sqlQuery = "
			SELECT * FROM ".$this->listarpedido." 
			WHERE item_id = '$item_id'";
		return  $this->getData($sqlQuery);	
	}

	

	public function validar_usuario(){
		if(!$_SESSION['nombre']) {
			header("Location:index.php");
		}
	}		
}
  ?>