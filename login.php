     <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
        <title>Document</title>
    </head>
    <body class="bg-[#191720] w-screen h-full">
        <div id="container" class="text-white flex-col justify-center w-full h-full">
            <!-- zone de connexion -->
            <form action="verification.php" method="POST" class="flex flex-col w-full p-8 h-full">
                <h1 class="text-xl ">Binary</h1>
                <p class="pt-10">We are</p>
                <h2 class="text-2xl pt-8">Invite online right now.</h2>
                <p class="pt-2">10 people have joined our team.</p>
                <p>We invite you to join the tribe.</p>
                
                <label class="pb-4 pt-10"><b>Email address</b></label>
                <input type="text" placeholder="" name="username" required class="bg-[#1E1C24] border-[#34333C] border-2 rounded-xl h-12 ">

                <label class="pb-4 pt-8"><b>Password</b></label>
                <input type="password" placeholder="" name="password" required class="bg-[#1E1C24] border-[#34333C] border-2 rounded-xl h-12">

                <input type="submit" id='submit' value='Sign up'class=" mt-10 h-12 bg-gradient-to-r from-[#6871FC] to-[#393DDC] rounded-xl font-lg font-bold">
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
                
            </form>
            <p class="text-right p-4 h-full">Already have an account ? Sign in </p>
            
        </div>      
    </body>
    </html>
        
   
