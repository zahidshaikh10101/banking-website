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

<body class="bg-gray-200">
	<header class="text-gray-600 body-font header">
		<div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
			<a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0"> <span class="ml-3 text-3xl font-serif">TSF BANK</span>
			</a>
			<nav class="md:ml-auto flex flex-wrap items-center text-base justify-center"> <a class="bg-blue-200 text-lg inline-block border-l border-t border-r rounded-t py-2 px-4 text-black-700 font-semibold" href="#">Home</a>
				<a class="inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold hover:bg-blue-200 rounded text-lg" href="customer.php">All Customers</a>
				<a class="inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold hover:bg-blue-200 rounded text-lg" href="add.php">Add Users</a>
				<a class="inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold hover:bg-blue-200 rounded text-lg" href="users.php?id=%203">Money Transfer</a>
				<a class="inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold hover:bg-blue-200 rounded text-lg" href="history.php">Transaction</a>
				<a class="inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold hover:bg-blue-200 rounded text-lg" href="contact.php">Contact Us</a>
			</nav>
		</div>
	</header>
	<section class="text-gray-600 body-font">
		<div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
			<div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
				<h1 class="title-font sm:text-4xl text-3xl mb-4 ml-24 font-medium text-gray-900 ">TSF Bank
              <br class="hidden lg:inline-block">The joy of Pure banking
            </h1>
				<p class="mb-8 leading-relaxed">At TSF Bank, we are guided by a common purpose to help make financial lives better by connecting clients and communities to the resource they need to be successful. We are driving growth – helping to create jobs, develop communities, foster economic mobility and address society’s biggest challenges – while managing risk and providing a return to our clients and our shareholders.</p>
				<div class="flex justify-center ml-24">
					<a href="customer.php">
						<button class="inline-flex text-white bg-blue-400 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg shadow">View Customers
							<svg class="w-6 h-6 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
								<path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
							</svg>
						</button>
					</a>
					<a href="contact.php">
						<button class="ml-6 inline-flex text-white bg-blue-400 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg shadow">Contact Us
							<svg class="w-6 h-6 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
							</svg>
						</button>
					</a>
				</div>
			</div>
			<div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
				<img class="object-cover object-center rounded" alt="right image" src="image/rside.png">
			</div>
		</div>
	</section>
	<section class="text-gray-600 body-font">
		<div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
			<div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
				<img class="object-cover object-center rounded" alt="left image" src="image/lside.png">
			</div>
			<div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
				<h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 ml-32">Money transfer is 
          <br class="hidden lg:inline-block">Easier than before
        </h1>
				<p class="mb-8 leading-relaxed">The Smarter Way to Send Money. Sending so much more than money. Uniting People with Possibilities. The fastest way to send money – worldwide.</p>
				<div class="flex justify-center ml-24">
					<a href="users.php?id=%203">
						<button class="inline-flex text-white bg-blue-400 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg shadow">Money Transfer
							<svg class="w-6 h-6 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 5a1 1 0 100 2h1a2 2 0 011.732 1H7a1 1 0 100 2h2.732A2 2 0 018 11H7a1 1 0 00-.707 1.707l3 3a1 1 0 001.414-1.414l-1.483-1.484A4.008 4.008 0 0011.874 10H13a1 1 0 100-2h-1.126a3.976 3.976 0 00-.41-1H13a1 1 0 100-2H7z" clip-rule="evenodd"></path>
							</svg>
						</button>
					</a>
					<a href="history.php">
						<button class="ml-6 inline-flex text-white bg-blue-400 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg shadow">Transaction
							<svg class="w-6 h-6 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm14 1a1 1 0 11-2 0 1 1 0 012 0zM2 13a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2zm14 1a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"></path>
							</svg>
						</button>
					</a>
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