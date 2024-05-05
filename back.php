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

    //Check is bio is entered
    if(!empty($_POST['bio'])){
        $bio = filter_input(INPUT_POST, 'bio', FILTER_SANITIZE_SPECIAL_CHARS);
    }else{
        $bio = 'Hi there I am new here';
    }
}

//print_r($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style_back.css">
    <title>Document</title>
</head>
<body>
    <main class="container-profile">
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
    </main>
</body>
</html>