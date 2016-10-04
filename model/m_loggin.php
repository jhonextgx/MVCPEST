<?php
//require_once 'm_database.php';
class Loggin
{
	private $pdo;
    
    public $id;
    public $email;
    public $login;
    public $password;
    public $status_id;
    public $user_type_id;
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
	
	private function logueo_usuario($user, $pass){		
		try{
			 $stm = $this->pdo->prepare("SELECT status_id, user_type_id FROM tusuario WHERE login=? and password=?");
			 $stm->execute(array($user, $pass));
			 return $stm->fetch(PDO::FETCH_OBJ);
			
			}catch(Exception $e){			
				die($e->getMessage());
			}					
	}


	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tusuario");
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
			          ->prepare("SELECT * FROM tusuario WHERE id = ?");
			          

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
			            ->prepare("DELETE FROM tusuario WHERE id = ?");			          

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
			$sql = "UPDATE tusuario SET 
						email           = ?, 
						login           = ?, 
						password        = ?,
                        status_id       = ?,
						user_type_id    = ? 
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->email, 
                        $data->login,
                        $data->password,
                        $data->status_id,
                        $data->user_type_id,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Alumno $data)
	{
		try 
		{
		$sql = "INSERT INTO tusuario (email,login,password,status_id,user_type_id) 
		        VALUES (?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->email,
                    $data->login, 
                    $data->password, 
                    $data->status_id,
                    $data->user_type_id
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}