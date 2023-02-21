<?php
session_start();
if (isset($_SESSION["connected_id"])) {
  $userId = intval($_SESSION["connected_id"]);
} else {
  echo $userId;
  exit();
}
?>
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
    <header
      class="flex justify-between px-10 py-5 border-b-[1px] border-b-gray-700"
    >
      <h1
        class="mukta text-transparent bg-clip-text bg-gradient-to-r from-purple-500 to-indigo-700 text-3xl bg-gray-900"
      >
        Touiter.
      </h1>

      <div>
        <button
          class="text-center text-gray-400 px-5 h-10 mr-5 rounded-xl focus:outline-none focus:border-purple-500 border-[1px] border-purple-500 transition-transform hover:scale-[1.03] duration-500 ease-out"
        >
          Edit profil
        </button>
        <button
          class="text-center text-gray-400 px-5 h-10 rounded-xl border-[1px] border-purple-500 focus:outline-none focus:border-purple-500 transition-transform hover:scale-[1.03] duration-500 ease-out"
        >
          Logout
        </button>
      </div>
    </header>

    <div
      class="flex flex-col items-center m-10 font-mono mx-auto p-10 sm:max-w-3xl"
    >
      <img
        class="rounded-full w-20 object-cover"
        src="./img/avatar.png"
        alt=""
      />
      <p class="text-xl mt-5">
        <span class="text-gray-500">Bienvenue</span>
        <span class="text-gray-200">Rantan Plan</span>
        <?php echo $userId ?>
      </p>
      <form action="" class="w-full m-5 text-gray-400">
        <textarea
          class="w-full placeholder-gray-700 mt-5 rounded-xl h-60 bg-gray-900 border border-solid border-gray-700 text-sm p-5 focus:outline-none focus:border-purple-500"
        ></textarea>
        <div class="flex justify-between mt-5">
          <input
            type="file"
            class="block text-sm text-slate-500 file:py-2 file:px-4 file:rounded-xl file:border file:border-solid file:border-gray-700 file:bg-gray-900 file:text-sm file:text-gray-400 hover:file:bg-violet-100"
          />
          <button
            type="submit"
            class="text-center text-gray-400 px-5 rounded-xl h-10 focus:outline-none focus:border-purple-500 bg-gradient-to-r from-purple-500 to-indigo-700 transition-transform hover:scale-[1.03] duration-500 ease-out"
          >
            Touit
          </button>
        </div>
      </form>
    </div>

    <div class="flex mx-auto px-10 sm:max-w-3xl">
      <img
        class="rounded-full w-12 object-cover"
        src="./img/avatar.png"
        alt=""
      />
      <p></p>
    </div>

    <!-- <div class="flex flex-col h-screen font-mono">
      <div class="w-full px-10 text-center m-auto sm:max-w-[450px]">
        <h1 class="text-gray-700 text-xl">Signup</h1>
        <form action="" class="flex flex-col text-gray-400">
          <input
            type="email"
            placeholder="Email"
            class="placeholder-gray-700 mt-5 rounded-xl h-14 bg-gray-900 border border-solid border-gray-700 text-sm p-5 focus:outline-none focus:border-purple-500"
          />

          <input
            type="text"
            placeholder="Lastname"
            class="placeholder-gray-700 mt-5 rounded-xl h-14 bg-gray-900 border border-solid border-gray-700 text-sm p-5 focus:outline-none focus:border-purple-500"
          />
          <input
            type="text"
            placeholder="Firstname"
            class="placeholder-gray-700 mt-5 rounded-xl h-14 bg-gray-900 border border-solid border-gray-700 text-sm p-5 focus:outline-none focus:border-purple-500"
          />
     
          <input
            type="password"
            placeholder="Password"
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
    </div> -->
  </body>
</html>
