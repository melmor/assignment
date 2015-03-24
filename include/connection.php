<?php
class Database
{
  private $connection;
  function connect()
  {
    $this->connection=mysqli_connect('localhost','root','','project');

  }
  function disconnect()
  {
    mysqli_close($this->connection);
  }

  function run_query($query)
  {
    return mysqli_query($this->connection,$query);
  }
}

?>
