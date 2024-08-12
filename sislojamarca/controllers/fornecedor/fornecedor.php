<?php 

class Fornecedor {

    private string $IDFornecedor;
    private string $nomeFornecedor;
    private string $email;
    private string $cpf;
    private string $cnpj;

    /**
     * Get the value of IDFornecedor
     */ 
    public function getIDFornecedor()
    {
        return $this->IDFornecedor;
    }

    /**
     * Set the value of IDFornecedor
     *
     * @return  self
     */ 
    public function setIDFornecedor($IDFornecedor)
    {
        $this->IDFornecedor = $IDFornecedor;

        return $this;
    }

    /**
     * Get the value of nomeFornecedor
     */ 
    public function getNomeFornecedor()
    {
        return $this->nomeFornecedor;
    }

    /**
     * Set the value of nomeFornecedor
     *
     * @return  self
     */ 
    public function setNomeFornecedor($nomeFornecedor)
    {
        $this->nomeFornecedor = $nomeFornecedor;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of cpf
     */ 
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */ 
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of cnpj
     */ 
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Set the value of cnpj
     *
     * @return  self
     */ 
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }
}