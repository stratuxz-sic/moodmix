<?php 
  // include the database connection
  include 'db.php'; 

  // query the database to retrieve all songs
  $result = $conn->query
    (
      "SELECT * FROM music_entries"
    );
?>

<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoodMix Journal</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <div class="container">

      <h1>MoodMix Journal</h1>

      <form action="add_entry.php" method="POST">

        <input type="text" name="song_title" placeholder="Song Title" required>
        <input type="text" name="artist" placeholder="Artist" required>

        <!-- Mood selection dropdown; keeping it to 3 options --> 
        <select name="mood" required>
          <option value="">Select Mood</option>
          <option value="positivity">Positivity</option>
          <option value="down">Down</option>
          <option value="energetic">Energetic</option>
          <option value="calm">Calm</option>
        </select>

        <textarea name="journal" placeholder="Your thoughts about this song..." required></textarea>
        
        <!-- submit button; add entry -->
        <button type="submit">Add to Journal</button>

      </form>

      <input type="text" id="search" placeholder="Search moods or songs...">

      <div id="entries">
        <!-- loop through the songs and display them -->
        <?php while ($row = $result->fetch_assoc()): ?>

          <div class = "card">
            <span class="mood <?= strtolower($row['mood'])?>">
              <?= $row['mood']; ?>
            </span>
            <h2>
              <?= $row['song_title']; ?>
            </h2>
            <h3>
              <?= $row['artist']; ?>
            </h3>
            <p>
              <?= $row['journal']; ?>
            </p>
          </div>

        <!-- end of the loop for each song entry -->  
        <?php endwhile; ?>

      </div>

    </div>

    <script src="script.js"></script>

  </body>

</html>