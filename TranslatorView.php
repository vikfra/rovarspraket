<?php
        class TranslatorView 
        {
            private $inputfield = "svenska";
            public function echoform() {
    
                echo "<h1>1DV610</h1>
                <form action='index.php' method='GET'><input type='text' name='$this->inputfield'></input><input type='submit' value='Send'></form>";
            
                var_dump($_GET);
                
                if ($this->userWantsToTranslate()) {
                    echo "Du vill översätta ". $this->getInput();
                } else {
                    echo "Skriv in texten du vill ha översatt"; 
                }
            }

            public function getInput () {
                return $_GET[$inputfield];
            }

            public function userWantsToTranslate () {
                if (isset($_GET[$this->inputfield])) {
                    if ($_GET[$this->inputfield] != "") {
                        return true;
                    }   
                }
            }    
        }