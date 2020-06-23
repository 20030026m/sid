<?php
class Usuarios
{
    private static $instancia;
    private $dbh;
 
    private function __construct()
    {
        try {
            $this->dbh = new PDO('mysql:host=localhost;dbname=sid', 'root', '');
            $this->dbh->exec("SET CHARACTER SET utf8");
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage();
            die();
        }
    }
 
    public static function singleton()
    {
        if (!isset(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
        }
        return self::$instancia;
    }
 
    public function get_Usuario($usuario,$contrasenia)
    {
        try {
            $query = $this->dbh->prepare("SELECT * FROM usuarios WHERE nombre LIKE ? AND contra LIKE ?");
                         $query->bindParam(1, $usuario);
                        $query->bindParam(2, $contrasenia);
            $query->execute();
            return $query->fetchAll();
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
    public function get_Docentes()
    {
        try {
            //$query = $this->dbh->prepare("SELECT * FROM usuarios WHERE nombre LIKE ? AND password LIKE ?");
            $query = $this->dbh->prepare("SELECT * FROM usuarios");
                         //$query->bindParam(1, $usuario);
                        //$query->bindParam(2, $contrasenia);
            $query->execute();
            return $query->fetchAll();
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function insert_datos($nombre, $usuario, $contrasenia)
    {
        try {
            $query = $this->dbh->prepare("INSERT INTO guia VALUES (NULL, ?, ?, ?)");
            $query->bindParam(1, $nombre);
            $query->bindParam(2, $usuario);
            $query->bindParam(3, $contrasenia);
            $query->execute();
            $this->dbh = null;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function get_Jefes()
    {
        try {
            //$query = $this->dbh->prepare("SELECT * FROM usuarios WHERE nombre LIKE ? AND password LIKE ?");
            $query = $this->dbh->prepare("SELECT * FROM usuarios WHERE privilegio = 2");
                         //$query->bindParam(1, $usuario);
                        //$query->bindParam(2, $contrasenia);
            $query->execute();
            return $query->fetchAll();
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
     public function delete_U($id)
    {
        try {
                        $query = $this->dbh->prepare("DELETE FROM usuarios WHERE ID = ?");
            $query->bindParam(1, $id);
            $query->execute();
            $this->dbh = null;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
    public function update_U($nombre,$usuario, $contrasenia,$id)
    {
        try {
                        $query = $this->dbh->prepare("UPDATE usuarios SET nombre = ?, privilegio = ?, password = ? WHERE id = ?");
            $query->bindParam(1, $nombre);
            $query->bindParam(2, $usuario);
            $query->bindParam(3, $contrasenia);
            $query->bindParam(4, $id);
            $query->execute();
            $this->dbh = null;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
    public function get_PrivilegioU($usuario,$contrasenia)
    {
        try {
            $query = $this->dbh->prepare("SELECT * FROM usuarios WHERE nombre LIKE ? AND password LIKE ? AND privilegio = 1");
                         $query->bindParam(1, $usuario);
                        $query->bindParam(2, $contrasenia);
            $query->execute();
            return $query->fetchAll();
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function get_PrivilegioD($usuario,$contrasenia)
    {
        try {
            $query = $this->dbh->prepare("SELECT * FROM usuarios WHERE nombre LIKE ? AND password LIKE ? AND privilegio = 2");
                         $query->bindParam(1, $usuario);
                        $query->bindParam(2, $contrasenia);
            $query->execute();
            return $query->fetchAll();
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }
 
    public function delete_usuario($id)
    {
        try {
						$query = $this->dbh->prepare("DELETE FROM usuario WHERE ID = ?");
            $query->bindParam(1, $id);
            $query->execute();
            $this->dbh = null;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
 
    public function insert_U($usuario, $contrasenia)
    {
        try {
            $query = $this->dbh->prepare("INSERT INTO usuarios VALUES (NULL, ?, ?, 1)");
            $query->bindParam(1, $usuario);
            $query->bindParam(2, $contrasenia);
            $query->execute();
            $this->dbh = null;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
 
    public function update_escuela($nombre,$usuario, $contrasenia,$id)
    {
    	try {
						$query = $this->dbh->prepare("UPDATE usuario SET Nombre = ?, Usuario = ?, Contrasenia = ? WHERE id_Usuario = ?");
            $query->bindParam(1, $nombre);
            $query->bindParam(2, $usuario);
            $query->bindParam(3, $contrasenia);
	    $query->bindParam(4, $id);
            $query->execute();
            $this->dbh = null;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
 
    public function __clone()
    {
        trigger_error('La clonación no es permitida!.', E_USER_ERROR);
    }
}
?>