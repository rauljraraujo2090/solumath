<?php



class A {
    public int $prop;
}
class B extends A {
    // Ilegal: lectura-escritura -> sólo lectura
    public readonly int $prop;
}

?>