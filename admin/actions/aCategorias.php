<?php require_once 'model/mCategorias.php';
class aCategorias extends mCategorias{
    protected $sqlInsert = "INSERT INTO tbl_categorias(titulo) VALUES ('%s')";
    protected $sqlUpdate = "UPDATE tbl_categorias SET titulo='%s' WHERE id_categoria = '%s'";
    protected $sqlSelect = "SELECT * FROM tbl_categorias WHERE 1=1 %s %s";
    protected $sqlDelete = "DELETE FROM tbl_categorias WHERE id_categoria = '%s'";
     
    
    public function insert() {
        $sql = sprintf($this->sqlInsert, $this->getNome());
        return $this->RunQuery($sql);
    }
    public function update() {
        $sql = sprintf($this->sqlUpdate, $this->getNome());
        return $this->RunQuery($sql);
    }
    public function delete() {
        $sql = sprintf($this->sqlDelete, $this->getId_categoria());
        return $this->RunQuery($sql);
    }
    public function select($where='', $order='') {
        $sql = sprintf($this->sqlSelect, $where, $order);
        return $this->RunSelect($sql);
    }
     
}
?>

