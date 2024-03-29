<?php

$config = require "core/config.php";

require "database/Connection.php";

require "database/QueryBuilder.php";

return new QueryBuilder(
    Connection::make($config['database'])
);