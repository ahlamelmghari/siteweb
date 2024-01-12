<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mghari</title>
    <!--css-link-->
    
    <link rel="stylesheet" href="contactus.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;500;600;700&family=Playfair+Display:ital,wght@0,400;1,400;1,700&family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="contact-box">
		
			<div class="right">
				<h2>Contact Us</h2>
                <form class="formulaire" method="post" action ="">
				<input type="text" class="field" placeholder="Your Name" name="nom">
				<input type="text" class="field" placeholder="Your Email" name="email">
				<input type="text" class="field" placeholder="Phone" name="phone">
				<textarea placeholder="Message" class="field" name="message"></textarea>
				<button class="btn">Send</button>
                </form>
			</div>
		</div>
	</div>

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
        if(isset($_POST['btn'])) {
            
            
            $nom = $_POST['nom'];
            $email = $_POST['email'];
            $phone=$_POST['phonel'];
            $message=$_POST['message'];
            
            if(!empty($nom)&&!empty($email)&&!empty($phone)&&!empty($message)) 
            {
                // Effectuez vos opérations sur la base de données ici
                echo "L'opération a été effectuée avec succès.";
            
                $sqlstate= $db->prepare('insert into contacts values(null,?,?,?,?)');
                $sqlstate->execute([$nom, $email, $phone, $message]);
                header('location:index1.php');
                
            }
             else {
                echo "Veuillez remplir tous les champs.";
            }
        }

    ?>
</body>
</html>