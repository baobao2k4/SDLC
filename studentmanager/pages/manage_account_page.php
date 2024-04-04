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
        </div>
    </div>

    <div class="mt-[19vh]">
            <div class="flex justify-center items-center mt-[10vh]">
                <div class="w-[80%]">
                    <div class="flex justify-between items-center">
                        <h1 class="font-bold text-[2em] text-pink-500">Manage Account</h1>
                        <div>
                            <a href="../pages/admin_page.php" class="bg-pink-500 px-3 py-2 text-white font-bold rounded-lg"><i class="fa-solid fa-arrow-left"></i><span>  Back</span></a>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="mb-[10vh]">
        <div class="flex justify-center">
            <div class="w-[80%]">
                <div class="mt-5">
                    <table class="w-full border-2 text-center border-pink-500">
                        <thead>
                            <tr>
                                <th class="border-2 border-pink-500">ID</th>
                                <th class="border-2 border-pink-500">Email</th>
                                <th class="border-2 border-pink-500">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM users";
                            $result = $conn->query($query);

                            while ($user = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            ?>
                                <tr>
                                    <td class="border-2 border-pink-500"><?php echo $user['user_id']; ?></td>
                                    <td class="border-2 border-pink-500"><?php echo $user['user_email']; ?></td>
                                    <td class="border-2 border-pink-500 py-4 flex justify-center gap-4">
                                        <button class="edit-button bg-sky-500 p-3 text-white font-semibold" data-id="<?php echo $user['user_id']; ?>">Edit</button>

                                        <div id="edit-modal-<?php echo $user['user_id']; ?>" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
                                            <div class="bg-white p-8 rounded-lg shadow-md">
                                                <h1 class="text-2xl font-bold mb-4">Change Password</h1>
                                                <form id="edit-form" action="../libs/changepass.php" method="post" enctype="multipart/form-data">
                                                    <input type="hidden" name="user_id" id="edit-user-id-<?php echo $user['user_id']; ?>" value="<?php echo $user['user_id']; ?>">
                                                    <div class="m-3">
                                                        <p class="text-lg font-semibold mb-2 text-pink-500">New Password:</p>
                                                        <div class="border-2 border-pink-500 rounded-xl px-2 py-1">
                                                            <label for="icon-name"></label>
                                                            <input class="focus:outline-none px-2 py-2 w-[30vh]" type="text" name="password" id="password-<?php echo $user['user_id']; ?>" required>
                                                        </div>
                                                    </div>
    
                                                    <div class="mt-4">
                                                        <button type="submit" class="bg-indigo-500 text-white py-2 px-4 rounded-lg hover:bg-indigo-600">Save</button>
                                                        <button type="button" data-id="<?php echo $user['user_id']; ?>" class="close-modal ml-2 text-gray-600 hover:text-gray-900">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <form action="../libs/delete_account.php" method="post">
                                            <input type="hidden" name="delete_id" value="<?php echo $user['user_id']; ?>">
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
