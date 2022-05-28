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
    <body class="bg-[#191720] w-full h-screen flex flex-col items-center lg:items-end">
            <img src="assets/image.png" class="h-full hidden lg:flex lg:-z-10 absolute left-0">
            <header class="text-white w-10/12 mt-16 lg:w-5/12 lg:mt-8">
                <p class="hidden lg:flex text-5xl font-bold">Sign up</p>
                <div class="lg:flex lg:flex-col  lg:rounded-3xl lg:backdrop-blur-3xl lg:w-4/12 lg:h-5/6 lg:absolute lg:left-28">
                    <h1 class="text-xl lg:p-4 lg:text-2xl lg:bg-[#7377D5] lg:w-fit lg:mt-8 lg:ml-8">Binary</h1>
                    <p class="pt-10 lg:p-8">We are</p>
                    <h2 class="text-2xl pt-8 lg:pt-2 lg:p-8">Invite online right now.</h2>
                    <p class="pt-2 lg:p-0 lg:pl-8">10 people have joined our team.</p>
                    <p class="lg:p-0 lg:pl-8">We invite you to join the tribe.</p>                   
                </div>     
            </header>
            <!-- zone de connexion -->
            <form action="verification.php" method="POST" class="flex flex-col lg:w-5/12 lg:mt-8 w-10/12 text-white lg:pr-24">
                <label class="pb-4 pt-2 lg:pt-10 lg:text-xl"><b>Email address</b></label>
                <input type="email" name="email" id="email" class="lg:pl-5 lg:mt-5 h-12 bg-[#1E1C24] border-[#34333C] border-2 invalid:border-red-500 rounded-lg lg:h-16">
                <p class="invisible m-3" id="errorEmail">Please enter a valid address mail</p>

                <label class="pb-2 pt-2 lg:pt-2 lg:text-xl"><b>Password</b></label>
                <input id="password" type="password" placeholder="" name="password" class="lg:pl-5 lg:mt-5 h-12 bg-[#1E1C24] border-[#34333C] border-2 invalid:border-red-500 rounded-lg lg:h-16">
                <p class="invisible m-3" id="errorPassword">Please enter a valid password</p>

                <input type="submit" id='submit' value='Sign up'class=" mt-2 lg:mt-2 lg:h-16 h-12 bg-gradient-to-r from-[#6871FC] to-[#393DDC] rounded-xl font-lg font-bold">
                <hr WIDTH="100%"  ALIGN="center" class="mt-14 border-[#34333C] hidden lg:flex">
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
               
                ?>
            </form>
            <div class="flex flex-row-reverse mt-14 lg:mr-18 w-10/12 lg:w-1/2 lg:pr-24">
                <p class="text-sm  text-[#616066] lg:text-xl">Already have an account ? <span class="font-bold text-white">Sign in</span></p>
            </div>  
      
        <script src="script.js"></script>     
    </body>
    </html>
        
   
