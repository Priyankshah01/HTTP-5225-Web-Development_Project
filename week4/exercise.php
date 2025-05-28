<?php
// Function to fetch user data from the JSONPlaceholder API
function getUsers() {
$url = "https://jsonplaceholder.typicode.com/users";
$data = file_get_contents($url);
return json_decode($data, true);
}
// Get the list of users
$users = getUsers();

if (!empty($users) && is_array($users)) {
    echo "<h1>User List</h1>";
    echo "<table border='1'>";
    echo "<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Username</th>
    <th>Email</th>
    <th>Address</th>
    </tr>";
    
    for ($i = 0; $i < count($users); $i++) {
        $user = $users[$i];
        echo "<tr>";
        echo "<td>".$user['id']."</td>";
        echo "<td>".$user['name']."</td>";
        echo "<td>".$user['username']."</td>";
        echo "<td>".$user['email']."</td>";
        echo "<td>".$user['address']['street'].", ".$user['address']['suite'].", ".$user['address']['city'].", ".$user['address']['zipcode']."</td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "<p>No users available.</p>";
}

?>