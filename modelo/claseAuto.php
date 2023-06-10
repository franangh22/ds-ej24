<?php

    class claseAuto{
        private $Marca;
        private $Modelo;
        private $Version;
        private $Anio;

        public function getMarca()
        {
                return $this->Marca;
        }

        public function setMarca($Marca)
        {
                $this->Marca = $Marca;

                return $this;
        }

        public function getModelo()
        {
                return $this->Modelo;
        }

        public function setModelo($Modelo)
        {
                $this->Modelo = $Modelo;

                return $this;
        }

        public function getVersion()
        {
                return $this->Version;
        }

        public function setVersion($Version)
        {
                $this->Version = $Version;

                return $this;
        }

        public function getAnio()
        {
                return $this->Anio;
        }

        public function setAnio($Anio)
        {
                $this->Anio = $Anio;

                return $this;
        }

        public function MostrarDatos(){
            echo "<--- Auto ---> <br>";
            echo "<hr>";
            echo "Marca: " . $this->getMarca() . "<br>";
            echo "Modelo: " . $this->getModelo() . "<br>";
            echo "Version: " . $this->getVersion() . "<br>";
            echo "Año: " . $this->getAnio() . "<br>";
            echo "<hr>";
        }

    }

?>