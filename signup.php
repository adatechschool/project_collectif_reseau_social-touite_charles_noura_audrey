<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Mukta:wght@800&display=swap"
      rel="stylesheet"
    />
    <title>Document</title>
  </head>

  <body class="bg-gray-900">
    <?php
   

   if(isset($_POST["email"])) {
    $new_email = $_POST["email"];
    $new_lastname= $_POST["lastname"];
    $new_firstname= $_POST["firstname"];
    $new_password=$_POST["password"];

    include "config.php";
    $mysqli = config();

    $new_email=$mysqli->real_escape_string($new_email);
    $new_lastname=$mysqli->real_escape_string($new_lastname);
    $new_firstname=$mysqli->real_escape_string($new_firstname);
    $new_password=$mysqli->real_escape_string($new_password);

    $new_password = password_hash($new_password, PASSWORD_DEFAULT);

    $lInstructionSql = "INSERT INTO users(`ID`, `EMAIL`, `LASTNAME`, `FIRSTNAME`, `PASSWORD`, `AVATAR`)
    VALUES (NULL,"
    . "'" . $new_email . "',"
    . "'" . $new_lastname . "',"
    . "'" . $new_firstname . "',"
    . "'" . $new_password . "',"
    . "NULL);";

    $ok = $mysqli->query($lInstructionSql);
    if (!$ok) {
      echo "Sorry. Registration failed." . $mysqli->error;
    } else {
      header("location:login.html");
    }
   }
    ?>
    <div class="relative">
      <h1
        class="mukta text-center text-transparent bg-clip-text bg-gradient-to-r from-purple-500 to-indigo-700 text-6xl fixed p-10 top-0 left-0 right-0 bg-gray-900"
      >
        Touite.
      </h1>
    </div>

    <div class="flex flex-col h-screen font-mono">
      <div class="w-full px-10 text-center m-auto sm:max-w-[450px]">
        <h1 class="text-gray-700 text-xl">Signup</h1>
        <form action="signup.php" method="post" class="flex flex-col text-gray-400">
          <input
            type="email"
            placeholder="Email"
            name="email"
            class="placeholder-gray-700 mt-5 rounded-xl h-14 bg-gray-900 border border-solid border-gray-700 text-sm p-5 focus:outline-none focus:border-purple-500"
          />

          <input
            type="text"
            placeholder="Lastname"
            name="lastname"
            class="placeholder-gray-700 mt-5 rounded-xl h-14 bg-gray-900 border border-solid border-gray-700 text-sm p-5 focus:outline-none focus:border-purple-500"
          />
          <input
            type="text"
            placeholder="Firstname"
            name="firstname"
            class="placeholder-gray-700 mt-5 rounded-xl h-14 bg-gray-900 border border-solid border-gray-700 text-sm p-5 focus:outline-none focus:border-purple-500"
          />
          <input
            type="password"
            placeholder="Password"
            name="password"
            class="placeholder-gray-700 mt-5 rounded-xl h-14 bg-gray-900 border border-solid border-gray-700 text-sm p-5 focus:outline-none focus:border-purple-500"
          />
          <button
            type="submit"
            class="text-center text-gray-400 mt-5 rounded-xl h-14 focus:outline-none focus:border-purple-500 bg-gradient-to-r from-purple-500 to-indigo-700 transition-transform hover:scale-[1.03] duration-500 ease-out"
          >
            Register
          </button>
        </form>
      </div>
    </div>
  </body>
</html>
