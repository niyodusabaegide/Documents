<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Information Here</h2>
    <form action="" method="post">
        <input type="text" name="names" placeholder="Enter names"><br><br>
        <input type="email" name="email" placeholder="Enter email"><br><br>
        <input type="number" name="phone" placeholder="Enter phone"><br><br>
        <input type="text" name="position" placeholder="Enter position"><br><br>
        <input type="number" name="age" placeholder="Age"><br><br>
        Location: <select name="location" id="">
            <option value="Kigali,Rwanda">Kigali,Rwanda</option>
            <option value="Nairobi,Uganda">Nairobi,Uganda</option>
            <option value="Bujumbura,Burundi">Bujumbura,Burundi</option>
        </select><br><br>
        Language: <select name="language" id="">
            <option value="English">English</option>
            <option value="Kinyarwanda">Kinyarwanda</option>
            <option value="French">French</option>
        </select><br><br>
        <input type="number" name="experience" placeholder="Years of Experience"><br><br>
        <textarea name="desc" id="" cols="30" rows="10" placeholder="Tell Us About You."></textarea><br><br>
        profile pictures: <input type="file" name="pic" id=""><br><br>
    </form>
    <button type="submit" name="create" class="sv">Create</button>
    <?php
    if (isset($_POST['create'])) {
        $names=$_POST['names'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $position=$_POST['position'];
        $age=$_POST['age'];
        $location=$_POST['location'];
        $language=$_POST['language'];
        $experience=$_POST['experience'];
        $desc=$_POST['desc'];
        // echo $names . "<br>" . $email . "<br>" . $phone . "<br>" . $position . "<br>" . $location . "<br>" . $language . "<br>" . $experience . "<br>" . $desc . "<br>";
        $_SESSION['names'] = $names;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['position'] = $position;
        $_SESSION['age'] = $age;
        $_SESSION['location'] = $location;
        $_SESSION['language'] = $language;
        $_SESSION['experience'] = $experience;
        $_SESSION['desc'] = $desc;
        header("location:me.php");
    }
    ?>
    <script>
    sv_btn = document.querySelector('.sv');
    sv_btn.onclick = function sv() {
        this.innerHTML = '<div></div>';
        setInterval(() => {
            this.innerHTML = 'Saved';
        }, 2000);
    }
    </script>
    <style>
        button{
            width: 200px;
            height: 50px;
            background-color: skyblue;
            color: white;
            display: grid;
            place-content: center;
        }
        button div{
            width: 25px;
            height: 25px;
            border-radius: 50%;
            border: 3px solid transparent;
            border-top: 3px solid white;
            animation: anim .5s ease infinite;
        }
        @keyframes anim {
            0%{
                transform: rotate(0turn);
            }
            100%{
                transform: rotate(1turn);
            }
        }
    </style>
</body>
</html>