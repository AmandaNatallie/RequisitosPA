<?php require_once 'model/mCidades.php';
class aCidades extends mCidades{
    
    protected $sqlSelectIn = "SELECT * FROM tbl_cidades WHERE uf = '%s' ";
    protected $sqlSelect = "SELECT * FROM tbl_cidades WHERE 1=1 %s %s";
    
    public function select($where='', $order='') {
        $sql = sprintf($this->sqlSelect, $where, $order);
        return $this->RunSelect($sql);
    }
    public function selectIn($where='', $order=''){
        $sql = sprintf($this->sqlSelectIn, $this->getUf(), $order);
        return $this->RunSelect($sql);
    }
            
}
?>

