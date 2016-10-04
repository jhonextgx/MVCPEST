<?php

class Treatment
{
	private $pdo;
    
    public $id;
    public $qty_treatment;
	public $cf_chemical;
	public $cf_service;

	/**
	
	`id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `status_id` int(11) NOT NULL,
  `user_type_id` int(11) NOT NULL,
	*/

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM ttreatment");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	
	public function Listar_services()
	{/*obtener todas las unidades de medidas*/
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tservice");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	public function Listar_chemicals()
	{/*obtener todas las quimicos*/
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tchemical");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM ttreatment WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	
	public function Obtener_chemical($id)
	{/*obtener un quimico*/
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM tchemical WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	
	public function Obtener_service($id)
	{/*obtener un quimico*/
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM tservice WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM ttreatment WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE ttreatment SET 
						qty_treatment   = ?, 
						cf_chemical     = ?, 
						cf_service      = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(						
                        $data->qty_treatment, 
                        $data->cf_chemical,
                        $data->cf_service,
						$data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Treatment $data)
	{
		try 
		{
		$sql = "INSERT INTO ttreatment (qty_treatment,cf_chemical,cf_service) 
		        VALUES (?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                       $data->qty_treatment, 
                       $data->cf_chemical,
                       $data->cf_service
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	
	
}