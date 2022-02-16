<?php

    class Product {
        protected $brand;
        protected $model;
        protected $price;
        protected $features;
        protected $productFamily;

        public function __construct($brand, $model, $price, $features, $productFamily) {
            try {
                $this->brand = $brand;
                $this->model = $model;
                $this->setPrice($price);
                $this->features = $features;
                $this->productFamily = $productFamily;
                    
            } catch (TypeError $error) {
                throw new Exception ($error->getMessage());
            }    
        }

        public function getModel()
        {
                return $this->model;
        }
        public function setModel($model)
        {
                $this->model = $model;

                return $this;
        }

        public function getBrand()
        {
                return $this->brand;
        }
        public function setBrand($brand)
        {
                $this->brand = $brand;

                return $this;
        }

        public function getPrice()
        {
                return $this->price;
        }
        // public function setPrice($price)
        // {
        //         $this->price = $price;

        //         return $this;
        // }
        public function setPrice(float $price)
        {
            if($price < 100) {
                throw new Exception ("C'e' un errore nel prezzo");
            } 
            
            $this->price = $price;

            return $this;
        }
 
        public function getFeatures()
        {
                return $this->features;
        }
        public function setFeatures($features)
        {
                $this->features = $features;

                return $this;
        }

        public function getProductFamily()
        {
                return $this->productFamily;
        } 
        public function setProductFamily($productFamily)
        {
                $this->productFamily = $productFamily;

                return $this;
        }

       
    }

    
?>