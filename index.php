<?php


include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>dataware</title>
</head>
<body>
    

<div class="relative overflow-x-auto h-screen flex justify-center items-center">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
            <th scope="col" class="px-6 py-3">
                    id
                </th>
                <th scope="col" class="px-6 py-3">
                    Nom
                </th>
                <th scope="col" class="px-6 py-3">
                    Date de creation
                </th>
                
    
        </thead>
        <tbody>
        <?php
$sql  = "SELECT * FROM equipe";
$req = mysqli_query($conn, $sql);

while($row = mysqli_fetch_row($req)){

    ?>
    
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?php
                echo $row[0]
                ?>
                </th>
                <td class="px-6 py-4">
                <?php
                echo $row[1]
                ?>
                </td>
                <td class="px-6 py-4">
                <?php
                echo $row[2]
                ?>
                </td>
            </tr>

<?php

}

?>
</tbody>
</table>
<a href="index2.php">Table de Membre</a>
</div>


</body>
</html>