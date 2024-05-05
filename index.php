<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <script src="./app.js" defer></script>
    <title>Profile</title>
  </head>
  <body>
    <main class="container">
      <div class="headingcontainer">
        <h1 class="welcome-heading">
          Hi Welcome to <span class="welcome-heading-profile">Pro_file</span>
          <span class="welcome-heading-emoji">
            <img
              src="./camera-with-flash.svg"
              class="emoji-icon"
              alt="camera emoji"
          /></span>
        </h1>
      </div>

      <div class="detail-container">
        <form action="back.php" method="post" enctype="multipart/form-data">
          <div class="detail-name">
            <label for="name">Name</label>
            <input type="text" name="name" A/>
          </div>

          <div class="detail-age">
            <label for="age">Age</label>
            <input type="number" min="10" max="100" name="age" />
          </div>

          <div class="detail-bio">
            <label for="bio">Bio</label>
            <input type="text" name="bio" />
          </div>

          <div class="detail-image">
            <input type="file" name="image" id="image" />
          </div>
          <input type="submit" value="Create" id="create" name="submit"/>
        </form>
      </div>
    </main>
  </body>
</html>
