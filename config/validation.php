<?php
    namespace Validator;

    use Error;

    class ValidatorForm{
        //--------- Inputs accepted for the validation
        private $values;
        
        //-------- Data for the validation
        private $validationType;

        //--------- Constructor
        function __construct(array $values, array $validationType)
        {
            $this->values = $values;
            $this->validationType = $validationType;
        }
        
        //--------- Validate through length
        private function viaLength(string $name, string $text)
        { 
            $quantitymax = $this->validationType[$name]['validate']["max"];
            $quantitymin = (isset($this->validationType[$name]['validate']["min"])) ? $this->validationType[$name]['validate']["min"] : 0; 
            
            return (strlen($text) <= $quantitymax && strlen($text) >= $quantitymin);
         }
        
        //--------- Validate through expressions regular
        private function viaRegExp(string $name, string $value){  return (preg_match($this->validationType[$name]['validate'], $value) == 1) ? true : false ; }

        //----------------------------------------
        //---------------- PUBLIC FUNCTIONS ------
        //----------------------------------------

        //--------- Validate an input
        public function validate(string $name)
        {
            $value = $this->values[$name];

            if($this->validationType[$name]){
                $type = $this->validationType[$name]['type'];
            }
            else{ 
                new Error('The input name do not exist');
                return false; 
            }

            if($type == 'Regexp'){ return $this->viaRegExp($name, $value); }
            if($type == 'Length'){ return $this->viaLength($name, $value); }

            return true;
        }

        //--------- Get array of the results
        public function view_results(){
            $results = [];
            foreach ($this->values as $name => $value) {
                if(isset($this->validationType[$name])){
                    $results[$name] = $this->validate($name);
                    // name with validation result added to the array
                }
            }
            return $results;
        }

        //--------- Execute validation. If all the inputs are true, then this function returns true.
        public function execute(){
            $results = $this->view_results();
            
            //--------- If at least one is false, then the result is false
            return !in_array(false, $results);
        }   
    }