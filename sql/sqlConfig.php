<?php
    class sqlConfig
    {
        private $dataUsername;
        private $dataPassword;

        /**
         * sqlConfig constructor.
         * @param $dataUsername
         * @param $dataPassword
         */
        public function __construct($dataUsername, $dataPassword)
        {
            $this->dataUsername = $dataUsername;
            $this->dataPassword = $dataPassword;
        }

    }

