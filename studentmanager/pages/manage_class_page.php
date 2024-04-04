<?php

include '../libs/db_connect.php';
include '../libs/alert_message.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTEC - Manage</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-200 text-gray-800">
    <div class="fixed top-0 left-0 right-0 bg-pink-500">
        <div class="flex items-center justify-between px-5 py-3">
            <img src="/studentmanager/img/logo.webp" alt="logo" class="w-[200px] h-auto">
            <div class="bg-pink-300 rounded-xl">
                <button class="px-3 py-2 font-semibold text-pink-900" name="btn-logout">Log Out</button>
            </div>
        </div>
    </div>

    <div class="mt-16">
        <form action="../libs/create_class.php" method="post" enctype="multipart/form-data">
            <div class="flex justify-center items-center mt-24">
                <div class="w-[80%]">
                    <div class="flex justify-between items-center">
                        <h1 class="font-bold text-2xl text-pink-500">Manage Class</h1>
                        <div>
                            <a href="../pages/admin_page.php" class="bg-pink-500 px-3 py-2 text-white font-bold rounded-lg flex items-center"><i class="fas fa-arrow-left mr-2"></i><span class="text-white">Back</span></a>
                        </div>
                    </div>
                    <div class="mt-5">
                        <div class="m-3">
                            <p class="text-lg font-semibold mb-2 text-pink-500">Class ID:</p>
                            <div class="border-2 border-pink-500 rounded-xl px-2 py-1">
                                <label for="icon-name"><i class="fa-solid fa-signature px-2 py-2"></i></label>
                                <input class="focus:outline-none px-2 py-2 w-[30vh]" type="text" name="c_id" id="s_id" required>
                            </div>
                        </div>
                        <div class="m-3">
                            <p class="text-lg font-semibold mb-2 text-pink-500">Class Name:</p>
                            <div class="border-2 border-pink-500 rounded-xl px-2 py-1">
                                <label for="icon-name"><i class="fa-solid fa-signature px-2 py-2"></i></label>
                                <input class="focus:outline-none px-2 py-2 w-[30vh]" type="text" name="c_name" id="s_name" required>
                            </div>
                        </div>
                        
                        <div class="flex justify-center bg-pink-500 hover:bg-pink-600 px-2 py-1 text-white rounded-lg mt-9">
                            <input class="px-4 py-2 hover:cursor-pointer" type="submit" value="Add Class" name="btn-add">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="mt-16 mb-16">
        <div class="flex justify-center">
            <div class="w-[80%]">
                <div class="mt-5">
                    <table class="w-full border-2 text-center border-pink-500">
                        <thead>
                            <tr>
                                <th class="border-2 border-pink-500">ID</th>
                                <th class="border-2 border-pink-500">Class Name</th>
                                <th class="border-2 border-pink-500">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM class";
                            $result = $conn->query($query);

                            while ($class = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            ?>
                                <tr>
                                    <td class="border-2 border-pink-500"><?php echo $class['c_id']; ?></td>
                                    <td class="border-2 border-pink-500"><?php echo $class['c_name']; ?></td>
                                    <td class="border-2 border-pink-500 py-4 flex justify-center gap-4">
                                        <button class="edit-button bg-blue-500 p-3 text-white font-semibold" data-id="<?php echo $class['c_id']; ?>">Edit</button>

                                        <div id="edit-modal-<?php echo $class['c_id']; ?>" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
                                            <div class="bg-white p-8 rounded-lg shadow-md">
                                                <h1 class="text-2xl font-bold mb-4">Edit Class</h1>
                                                <form id="edit-form" action="../libs/edit_class.php" method="post" enctype="multipart/form-data">
                                                    <input type="hidden" name="class_id" id="edit-student-id-<?php echo $class['c_id']; ?>" value="<?php echo $class['c_id']; ?>">
                                                    <div class="m-3">
                                                        <p class="text-lg font-semibold mb-2 text-pink-500">New Class Name:</p>
                                                        <div class="border-2 border-pink-500 rounded-xl px-2 py-1">
                                                            <label for="icon-name"></label>
                                                            <input class="focus:outline-none px-2 py-2 w-[30vh]" type="text" name="classname" id="classname-<?php echo $class['c_id']; ?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4">
                                                        <button type="submit" class="bg-indigo-500 text-white py-2 px-4 rounded-lg hover:bg-indigo-600">Save</button>
                                                        <button type="button" data-id="<?php echo $class['c_id']; ?>" class="close-modal ml-2 text-gray-600 hover:text-gray-900">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <form action="../libs/delete_class.php" method="post">
                                            <input type="hidden" name="delete_id" value="<?php echo $class['c_id']; ?>">
                                            <button type="submit" class="bg-red-600 text-white font-semibold px-6 py-3" name="btn-delete">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        const editBtns = document.querySelectorAll('.edit-button');
        const closeBtns = document.querySelectorAll('.close-modal');

        editBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const modalId = `edit-modal-${btn.dataset.id}`;
                document.getElementById(modalId).classList.remove('hidden');
            });
        });

        closeBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const modalId = `edit-modal-${btn.dataset.id}`;
                document.getElementById(modalId).classList.add('hidden');
            });
        });
    </script>
</body>

</html>
