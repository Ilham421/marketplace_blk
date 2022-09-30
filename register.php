<!-- @Copyright 2022-2059 Mas-Backend.Com -->

<!DOCTYPE html>

<?php

// registration.php

// Panggil config database
require_once "process/koneksi.php";
 
// Mendefinisikan masing-masing variabel dengan nilai kosong
$name = $password = $confirm_password = "";
$name_err = $password_err = $confirm_password_err = "";
 
// Lakukan jika data sudah masuk kedalam form
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Cek apakah nama kosong
    if(empty(trim($_POST["name"]))){
        $name_err = "Silahkan masukan nama.";
    // Deteksi karakter yang tidak diizinkan dengan mengunakan regex
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["name"]))){
        $name_err = "Nama hanya boleh diisi dengan kombinasi kata, nomor atau underscore.";
    } else {
        // Mengkoneksikan dengan database
        $sql = "SELECT id FROM users WHERE name = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Digunakan untuk mengikat variabel ke marker parameter dari statement yang disiapkan.
            mysqli_stmt_bind_param($stmt, "s", $param_name);
            
            // Siapkan parameter nama
            $param_name = trim($_POST["name"]);
            
            // Lakukan eksekusi
            if(mysqli_stmt_execute($stmt)){

                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $name_err = "Nama ini sudah terdaftar!";
                } else{
                    $name = trim($_POST["name"]);
                }
            } else{
                // Menampilkan error jika statement gagal dieksekusi
                echo "Sepertinya terjadi error, silahkan coba lagi nanti.";
            }

            // Tutup statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validasi password
    if(empty(trim($_POST["password"]))){
        $password_err = "Silahkan masukan password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password harus diisi dengan maksimal 6 karakter.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validasi konfirmasi password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Silahkan konfimasi password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password tidak cocok.";
        }
    }
    
    // Cek error sebelum dieksekusi kedalam database
    if(empty($name_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Siapkan koneksi dengan database
        $sql = "INSERT INTO users (name, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){

            // Digunakan untuk mengikat variabel ke marker parameter dari statement yang disiapkan.
            mysqli_stmt_bind_param($stmt, "ss", $param_name, $param_password);
            
            // Set parameter dari nama dan password
            $param_name = $name;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // merubah password menjadi hash code
            
            // Lakukan eksekusi
            if(mysqli_stmt_execute($stmt)){
                // Lakukan redirect jika berhasil
                header("location: login.php");
            } else{
                // Menampilkan error jika statement gagal dieksekusi
                echo "Sepertinya terjadi error, silahkan coba lagi nanti.";
            }

            // Tutup statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Tutup koneksi dengan database
    mysqli_close($conn);
}
?> 



<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrasi</title>
    <link rel="stylesheet" href="node_modules/animate.css/animate.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; background: #efefef;}
        .wrapper{ width: 380px; padding: 20px; margin:0 auto; display: block; margin-top: 60px; background: #fff;}
    </style>
</head>
<body style="background-image: url('image/heading1.jpg');">
    <div class="wrapper animate_animated animate__bounceOut">
        <h2>Registrasi</h2>
        <p>Silahkan isi form dibawah untuk melanjutkan.</p>
        <hr>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                <span class="invalid-feedback"><?php echo $name_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Konfirmasi Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <br>
            <p>Sudah memiliki akun? <a href="login.php">Login disini!</a>.</p>
        </form>
    </div>    
</body>
</html> 