<?php 
$servername = "localhost";
$database = "pemwebmod3";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);

function show($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}
function insert($data){
    global $conn;
    $id_employe = $_POST["id_employe"];
    $nama = $_POST["nama"];
    $id_departement = $_POST["id_departement$id_departement"];

    mysqli_query($conn, "INSERT INTO employee VALUES('$id_employe','$nama','$id_departement')");
    return mysqli_affected_rows($conn);
}
function delete($data){
    global $conn;
    $id_employe = $_GET["delete"];
    mysqli_query($conn, "DELETE FROM employee WHERE id_employe = $id_employe");
    return mysqli_affected_rows($conn);
}
function update($data){
    global $conn;
    $id_employe = $_POST["id_employe"];
    $nama = $_POST["nama"];
    $id_departement = $_POST["id_departement$id_deprtement"];
    mysqli_query($conn, "UPDATE employee SET nama = '$nama', 
    id_departement ='$id_departement'
    WHERE id_employe = $id_employe");
    return mysqli_affected_rows($conn);
}
?>
