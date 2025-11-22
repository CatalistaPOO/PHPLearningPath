<?
class Estatico
{

    private static int $descuentoPromocional = 0;//pertenece únicamente a la clase     

    public function __construct(
        private int $precio,
        private int $impuesto,
    ) {
    }

    public function getPrecio()
    {
        return $this->precio;
    }
    public function getImpuesto()
    {
        return $this->impuesto;
    }
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }
    public function setImpuesto($impuesto)
    {
        $this->impuesto = $impuesto;
    }

    public function getPrecioFinal()
    {
        self::aplicaPromocion();//llamamos metodo static (self::metodo)
        $preciofinal = (int) (($this->getPrecio() + (($this->getImpuesto() / 100) * $this->getPrecio())) - (self::$descuentoPromocional / 100 * $this->getPrecio()));//llamamos variable static (self::metodo)
        return $preciofinal;
    }

    //pertence solo a la clase(static)
    private static function aplicaPromocion()
    {
        $hoy = date("Y-m-d");//ojo, siempre dos cifras en mes y día
        if ($hoy >= "2025-11-01" && $hoy <= "2025-11-12") {
            self::$descuentoPromocional = 50;
        }
    }

    public function __toString(): string
    {
        $precioCalculado = $this->getPrecioFinal();
        return "Precio de producto1: " . $this->getPrecio() . "\n"
            . " Impuesto con valor: " . $this->getImpuesto() . "\n"
            . "Precio final con descuentoPromocional con valor " . self::$descuentoPromocional . ": " . $precioCalculado;
    }

}

$producto1 = new Estatico(145, 10);
echo $producto1;

?>

<!-- Test GH -->