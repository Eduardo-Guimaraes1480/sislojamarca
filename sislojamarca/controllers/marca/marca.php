<?php 

require_once realpath(__DIR__ . "/../../database/conexao.php");

class Marca extends Database{

    private string $IDmarca;
    private string $nomeMarca;
    private string $descricao;
    private string $dataCriacao;
    private string $contato;
    private string $endereco;
    private string $IDFornecedor;

    /**
     * Get the value of IDmarca
     */ 
    public function getIDmarca()
    {
        return $this->IDmarca;
    }

    /**
     * Set the value of IDmarca
     *
     * @return  self
     */ 
    public function setIDmarca($IDmarca)
    {
        $this->IDmarca = $IDmarca;

        return $this;
    }

    /**
     * Get the value of nomeMarca
     */ 
    public function getNomeMarca()
    {
        return $this->nomeMarca;
    }

    /**
     * Set the value of nomeMarca
     *
     * @return  self
     */ 
    public function setNomeMarca($nomeMarca)
    {
        $this->nomeMarca = $nomeMarca;

        return $this;
    }

    /**
     * Get the value of descricao
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of dataCriacao
     */ 
    public function getDataCriacao()
    {
        return $this->dataCriacao;
    }

    /**
     * Set the value of dataCriacao
     *
     * @return  self
     */ 
    public function setDataCriacao($dataCriacao)
    {
        $this->dataCriacao = $dataCriacao;

        return $this;
    }

    /**
     * Get the value of contato
     */ 
    public function getContato()
    {
        return $this->contato;
    }

    /**
     * Set the value of contato
     *
     * @return  self
     */ 
    public function setContato($contato)
    {
        $this->contato = $contato;

        return $this;
    }

    /**
     * Get the value of endereco
     */ 
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     *
     * @return  self
     */ 
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

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
}