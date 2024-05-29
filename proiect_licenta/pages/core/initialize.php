<?php
class Connect extends PDO
{
    public function __construct()
    {
        // DSN for MSSQL: sqlsrv:Server=your_server_name;Database=your_database_name
        parent::__construct("sqlsrv:Server=DESKTOP-NQ0QJUP\SQLEXPRESS;Database=to_do_list", '', '', 
        array(
            PDO::SQLSRV_ATTR_ENCODING => PDO::SQLSRV_ENCODING_UTF8
        ));
        
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
}
?>

