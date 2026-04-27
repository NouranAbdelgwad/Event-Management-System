<?php
class loginController
{
    private $con;
    public function __construct($con)
    {
        $this->con = $con;
    }

    public function login($data)
    {
        echo 'hi';
        $email = $data['email'];
        $usr_pass = $data['password'];
        $qu = mysqli_prepare($this->con, "SELECT * FROM user WHERE email = ?");

        if (!$qu) {
            die("Prepare failed: " . mysqli_error($this->con));
        }

        mysqli_stmt_bind_param($qu, 's', $email);
        mysqli_stmt_execute($qu);

        $result = mysqli_stmt_get_result($qu);
        $user = mysqli_fetch_assoc($result);


        if (!$user || !password_verify($usr_pass, $user['password'])) {
            return ['success' => false, 'errors' => ['email or password is incorrect']];
        }

        $_SESSION['user'] = $user;
        return ['success' => true, 'errors' => []];
    }
}
