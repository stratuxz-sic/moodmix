<?php

  // add_entry.php - handles the form submission to add a new journal entry
  include 'db.php';

  // get the form data
  $song_title = $_POST['song_title'];
  $artist = $_POST['artist'];
  $mood = $_POST['mood'];
  $journal = $_POST['journal'];

  // insert the new entry into the database
  $sql = "INSERT INTO music_entries (song_title, artist, mood, journal) 
            VALUES 
              ('$song_title', '$artist', '$mood', '$journal')";  

  // execute the query  
  $conn->query($sql);

  // redirect back to the main page after adding the entry
  header("Location: index.php");

?>
