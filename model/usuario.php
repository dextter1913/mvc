<?php
class usuario
{
        public $nombre;
        public $apellido;
        public $email;
        public $contraseña;


        /**
         * Get the value of nombre
         */
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of apellido
         */
        public function getApellido()
        {
                return $this->apellido;
        }

        /**
         * Set the value of apellido
         *
         * @return  self
         */
        public function setApellido($apellido)
        {
                $this->apellido = $apellido;

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
         * Get the value of contraseña
         */
        public function getContraseña()
        {
                return $this->contraseña;
        }

        /**
         * Set the value of contraseña
         *
         * @return  self
         */
        public function setContraseña($contraseña)
        {
                $this->contraseña = $contraseña;

                return $this;
        }
        public function conseguirtodos()
        {
                return 'Sacando todos los usuarios';
        }
}
