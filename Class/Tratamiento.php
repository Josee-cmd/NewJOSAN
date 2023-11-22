<?php

    class tratamiento{
        //Atributos que contiene la clase tratamiento
        private string $nombreMedicamento;
        private int $Id_tratamiento;
        private string $descripcion;
        private DateTime $IniciaTratamiento;
        private DateTime $FinalTratamiento;
        private float $dosificacion;

        //Getter para obtener el valor de los atributos de la clase tratamiento
        public function __getNombre(): string
        {
            return $this->nombreMedicamento;
        }
        public function __getID(): int
        {
            return $this->Id_tratamiento;
        }
        public function __getDescripcion(): string
        {
            return $this->descripcion;
        }
        public function __getInicio(): DateTime
        {
            return $this->IniciaTratamiento;
        }
        public function __getFinal(): DateTime
        {
            return $this->FinalTratamiento;
        }
        public function __getDosificacion(): float
        {
            return $this->dosificacion;
        }

        //Setter para modificar el valor de los atributos de la clase Tratamiento
        public function __setNombre(int $nombre): void
        {
            $this->nombreMedicamento = $nombre;
        }
        public function __setId(int $id): void
        {
            $this->Id_tratamiento = $id;
        }
        public function __setDescripcion(int $descripcion): void
        {
            $this->descripcion = $descripcion;
        }
        public function __setInicio(DateTime $inicio): void
        {
            $this->IniciaTratamiento = $inicio;
        }
        public function __setFinal(DateTime $final): void
        {
            $this->FinalTratamiento = $final;
        }

        //Metodos que contendra la clase Tratamiento
        public function medico_asignado(){

        }
        public function notificaciones(){

        }
    }