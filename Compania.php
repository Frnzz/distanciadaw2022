<?php

/**
* Detalla los detalles financieros de la compania
*/
class Compania{
	private $turnover = 100000;
	private $gastos = 500;	

	/**
	*@return integer El profit neto de la compania
	*/
	public function netProfit(){
		return $this->turnover;
	}

	/**
        *@return integer Balance de gastos
        */
        public function netGastos($gastos){
                return $this->$gastos-50;
        }


}


?>
