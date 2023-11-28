<?php
session_start();

@include 'database.php';

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $select = "SELECT users.userid, roleofuser.rolename, roleofuser.userid, users.username, users.pw
    FROM users 
    INNER JOIN roleofuser ON users.userId = roleofuser.userId
    WHERE users.username = $username AND users.pw = $password";
    

    $result = mysqli_query($conn, $select);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            if (isset($row['pw']) && password_verify($password, $row['pw'])) {

                $roleName = $row['rolename'];
                $_SESSION['user_type'] = $roleName;

                if ($roleName === 'admin') {
                    header("Location: banques.php");
                } elseif ($roleName === 'client') {
                    header("Location: home.php");
                } else {
                    // Handle other roles as needed
                }

                exit();
            } else {
                $error[] = 'Incorrect username or password!';
            }
        } else {
            $error[] = 'Incorrect username or password!';
        }
    } else {
        $error[] = 'Database query error: ' . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O'PEP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <section class="bg-[url('images/backgroudOPEP.png')] bg-cover h-[150vh] flex items-center justify-center">
        <div class="min-h-[85vh] w-[90%] m-auto gap-[15px] flex flex-col md:flex-row md:justify-evenly items-center">
            <div class="md:w-[50%] w-[85%] flex flex-col gap-[25px] mt-[15px]">
                <h1 class="text-gray-900 text-[45px] md:text-[60px]">O'PEP</h1>
                <h3 class="text-gray-900 text-[25px] md:text-[30px]"> Your Gateway to Financial Harmony</h3>
                <p class="text-gray-900 text-[15px] md:text-[18px]">
                    Chez "Jardins en Éveil", nous croyons en la magie des plantes et en leur capacité à apporter la vie à n'importe quel espace. Notre entreprise est née de la passion pour la nature et le désir de partager la beauté et les bienfaits des plantes avec le monde.
                </p>
            </div>

            <div class="h-[90vh] w-[100%] md:w-[40%] flex justify-center items-center">
                <form action="" class="flex flex-col gap-[8px] h-[55%] w-[100%] p-[10px] bg-gray-300/70 items-center justify-center rounded" method="post">
                    <h3 class="text-3xl mb-2.5 uppercase font-medium text-green-900">login now</h3>
                    <?php
                        if (isset($error)) {
                            foreach ($error as $error) {
                                echo '<span style="color: red; ">' . $error . '</span>';
                            };
                        }
                    ?>
                    <input type="email" name="email" required placeholder="Enter Your E-mail" class="outline-none h-[3rem] p-[5px] w-[85%] rounded">
                    <input type="password" name="password" required placeholder="Enter Your password" class="outline-none h-[3rem] w-[85%] p-[5px] rounded">
                    <div class="w-[85%]"></div>
                    <input type="submit" name="submit" value="login now" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 w-[85%] rounded cursor-pointer">
                    <p>don't have an account?<a class="text-green-700" href="registerPage.php">register now</a></p>
                </form>
            </div>
        </div>
    </section>