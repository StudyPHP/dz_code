<?php
//$connect = mysql_connect($host_mysql, $user_mysql, $pswd_mysql) or die("Не могу соединиться с MySQL.");
//mysql_select_db($database_mysql) or die("Не могу подключиться к базе.");
?>

<?php
class DB 
{
    private $host = "localhost";
    private $user = "root";
    private $db_name = "school_db";
    private $pass = "";
    private $field =  "*";
    public $conn;

    function Connect ()
    {
        $this->conn = mysql_connect($this->host, $this->user, $this->pass);
        mysql_select_db($this->db_name);
    }

    function Select($row,$table,$option=false)
    {
        if(!$option)
      	{
            $sql = "SELECT $this->field FROM $table";
      	}
      	$data = mysql_query($sql);
      	while(mysql_fetch_assoc($data))
      	{
            $array[]= mysql_fetch_assoc($data);
      	}
    }

    function Insert($field=false,$row,$table,$value)
    {
        if(!$field)
        {
            $exp = mysql_query("INSERT INTO `$table` (`$row`) VALUES ('$value')");
        }
    }     
}