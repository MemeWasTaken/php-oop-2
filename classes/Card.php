<?php
    require_once __DIR__ . "/User.php";

    class Card extends User{
        protected $numberCard;
        protected $expirationDate;
        protected $cvc;

        // public function __construct($name, $lastname, $email, $numberPhone, $bank, $numberCard, $expirationDate, $cvc) {

        public function __construct($numberCard, $expirationDate, $cvc) {

            try {
                // parent::__construct($name, $lastname, $email, $numberPhone, $bank);
                $this->numberCard = $numberCard;
                $this->expirationDate = $expirationDate;
                $this->cvc = $cvc;
                    
            } catch (TypeError $error) {
                throw new Exception ($error->getMessage());
            }    
        }
        
        public function getNumberCard()
        {
            return $this->numberCard;
        }
        public function setNumberCard($numberCard)
        {
            $this->numberCard = $numberCard;
            return $this;
        }
        
        public function getExpirationDate()
        {
            return $this->expirationDate;
        }
        public function setExpirationDate($expirationDate)
        {
            $this->expirationDate = $expirationDate;
            return $this;
        }
        
        public function getCvc()
        {
            return $this->cvc;
        }
        public function setCvc($cvc)
        {
            $this->cvc = $cvc;
            return $this;
        }
    }
    

?>