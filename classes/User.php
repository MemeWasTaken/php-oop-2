<?php
    require_once __DIR__.'/Card.php';

    class User{
        protected $name;
        protected $lastname;
        protected $email;
        protected $numberPhone;
        protected $bank;
        protected $card;

        public function __construct($name, $lastname, $email, $numberPhone, $bank, $card) {
            try {
                $this->name = $name;
                $this->lastname = $lastname;
                $this->email = $email;
                $this->numberPhone = $numberPhone;
                $this->bank = $bank;
                $this->setCard($card);
                    
            } catch (TypeError $error) {
                throw new Exception ($error->getMessage());
            }    
        }

        public function getName()
        {
                return $this->name;
        }
        public function setName($name)
        {
                $this->name = $name;
                return $this;
        }

        public function getLastname()
        {
                return $this->lastname;
        }
        public function setLastname($lastname)
        {
                $this->lastname = $lastname;
                return $this;
        }

        public function getEmail()
        {
                return $this->email;
        }
        public function setEmail($email)
        {
                $this->email = $email;
                return $this;
        }

        public function getNumberPhone()
        {
                return $this->numberPhone;
        }
        public function setNumberPhone($numberPhone)
        {
                $this->numberPhone = $numberPhone;
                return $this;
        }

        public function getBank()
        {
                return $this->bank;
        }
        public function setBank($bank)
        {
                $this->bank = $bank;
                return $this;
        }

        public function getCard()
        {
                return $this->card;
        }
        public function setCard(Card $card)
        {
                $this->card = $card;
                return $this;
        }
    }
    

?>