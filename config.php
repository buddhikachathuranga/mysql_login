<?php
define("DB_SERVER", "localhost");
define("DB_USERNAME", "buddhika_user");
define("DB_PASSWORD", "a3vpD106^");
define("DB_NAME", "buddhika_db");

# Connection
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

# Check connection
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
