            <section class="bg-gray-200 p-5">

                <a href="?page=tambah-siswa" class="bg-gray-300 hover:bg-gray-400 transition px-3 py-2">Tambah Siswa</a>

            </section>

            <section class="p-5">
                <h1 class="text-5xl pb-5 font-bold">Welcome!</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel accusantium doloremque minus quod facere incidunt dignissimos, saepe cumque perferendis illo maxime? Earum amet doloremque porro, inventore, reiciendis totam consequatur quod minus mollitia culpa rerum iusto. Aspernatur velit enim dolor, explicabo consequuntur maiores perferendis facilis optio delectus. Eum, placeat vitae?</p>
            </section>

                <ul role="list" class="divide-y divide-gray-100">
    <li class="flex justify-between gap-x-6 py-5">
        <div class="flex gap-x-4">
        <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
        <div class="min-w-0 flex-auto">
            <p class="text-sm font-semibold leading-6 text-gray-900">Leslie Alexander</p>
            <p class="mt-1 truncate text-xs leading-5 text-gray-500">leslie.alexander@example.com</p>
        </div>
        </div>
        <div class="hidden sm:flex sm:flex-col sm:items-end">
        <p class="text-sm leading-6 text-gray-900">Co-Founder / CEO</p>
        <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
        </div>
    </li>
    <li class="flex justify-between gap-x-6 py-5">
        <div class="flex gap-x-4">
        <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
        <div class="min-w-0 flex-auto">
            <p class="text-sm font-semibold leading-6 text-gray-900">Michael Foster</p>
            <p class="mt-1 truncate text-xs leading-5 text-gray-500">michael.foster@example.com</p>
        </div>
        </div>
        <div class="hidden sm:flex sm:flex-col sm:items-end">
        <p class="text-sm leading-6 text-gray-900">Co-Founder / CTO</p>
        <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
        </div>
    </li>
    <li class="flex justify-between gap-x-6 py-5">
        <div class="flex gap-x-4">
        <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
        <div class="min-w-0 flex-auto">
            <p class="text-sm font-semibold leading-6 text-gray-900">Dries Vincent</p>
            <p class="mt-1 truncate text-xs leading-5 text-gray-500">dries.vincent@example.com</p>
        </div>
        </div>
        <div class="hidden sm:flex sm:flex-col sm:items-end">
        <p class="text-sm leading-6 text-gray-900">Business Relations</p>
        <div class="mt-1 flex items-center gap-x-1.5">
            <div class="flex-none rounded-full bg-emerald-500/20 p-1">
            <div class="h-1.5 w-1.5 rounded-full bg-emerald-500"></div>
            </div>
            <p class="text-xs leading-5 text-gray-500">Online</p>
        </div>
        </div>
    </li>


    
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sacode_elia";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo $row['name'];
    }

} else {
    echo "0 results";
}

$conn->close();

?>
