<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("Connect_Db.php");

    $sqlquery = "SELECT * FROM registration WHERE Email_Id = '" . $_POST['userid'] . "' AND User_Password = '" . $_POST['psswrd'] . "'";

    if (mysqli_query($conn, $sqlquery)) {

        $row = mysqli_fetch_array(mysqli_query($conn, $sqlquery));

        if (is_array($row)) {
            $_SESSION['emailid'] = $row['Email_Id'];
            $_SESSION['fname'] = $row['Full_Name'];

            if (isset($_SESSION['emailid'])) {
?> <script>
                    $("#message").html("Login Success! Redirecting...");
                    $("#message").css("display", "flex");
                    $("#message").css("background", "#83F1AE");
                    $("#message").css("border", "2px solid #006E2B");
                    window.location.replace("dashboard.php");
                </script> <?php
                            //  header("Refresh:1; url=dashboard.php");
                        }
                    } else {
                            ?> <script>
                $("#message").html("Invalid username or Password!");
                $("#message").css("display", "flex");
            </script> <?php
                    }
                } else {
                    echo "Query run failed";
                }
                mysqli_close($conn);
            }
                        ?>