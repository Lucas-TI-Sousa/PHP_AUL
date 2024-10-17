<?php
class UsuarioDAO
{
    // Propriedaes
    private $id;
    private $email;
    private $dataCadastro

    // Construtor
    public function __construct($id, $email)
    {
        $this->id = $id;
        $this->email = $email;
    }

    // Getters
    public function getEmail()
    

    // Setters
    public function setdataCadastro($data)
    {
        $this->dataCadastro = $data
    }
}
?>