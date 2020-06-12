<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../style.css">
    <title>Login</title>
</head>
<body>
<body class="font-mono">
			<div class="flex justify-center px-12 my-12 login">
				<div class="w-full xl:w-3/4 lg:w-11/12 flex justify-center">
					<!-- Col -->
					<div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
						<h3 class="pt-4 text-2xl text-center">Yo connecte toi</h3>
						<form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" method="POST" action="/admin/login">
							<div class="mb-4">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="username">
									Username
								</label>
                                <input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" name="username" id="username" type="text" placeholder="Username"/>
                                <span class="text-red-500"><?php echo isset($_SESSION["errors"]["username"]) ? $_SESSION["errors"]["username"] : "";?></span>
							</div>
							<div class="mb-4">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="password">
									Password
								</label>
                                <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border  rounded shadow appearance-none focus:outline-none focus:shadow-outline" name="password" id="password" type="password" placeholder="**********"/>
                                <span class="text-red-500"><?php echo isset($_SESSION["errors"]["password"]) ? $_SESSION["errors"]["password"] : "";?></span>
							</div>
							<div class="mb-6 text-center">
								<button class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="submit">
									login
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</body>
</html>
<?php 
unset($_SESSION["errors"]);
unset($_SESSION["old"]);