<?php
include 'connect.php';

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

    $rs = mysqli_query($conn, $sql);

    if($rs)
    {
	    echo '<script type="text/javascript">';
        echo ' alert("Message Sent!")';
        echo '</script>';
    }
}
?>
<!---FM{V90aUmkcNz\S-->

  <!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-200">
	<header class="text-gray-600 body-font header">
		<div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
			<a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0"> <span class="ml-3 text-3xl font-serif">TSF BANK</span>
			</a>
			<nav class="md:ml-auto flex flex-wrap items-center text-base justify-center"> <a class="inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold hover:bg-blue-200 rounded text-lg" href="index.php">Home</a>
				<a class="inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold hover:bg-blue-200 rounded text-lg" href="customer.php">All Customers</a>
				<a class="inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold hover:bg-blue-200 rounded text-lg" href="add.php">Add Users</a>
				<a class="inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold hover:bg-blue-200 rounded text-lg" href="users.php?id=%203">Money Transfer</a>
				<a class="inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold hover:bg-blue-200 rounded text-lg" href="history.php">Transaction</a>
				<a class="bg-blue-200 text-lg inline-block border-l border-t border-r rounded-t py-2 px-4 text-black-700 font-semibold" href="contact.php">Contact Us</a>
			</nav>
		</div>
	</header>
	<section class="text-gray-600 body-font relative">
		<div class="container px-5 py-24 mx-auto">
			<div class="flex flex-col text-center w-full mb-12">
				<h1 class="sm:text-3xl text-3xl font-medium title-font mb-4 text-gray-900 font-serif">Contact Us</h1>
				<p class="lg:w-2/3 mx-auto leading-relaxed text-base">Banking at its best!</p>
			</div>
			<div class="lg:w-1/2 md:w-2/3 mx-auto">
				<div class="flex flex-wrap -m-2">
					<div class="p-2 w-1/2">
						<div class="relative">
							<label for="name" class="leading-7 text-sm text-gray-600">Name</label>
							<input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
						</div>
					</div>
					<div class="p-2 w-1/2">
						<div class="relative">
							<label for="email" class="leading-7 text-sm text-gray-600">Email</label>
							<input type="email" id="email" name="email" onblur="validateEmail(this);" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
						</div>
					</div>
					<div class="p-2 w-full">
						<div class="relative">
							<label for="message" class="leading-7 text-sm text-gray-600">Message</label>
							<textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
						</div>
					</div>
					<div class="p-2 w-full">
						<button class="w-full rounded-full text-gray-100 text-white bg-blue-400 border-0 py-2 focus:outline-none hover:bg-blue-600 rounded text-lg shadow" name="submit" type="submit" id="myBtn">Send&nbsp;<i class="fa fa-paper-plane" aria-hidden="true"></i>
						</button>
					</div>
					<div class="p-2 w-full pt-80 mt-80 border-t border-gray-200 text-center">
						<p class="leading-normal my-5">TSF Bank
							<br>Mumbai, India</p> <span class="inline-flex">
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-4 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-4 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a class="ml-4 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>
            </a>
          </span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="text-gray-600 body-font footer">
		<div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
			<a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900"> <span class="ml-3 text-xl font-serif">TSF BANK</span>
			</a>
			<p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2021 TSF BANK — <a href="#" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">Made with 🧡 by Zahid Shaikh</a>
			</p> <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
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
</body>

</html>