<?
    //include
    //include_once
    //require
    require_once "pessoa.class.php";
    class filhodapessoa extends pessoa{

        private $email;

        public function __construct($nome, $email, $idade){

            parent::__construct($nome, $idade);
            $this->email = $email;

        }

        public function getemail($email){
            $this->email = $email;
        }

        public function setemail(){
            return $this->email;
        }

       

    }


?>