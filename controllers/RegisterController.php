class RegisterController {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function register($post, $files) {
        $name     = trim($post['username'] ?? '');
        $email    = trim($post['email']    ?? '');
        $password = $post['password']      ?? '';
        $file     = $files['user_id_img']  ?? null;

        $errors = [];

        if (empty($name) || !preg_match('/^[a-zA-Z\s]{3,50}$/', $name))
            $errors['username'] = empty($name) ? 'Name is required.' : 'Name must be 3-50 letters only.';

        if (empty($email) || !preg_match('/^[a-zA-Z0-9._%+\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,}$/', $email))
            $errors['email'] = empty($email) ? 'Email is required.' : 'Enter a valid email address.';

        if (empty($password) || !preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,}$/', $password))
            $errors['password'] = empty($password) ? 'Password is required.' : 'Min 8 chars, uppercase, lowercase, number & special character.';

        if (!$file || $file['error'] === UPLOAD_ERR_NO_FILE) {
            $errors['file'] = 'Please upload your front ID image.';
        } elseif ($file['error'] !== UPLOAD_ERR_OK) {
            $errors['file'] = 'Upload failed. Please try again.';
        } elseif ($file['size'] > 2097152) {
            $errors['file'] = 'Image must be smaller than 2MB.';
        } else {
            $mime = mime_content_type($file['tmp_name']);
            $ext  = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
            if (!in_array($mime, ['image/jpeg', 'image/png']) || !in_array($ext, ['jpg', 'jpeg', 'png']))
                $errors['file'] = 'Only JPG and PNG images are allowed.';
        }

        if (!empty($errors))
            return ['success' => false, 'errors' => $errors];

        $stmt = mysqli_prepare($this->conn, "SELECT id FROM user WHERE email = ?");
        mysqli_stmt_bind_param($stmt, 's', $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) > 0) {
            mysqli_stmt_close($stmt);
            return ['success' => false, 'errors' => ['email' => 'This email is already registered.']];
        }
        mysqli_stmt_close($stmt);

        $hashed    = password_hash($password, PASSWORD_BCRYPT);
        $uploadDir = __DIR__ . '/../assets/uploads/ids/';
        if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);
        $ext      = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $filename = 'id_' . uniqid() . '.' . $ext;
        move_uploaded_file($file['tmp_name'], $uploadDir . $filename);
        $filePath = 'assets/uploads/ids/' . $filename;

        $stmt = mysqli_prepare($this->conn, "INSERT INTO user (name, email, password, user_id_img) VALUES (?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, 'ssss', $name, $email, $hashed, $filePath);
        mysqli_stmt_execute($stmt);
        $userId = mysqli_insert_id($this->conn);
        mysqli_stmt_close($stmt);

        $_SESSION['user_id'] = $userId;
        $_SESSION['name']    = $name;
        $_SESSION['role']    = 'user';

        return ['success' => true, 'errors' => []];
    }
}