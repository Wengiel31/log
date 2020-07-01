<?php
    function insert_ip() {
        require 'get_ip.php';
        $ip = get_ip();
        require 'database.php';
        $connection = mysqli_connect($database_host, $database_username, $database_password, $database_database_name, $database_port);
        if (mysqli_connect_errno()) {
            echo "FATAL ERROR:"."<br />"."Filed to connect to database."."<br />"."Error number:"." ".mysqli_connect_errno();
        }
		$time = date("d.m.Y. H:i:s");
        if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {
            $protocol = "https";
        } else {
            $protocol = "http";
        }
        $url = $protocol."://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
        $query = "INSERT INTO `log` (`ID`, `IP`, `Time`, `URL`) VALUES ('', '$ip', '$time', '$url')";
        if (!mysqli_query($connection, $query)) {
            echo "<br />"."FATAL ERROR:"."<br />"."Error number:"." ".$connection -> error;
        }
        mysqli_close($connection);
    }
?>