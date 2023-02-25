<?php
include ('detalle.php');
class Invoice{
	private $host  = 'localhost';
    private $user  = 'root';
    private $password   = "";
    private $database  = "dbcarrito";   
	private $invoiceUserTable = 'usuario';
	private $invoiceOrderProduct = 'producto';	
    private $invoiceOrderTable = 'factura_orden';
	private $invoiceOrderItemTable = 'factura_orden_producto';
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
			die('Error in query: '. mysqli_error());
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
	public function loginUsers($email, $password){
		$sqlQuery = "
			SELECT id, nombre, telefono, fecha, correo_admin, codigo 
			FROM ".$this->usuario." 
			WHERE nombre='".$nombre."' AND correo='".$correo."'";
        return  $this->getData($sqlQuery);
	}	
	public function checkLoggedIn(){
		if(!$_SESSION['nombre']) {
			header("Location:index.php");
		}
	}

	public function selectProd(){
		if(!$_SESSION['detalle']) {
			header("Location:detalle.php"); 
	}		
	public function saveInvoice($POST) {		
		$sqlInsert = "
			INSERT INTO ".$this->invoiceOrderTable."(id, order_total_before_tax) 
			VALUES ('".$POST['id']."','".$POST['total']."')";		
		mysqli_query($this->dbConnect, $sqlInsert);
		$lastInsertId = mysqli_insert_id($this->dbConnect);
		for ($i = 0; $i < count($POST['producto']); $i++) {
			$sqlInsertItem = "
			INSERT INTO ".$this->invoiceOrderItemTable."(order_id,item_name, order_item_quantity, order_item_price, order_item_final_amount) 
			VALUES ('".$lastInsertId."', '".$POST['producto'][$i]."', '".$POST['cantidad'][$i]."', '".$POST['precio'][$i]."', '".$POST['subtotal'][$i]."')";			
			mysqli_query($this->dbConnect, $sqlInsertItem);
		}       	
	}	
	
}
 }
?>