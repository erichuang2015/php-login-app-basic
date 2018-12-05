<?PHP

class User{
    
    public function __construct() {
        $get_arguments       = func_get_args();
        $number_of_arguments = func_num_args();

        if (method_exists($this, $method_name = '__construct'.$number_of_arguments)) {
            call_user_func_array(array($this, $method_name), $get_arguments);
        }
    }

    public function __construct2($email, $password) {
        //implement log in
    }

    public function __construct4($name, $surname, $email, $password) {
        //implement sign up
    }
    
}


$object2 = new User('BUET', 'is');
$object3 = new User('BUET', 'is', 'Best', 'New.');