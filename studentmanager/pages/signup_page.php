<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTEC - Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Custom styles */
        .form-container {
            max-width: 28rem;
            width: 100%;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 0.75rem;
            padding: 2rem;
        }

        .form-container h1 {
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            margin-top: 1rem;
        }

        .form-container p {
            color: #FF4F70;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .form-container label {
            font-size: 0.875rem;
            color: #4B5563;
            font-weight: 600;
            margin-bottom: 0.5rem;
            display: block;
        }

        .form-container input[type="email"],
        .form-container input[type="password"] {
            border: 1px solid #D1D5DB;
            border-radius: 0.375rem;
            padding: 0.75rem 1rem;
            width: 100%;
            margin-bottom: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-container input[type="email"]:focus,
        .form-container input[type="password"]:focus {
            outline: none;
            border-color: #F472B6;
        }

        .form-container input[type="submit"] {
            background-color: #F472B6;
            color: #fff;
            border: none;
            border-radius: 0.375rem;
            padding: 0.75rem 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-container input[type="submit"]:hover {
            background-color: #EC4899;
        }

        .form-container a {
            color: #F472B6;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .form-container a:hover {
            color: #EC4899;
        }
    </style>
</head>
<body class="bg-gray-200 text-gray-800">
    <div class="flex justify-center items-center h-screen">
        <div class="form-container">
            <div class="text-center mb-8">
                <img src="/studentmanager/img/logo.webp" alt="logo" class="w-36 h-auto mx-auto">
                <h1>Sign In</h1>
                <p>to Student Management</p>
            </div>
            <form action="" method="post">
                <div class="mb-4">
                    <label for="useremail">Email</label>
                    <div class="relative">
                        <input type="email" id="useremail" name="useremail" placeholder="Enter your email" required class="focus:ring-pink-500 focus:border-pink-500 block w-full pr-10 sm:text-sm border-gray-300 rounded-md">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                            <i class="fas fa-envelope text-gray-400"></i>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="userpass">Password</label>
                    <div class="relative">
                        <input type="password" id="userpass" name="userpass" placeholder="Enter your password" required class="focus:ring-pink-500 focus:border-pink-500 block w-full pr-10 sm:text-sm border-gray-300 rounded-md">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                            <i class="fas fa-lock text-gray-400"></i>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Sign In</button>
                </div>
            </form>
            <div class="text-center mt-4">
                <p>Don't have an account? <a href="/studentmanager/pages/signup_page.php" class="text-pink-500 hover:underline">Sign Up</a></p>
            </div>
        </div>
    </div>
</body>
</html>
