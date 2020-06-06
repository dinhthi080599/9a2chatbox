<?php
    require_once './vendor/autoload.php';
    use Kreait\Firebase\Factory;
    use Kreait\Firebase\ServiceAccount;
    use Kreait\Firebase\Configuration;
    use Kreait\Firebase\Firebase;

    class User{
        protected $database;
        protected $dbname = "users";
        public function __construct()
        {
            $acc = (new Factory)->withServiceAccount(__DIR__.'\secret\php-chatbox-db56b54a27d8.json');
            $this->database = $acc->createDatabase();
        }

        public function get(int $userID=null){
            // if(empty($userID) || !isset($userID)) return false;

            // if($this->database->getReference($this->dbname)->getSnapshot()->hashChild($userID))
            // {
                return $this->database->getReference($this->dbname)->getValue();
            // }
            // else{
            //     return false;
            // }
        }

        public function insert(array $data){
            if(empty($data) || !isset($data)) return false;
            foreach($data as $key => $value)
            {
                $this->database->getReference()->getChild($this->dbname)->getChild($key)->set($value);
            }
            return true;
        }
        
        public function delete(int $userID){
            if(empty($userID) || !isset($userID)) return false;
            if($this->database->getReference($this->dbname)->getSnapshot()->hashChild($userID))
            {
                $this->database->getReference($this->dbname)->getChild($userID)->remove();
                return True;
            }
            else
            {
                return false;
            }
        }
    }

    // $users = new User();

    // var_dump($users->insert([
    //     '1' => 'Thi',
    //     '2' => 'Hiền'
    // ]));
    // print_r($users->get('1'));
?>