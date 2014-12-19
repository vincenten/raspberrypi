<?php $address = 'localhost'; 
  $port = 5001; 
  if (($sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)) < 0) {    
    echo "Socket creation error";
  }
  else {
    echo "Socket created <br/>";
  }
  if (($ret = socket_bind($sock, $address, $port)) < 0) {
    echo "Host/port connection failed";
  }
  else {
    echo "Host/port connection successful <br/>";
  }
  if (($ret = socket_listen($sock, 5)) < 0) {
    echo "Socket error";
  }
  else {
    echo "Waiting connection <br/>";
  }
 if (($msgsock = socket_accept($sock)) < 0) {
        echo "Socket connection start error";
    } else {
        echo "Awaiting data <br/>";
    }
//Connection established, reading data
    if (false === ($buf = socket_read($msgsock, 1024))) {
        echo "Read error";
    } else {
        echo "Data: ".$buf;
        echo "nice";
    }
    if (isset($sock)) {
        socket_close($ret);
        socket_close($sock);
    }
    echo "<br /> Socket closed";
    