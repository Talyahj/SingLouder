<?php
// DB Connection
include "../modele/db.php"; 
include "../modele/database.php";

// If form submitted to add an album
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_album'])) {
    $titre = $_POST['titre'];
    $prix = $_POST['prix'];
    $photo = $_POST['photo'];
    $anneeSortie = $_POST['anneeSortie'];
    $nomArtiste = $_POST['nomArtiste'];

    addAlbum($titre, $prix, $photo, $anneeSortie, $nomArtiste);
    header("Location: admin_albums.php");
    exit();
}

// If form submitted to delete an album
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_album'])) {
    $album_id = $_POST['album_id'];

    deleteAlbum($album_id);
    header("Location: admin_albums.php");
    exit();
}

// Fetch all albums
$albums = getAlbums();

// Load the view
include "vue/admin_albums.php";
?>
