<?php
// Define the file path for storing tasks
$file = "tasks.txt";

// Initialize an empty array to hold the tasks
$tasks = [];

// Check if the form has been submitted and if the task input is not empty
if (isset($_POST["submit"]) && !empty($_POST["task"])) {
    // Get the task entered by the user from the form input
    $newTask = $_POST["task"];

    // Append the new task to the tasks file, adding a newline after each task
    file_put_contents($file, $newTask . PHP_EOL, FILE_APPEND);

    // Redirect to the same page to prevent resubmission on refresh (POST/Redirect/GET)
    header('Location: ' . $_SERVER['PHP_SELF']);
    // Ensure no further code is executed after the redirect
    exit();
}

// Read the tasks from the file and store them in the $tasks array
// The FILE_IGNORE_NEW_LINES flag removes the newline characters from each line
$tasks = file($file, FILE_IGNORE_NEW_LINES);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>ToDo</h1>
    <form action="index.php" method="POST">
        <label for="task">Task:</label>
        <input type="text" name="task" id="task" placeholder="Enter your task here" maxlength="100" required>
        <button type="submit" name="submit">Add Task</button>
    </form>
    <ul>
        <?php
        // Check if there are any tasks to display
        if (!empty($tasks)) {
            // Loop through each task and display it inside a list item
            foreach ($tasks as $task) {
                // Use htmlspecialchars to escape any special characters and avoid XSS vulnerabilities
                echo "<li>" . htmlspecialchars($task) . "</li>";
            }
        }
        ?>
    </ul>
</body>

</html>