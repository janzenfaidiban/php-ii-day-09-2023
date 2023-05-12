            <section class="bg-gray-200 p-5">

                <a href="?page=tambah-siswa" class="bg-gray-300 hover:bg-gray-400 transition px-3 py-2">Tambah Siswa</a>

            </section>

            <section class="p-5">

                <h1 class="text-5xl pb-3 font-bold">Welcome!</h1>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nulla officiis similique magni quasi earum, ratione natus laborum iusto sint accusantium voluptates fugiat dolor magnam, et saepe libero ducimus exercitationem amet fuga facilis aspernatur. Saepe non, nam velit, rerum possimus repudiandae natus quos aspernatur odit esse eveniet, repellendus illo consequuntur.</p>

                
                <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "sacode_janzen";

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
                    // echo $row['name'];

                    echo '
                        <ul role="list" class="divide-y divide-gray-100">
                            <li class="flex justify-between gap-x-6 py-5">
                                <div class="flex gap-x-4">
                                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="' . $row['picture'] . '" alt="">
                                    <div class="min-w-0 flex-auto">
                                        <p class="text-sm font-semibold leading-6 text-gray-900">' . $row['name'] . '</p>
                                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">' . $row['email'] . '</p>
                                    </div>
                                </div>
                                <div class="hidden sm:flex sm:flex-col sm:items-end">
                                    <p class="text-sm leading-6 text-gray-900">' . $row['phone'] . '</p>
                                    <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
                                </div>
                            </li>
                        </ul>
                    ';

                }

            } else {
                echo "0 results";
            }

            $conn->close();

            ?>


            </section>


            