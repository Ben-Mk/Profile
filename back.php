<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //Check if name is entered
    if(!empty($_POST['name'])){
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    }else{
        $name = 'You did not enter a name';

    }

    //Check if age is entered
    if(!empty($_POST['age'])){
        $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
    }else{
        $age = 'You did not enter your age';
    }

    //Check if bio is entered
    if(!empty($_POST['bio'])){
        $bio = filter_input(INPUT_POST, 'bio', FILTER_SANITIZE_SPECIAL_CHARS);
    }else{
        $bio = 'Hi there I am new here';
    }

    //Upload profile pic
    $types = ['image/jpeg', 'image/jpg', 'image/png'];
    $ext = ['jpg', 'jpeg', 'png'];
    $new_dir = './profile_pic_';
    $pic_name = basename($_FILES['pic']['name']);
    $actualPath = $new_dir.$pic_name;
    $picExt = pathinfo($actualPath, 
    PATHINFO_EXTENSION);
    $picType = $_FILES['pic']['type'];
    $picSize = $_FILES['pic']['size'];
    $upLoad = 0;

    //Checks if a file was entered
    if(!empty($pic_name)){
        $upLoad = 1;     
    }else{
        echo 'enter an image';
        $upLoad = 0;
    }

    //Checks the type of file
    if(in_array($picType, $types)){
        $upLoad = 1;
    }else{
        echo 'You did not enter a picture';
        $upLoad = 0;
    }

     //Checks the extension of the file
     if(in_array($picExt, $ext)){
        $upLoad = 1;
    }else{
        echo 'You did not enter a picture';
        $upLoad = 0;
    }

    //Checks the size of the file
    if($picSize < 5000000){
        move_uploaded_file($_FILES['pic']['tmp_name'], $actualPath);
        $upLoad = 1;
    }else {
        echo 'Too Large';
        $upLoad = 0;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include './style_back.css'?>
    </style>
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navigation-bar">
            <a href="./index.php">Log Out</a>
        </nav>
    </header>
    <main class="container">
        <div class="container-profile">
        <div class="container-profile-text">
            <!-- Name section -->
            <section class="profile-name">
                <?php echo $name?>
            </section>

            <!-- Age section -->
            <section class="profile-age">
                <?php echo $age?>
            </section>

            <!-- Bio section -->
            <section class="profile-bio">
                <?php echo $bio?>
            </section>
        </div>
        
        <div class="container-profile-picture">
            <!-- Profile pic section -->
            <section class="profile-pic">
                <!-- Check if upload is 0 or 1 -->
                <img src="<?php if($upLoad == 1) {echo $actualPath;}?>" id="profile_pic" alt="profile picture">
            </section>
        </div>
        </div>  
    </main>
</body>
</html>