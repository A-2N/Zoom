<?php
session_start();

include 'connection.php';
$user_id = $_SESSION['id'];
$sql = "SELECT * FROM classes where user_id='{$user_id}' ORDER BY time DESC";
$results = mysqli_query($connection, $sql);

?>
<head>
    <link type="text/css" rel="stylesheet" href="style.css">
    <button class="buttonSettings" id="Return" onclick="window.location.href='home.php'">Return to Home</button>
</head>
<table>
    <thead>
    <tr>
        <th>Class Name</th>
        <th>Link</th>

    </tr>

    </thead>
    <tbody>

    <?php while($row=(mysqli_fetch_assoc($results))):?>
        <tr>
            <td><?php echo $row['class'];?></td>
            <td><?php echo $row['link'];?></td>
            <td><a href="viewClass.php?id=<?php echo $row['id']?>">Details</a></td>

        </tr>
    <?php endwhile;?>
    </tbody>

</table>
