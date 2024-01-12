<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mghari</title>
    <!--css-link-->
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;500;600;700&family=Playfair+Display:ital,wght@0,400;1,400;1,700&family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <header >
        <a href="#" class="logo"><img src="images/logo 2.png" alt=""></a>
        <ul class="navmenu">
            <li><a href="index1.php">home</a></li>
            <li><a href="#products">E-SHOP</a></li>
            <li><a href="#about">about us</a></li>
            
        </ul>
        <div class="nav-icon">
            <a href="#"><i class='bx bx-search'></i></a>
            <a href="#"><i class='bx bx-user' ></i></a>
            <a href="#"><i class='bx bx-cart'></i></a>
        
          <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>
  <section class="seconnecter">
        <h1>s'inscrire</h1>
    </section>

    
        <form class="formul" method="post">
            <div class="mb-3">
            <label for="nom" class="label-inscrire" >Nom:</label>
            </div>
            <input type="text"  class="input-inscrire" name="nom">

            
            <div class="mb-3">
            <label for="prenom" class="label-inscrire" >Prenom:</label></div>
            <input type="text"  class="input-inscrire" name="prenom">

            
            <div class="mb-3">
            <label for="email" class="label-inscrire" >Email:</label> </div>
            <input type="email" class="input-inscrire"  name="email">



            
            <div class=mb-3>
            <label for="password" class="label-inscrire">Password:</label> </div>
            <input type="password" id="password" class="input-inscrire" name="password"><br>
     
            <input type="submit" value="s'inscrire" class="sinscrire" name="ajouter">
            




            
        
        </form>
        
  <?php
    $user ='root';
     $pass='';
     try{
    $db=new PDO('mysql:host=localhost;dbname=mghari',$user,$pass);
     }catch(PDOExeption $e)
     {
     print "erreur:".$e ->getMessage()."<br/>";
     die;
     }
        if(isset($_POST['ajouter'])) {
            
            
            $nom = $_POST['nom'];
            $pd = $_POST['password'];
            $email=$_POST['email'];
            $prenom=$_POST['prenom'];
            
            if(!empty($nom)&&!empty($pd)&&!empty($prenom)&&!empty($email)) 
            {
                // Effectuez vos opérations sur la base de données ici
                echo "L'opération a été effectuée avec succès.";
            
              $sqlstate= $db->prepare('insert into mesclients values(null,?,?,?,?)');
              $sqlstate->execute([$nom,$prenom,$email,$pd]);
              header('location:connexion.php');
            }
             else {
                echo "Veuillez remplir tous les champs.";
            }
        }

    ?>
       



      


      


    

        





</body>

</html>