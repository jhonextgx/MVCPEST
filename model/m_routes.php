<?php

class Rutas
{
	private $pdo;
    
    public $id;
    public $prop;
    public $dater;
	public $time;
	public $manager;
    public $total_units;
    public $units_month;
    public $status;
	public $observacion;
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

			$stm = $this->pdo->prepare("SELECT * FROM troutes_cli");
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
			          ->prepare("SELECT * FROM troutes WHERE id = ?");
			          

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
			            ->prepare("DELETE FROM troutes_cli WHERE id = ?");			          

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
			$sql = "UPDATE troutes_cli SET 
						prop           = ?, 
						dater           = ?, 
						total_units        = ?,
                        units_month       = ?,
						status    = ?,
						observacion = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->prop, 
                        $data->dater,
                        $data->total_units,
                        $data->units_month,
                        $data->status,
						$data->observacion,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Rutas $data)
	{
		try 
		{
		$sql = "INSERT INTO tusuario (prop,dater,total_units,units_month,status,observacion) 
		        VALUES (?, ?, ?, ?, ?, ?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                       $data->prop, 
                        $data->dater,
                        $data->total_units,
                        $data->units_month,
                        $data->status,
						$data->observacion
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}