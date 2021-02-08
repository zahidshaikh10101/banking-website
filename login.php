
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    
</head>
<style>
    .i {
        color: #d9d9d9;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .i i {
        transition: .3s;
    }

    .input-div>div {
        position: relative;
        height: 45px;
    }

    .input-div>div>h5 {
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: #999;
        font-size: 18px;
        transition: .3s;
    }

    .input-div:before,
    .input-div:after {
        content: '';
        position: absolute;
        bottom: -2px;
        width: 0%;
        height: 2px;
        background-color: #60A5FA;
        transition: .4s;
    }

    .input-div:before {
        right: 50%;
    }

    .input-div:after {
        left: 50%;
    }

    .input-div.focus:before,
    .input-div.focus:after {
        width: 50%;
    }

    .input-div.focus>div>h5 {
        top: -5px;
        font-size: 15px;
    }

    .input-div.focus>.i>i {
        color: #60A5FA;
    }
</style>
<body class="bg-gray-200">
    <header class="text-gray-600 body-font header">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <span class="ml-3 text-3xl font-serif">TSF BANK</span>
          </a>
        </div>
</header>

<div class="flex justify-center items-center">
        <div class="bg-white rounded-lg w-2/6 px-16 py-16 shadow">
            <form method="POST" action="#">
                                <h2 class="text-3xl text-center text-gray-700 mb-4">Admin Login</h2>
                <div class="input-div border-b-2 relative grid my-5 py-1 focus:outline-none"
                    style="grid-template-columns: 7% 93%;">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input type="text" name="username" class="absolute w-full h-full py-2 px-3 outline-none inset-0 text-gray-700"
                            style="background:none;">
                    </div>
                </div>
                <div class="input-div border-b-2 relative grid my-5 py-1 focus:outline-none"
                    style="grid-template-columns: 7% 93%;">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" name="password"
                        class="absolute w-full h-full py-2 px-3 outline-none inset-0 text-gray-700"
                            style="background:none;">
                    </div>
                </div>
                  
              <button type="submit" class="w-full rounded-full text-gray-100 text-white bg-blue-400 border-0 py-2 focus:outline-none hover:bg-blue-600 rounded text-lg shadow">  <a href="index.php" class="text-white">Login
              </a></button>
            </form>
        </div>
    </div>

  
<footer class="text-gray-600 body-font footer">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <span class="ml-3 text-xl font-serif">TSF BANK</span>
      </a>
      <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2021 TSF BANK —
        <a href="#" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">Made with 🧡 by Zahid Shaikh</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </footer>

  <script>
        const inputs = document.querySelectorAll("input");


        function addcl() {
            let parent = this.parentNode.parentNode;
            parent.classList.add("focus");
        }

        function remcl() {
            let parent = this.parentNode.parentNode;
            if (this.value == "") {
                parent.classList.remove("focus");
            }
        }


        inputs.forEach(input => {
            input.addEventListener("focus", addcl);
            input.addEventListener("blur", remcl);
        });
    </script>
</body>
</html>