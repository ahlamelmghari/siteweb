


 
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
            <li><a href="index1.php">E-SHOP</a></li>
            <li><a href="index1.php">about us</a></li>
            
        </ul>
        <div class="nav-icon">
            <a href="#"><i class='bx bx-search'></i></a>
            <a href="#"><i class='bx bx-user' ></i></a>
            <a href="#"><i class='bx bx-cart'></i></a>
        
          <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <section class="seconnecter">
        <h1>se connecter</h1>
    </section>
 
    <form class="formulaire" method="post" action ="">
        <div class="mb-3">
          <label for="email" class="formlabel"><span>E-mail</span> </label>
        </div>
          <input type="email" name="email" class="formcontrol" id="email" placeholder="Adress email">
        
        <div class="mb-3">
          <label for="password" class="formlabel">
            Mot de passe
          </label>
        </div>
          <input type="password" name="password" class="formcontrol" id="password" placeholder="password"><br>
        
        
        <input type="submit"  name="connexion"  class="connexion" value="connexion">
          
        
        <div class="inscri">
           <a href="inscription.php"> <p>S'inscrire</p></a>
        </div>

    </form>
    <div class ="mghari"><P>#MGHARI</P></div>
    <?php
$user ='root';
$pass='';
try{
  $db=new PDO('mysql:host=localhost;dbname=mghari',$user,$pass);
 // echo "la connexion ala base de donnees a reussit";
}catch(PDOExeption $e)
{
  print "erreur:".$e ->getMessage()."<br/>";
  die;
}
if(isset($_POST['connexion'])) {
            
            
  $password= $_POST['password'];
  
  $email=$_POST['email'];
  
  
  if(!empty($password)&&!empty($email)) 
  {
  
    $sqlstate= $db->prepare('select*from  mesclients where email =? and password=? ');
    $sqlstate->execute([$email,$password]);
    if($sqlstate->rowCount()>=1)
    {
       session_start();
       $_SESSION['mesclients']=$sqlstate->fetch();
       header('Location: index1.php');
       exit();

    }
    else
    {
       echo 'login ou password inncorect';
    }
   }
 
 else 
  {
   echo "Veuillez remplir tous les champs.";
   }

  }


?>
      
        
      
      
 

          
    

</body>
</html>
    
