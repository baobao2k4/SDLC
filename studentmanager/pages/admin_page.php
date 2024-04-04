<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTEC - Admin page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-100 text-gray-800">
    <div class="fixed top-0 left-0 right-0 bg-gray-200">
        <div class="flex items-center justify-between px-5 py-3">
            <div>
                <button class="px-3 py-2 font-semibold text-white bg-pink-500 rounded-lg hover:bg-pink-600 focus:outline-none focus:bg-pink-600">Log Out</button>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center h-screen">
        <div class="space-x-4">
            <a href="../pages/manage_student_page.php" class="px-8 py-4 font-bold bg-pink-500 rounded-lg shadow-lg hover:bg-pink-600">Manage Student</a>
            <a href="../pages/manage_account_page.php" class="px-8 py-4 font-bold bg-pink-500 rounded-lg shadow-lg hover:bg-pink-600">Manage Account</a>
            <a href="../pages/manage_class_page.php" class="px-8 py-4 font-bold bg-pink-500 rounded-lg shadow-lg hover:bg-pink-600">Manage Class</a>
            <a href="../pages/manage_project_page.php" class="px-8 py-4 font-bold bg-pink-500 rounded-lg shadow-lg hover:bg-pink-600">Manage Project</a>
        </div>
    </div>
</body>

</html>
