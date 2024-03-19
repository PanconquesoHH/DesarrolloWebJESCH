<?php
class Cola {
    private $elementos;
    private $ultimo;
    private $primero;
    public function __construct()
    {
        $this->primero = 0;
        $this->ultimo = 0;
        $this->elementos=array();
        
    }
    public function insertar($valor)
    {
        $this->ultimo ++;
        $this->elementos[$this->ultimo]=$valor;
    }
    public function eliminar($valor)
    {
        if($this->primero == $this->ultimo)
        {
        
            return 'la cola esta vacia';
        }
        else
        {
            $valor = $this->elementos[$this->primero];
            $this->primero++;
            return $valor;
        }
    }
   
    public function mostrar()
    {
        if($this->primero == $this ->ultimo){
        return'la cola esta vacia';
    }
    else {
         for ($i = $this-> primero; $i = $this->ultimo; $i++ )
         echo $this->elementos[$i];
    }
        
    
}

}

?>
