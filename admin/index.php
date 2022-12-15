<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class="header">
        <h2>Home Page</h2>
    </div>
    <div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success">
                <h3>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
            <h3>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h3>

            <button type="submit" class="bttn"> <a href="logout.php" style="color:red ;">Sign Out</a> </button>

        <?php endif ?>
    </div>



</body>

</html>


<?php
include_once 'config.php';
$result = mysqli_query($conn, "SELECT * FROM contact_form");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>

    <h2 style="text-align:left; padding: 40px;"><strong>Inbox</strong></h2>
    <div class="table">
        <table class="table">
            <tr class="bg-danger">
                <th> name</th>
                <th>email </th>
                <th>number </th>
                <th>messages</th>


            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["number"]; ?></td>
                    <td><?php echo $row["message"]; ?></td>
                    <th><a href="delete.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Are you sure to delete?')" id="a_id">Delete</a></th>

                    <script type="text/javascript">
                        $(function() {
                            $('th a#a_id').click(function() {
                                return confirm("Are you sure that you want to delete this?");
                            });
                        });
                    </script>

                </tr>

    </div>
<?php
                $i++;
            }
        }
?>
</table>