<?php
$servername = "localhost";
$username = "root";
$password = "";
$base="Proyecto";
// Create connection   -->BD senapractica3    persona (id, cedula, nombre, edad, genero)
$conn = new mysqli($servername, $username, $password, $base);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully".' <br/>';
?>