<?php
try {

    \DB::connection()->getPDO();
    echo \DB::connection()->getDatabaseName();
}
catch (\Exception $e) {
    echo 'none';
}

?>