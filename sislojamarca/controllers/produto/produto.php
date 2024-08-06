<?php 

class Produto {

    private string $cbarra;
    private string $titulo;
    private string $preco;
    private string $marca;
    private string $tipo;
    private string $detalhesproduto;
    private string $tamanhos;
    private string $IDSuap_produto;

    /**
     * Get the value of cbarra
     */ 
    public function getCbarra()
    {
        return $this->cbarra;
    }

    /**
     * Set the value of cbarra
     *
     * @return  self
     */ 
    public function setCbarra($cbarra)
    {
        $this->cbarra = $cbarra;

        return $this;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of preco
     */ 
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Set the value of preco
     *
     * @return  self
     */ 
    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }

    /**
     * Get the value of marca
     */ 
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */ 
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of detalhesproduto
     */ 
    public function getDetalhesproduto()
    {
        return $this->detalhesproduto;
    }

    /**
     * Set the value of detalhesproduto
     *
     * @return  self
     */ 
    public function setDetalhesproduto($detalhesproduto)
    {
        $this->detalhesproduto = $detalhesproduto;

        return $this;
    }

    /**
     * Get the value of tamanhos
     */ 
    public function getTamanhos()
    {
        return $this->tamanhos;
    }

    /**
     * Set the value of tamanhos
     *
     * @return  self
     */ 
    public function setTamanhos($tamanhos)
    {
        $this->tamanhos = $tamanhos;

        return $this;
    }

    /**
     * Get the value of IDSuap_produto
     */ 
    public function getIDSuap_produto()
    {
        return $this->IDSuap_produto;
    }

    /**
     * Set the value of IDSuap_produto
     *
     * @return  self
     */ 
    public function setIDSuap_produto($IDSuap_produto)
    {
        $this->IDSuap_produto = $IDSuap_produto;

        return $this;
    }
}