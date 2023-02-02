<?php
session_start();

// proses login
if (isset($_POST['login'])) {
    $email = $_POST['username'];
    $password = $_POST['password'];

    // koneksi ke database
    $conn = mysqli_connect('localhost', 'root', '', 'rumahsakit');

    // cek username dan password
    $query = "SELECT * FROM users WHERE username='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        // jika username dan password cocok, maka buat session
        $_SESSION['username'] = $email;
        header("location: index.php");
    } else {
        // jika tidak cocok, tampilkan pesan kesalahan
        echo "Username atau password salah";
    }
}

// Fungsi untuk verifikasi username dan password
function verify_credentials($username, $password)
{
    // Contoh verifikasi dengan hardcoded username dan password
    $valid_username = "admin";
    $valid_password = "password";

    // Verifikasi username dan password
    if ($username == $valid_username && $password == $valid_password) {
        return true;
    } else {
        return false;
    }
}

// Fungsi untuk logout
function logout()
{
    // Hapus session
    session_destroy();
    // Redirect ke halaman login
    header("Location: logout.php");
    exit;
}

// Jika user sudah login
if (isset($_SESSION["logged_
in"]) && $_SESSION["logged_in"] == true) {
    // Tampilkan halaman logout
    echo "Selamat datang, " . $_SESSION["username"] . "!";
    echo "<br><a href='logout.php'>Logout</a>";

    // Jika user belum login
} else {
    // Jika form login dikirim
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        // Ambil input username dan password
        $email = $_POST["username"];
        $password = $_POST["password"];

        // Verifikasi username dan password
        if (verify_credentials($email, $password)) {
            // Buat session untuk menandakan bahwa user sudah login
            $_SESSION["logged_in"] = true;
            $_SESSION["username"] = $email;
            // Redirect ke halaman home
            header("Location: index.php.php");
            exit;
        } else {
            // Tampilkan pesan error jika username atau password salah
            echo "Username atau password salah";
        }
    }

    // Tampilkan form login
    echo "<form method='post'>";
    echo "Username: <input type='text' name='username'><br>";
    echo "Password: <input type='password' name='password'><br>";
    echo "<input type='submit' value='Login'>";
    echo "</form>";
}
