<?php
class PermissaoDAO implements BaseDAO
{
    private $bd;

    public function __construct()
    {
        $this->$bd = Database::getInstace();
    }
    public function getById($id) {

    }
    public function getAll(){
    
    }
    public function getByEmail($email)
    {
        
    }
    public function create($entity){
    
    }
    public function update($id){
    
    }
    public function delete($id){

    }
    
}