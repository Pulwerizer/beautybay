
<!DOCTYPE html>
<html>
<head>
   
    
    <title>Page Title</title>
    

</head>
<body>
<form method="post">
   <input type="text" name="imie" placeholder=Imie>
   <input type="text" name="nazwisko" placeholder="nazwisko">
   <input type="password" name="haslo" >
   <input type="submit" name="wyslij" value="wyslij">
    </form>
    <form method="post"> 
    <input type="text" name="Login" placeholder="Login">
   <input type="password" name="Haslo" placeholder="Haslo" >
   <input type=submit name="Logoj" value="Logoj">
    </form>
<?php

$user= "root";
$password="usbw";
$host = "mysql:host=localhost;port=3306;dbname=profile";


if(isset($_POST["imie"]) && isset($_POST["nazwisko"]) && isset($_POST["haslo"]) && isset($_POST["wyslij"]) ){
    $imie=$_POST["imie"];
    $nazwisko=$_POST["nazwisko"];
    $haslo=$_POST["haslo"];
    $k=substr($imie,0,1);
    $login=$k.$nazwisko;
    try{$pdo = new PDO($host,$user,$password);
        echo "Nawiazałes połączenie z baza danych";
    
      
        // echo $login;
        $sql=$pdo->query("INSERT INTO user (Imie,Nazwisko,LoginA,Haslo) VALUES('$imie','$nazwisko','$login','$haslo')");
        echo "<br> Konto o nazwie ".$login." zostało stworzone";
        // if ($result = $pda->query($sql )) {
        //     echo "Konto Zostało Stworzone";
        // }
    }
        
    
    
    
    catch (PDOException $e){
        echo "Bład:". $e -> getMessage();
        exit();
    }
    }
    if(isset($_POST["Login"])  && isset($_POST["Haslo"]) && isset($_POST["Logoj"]) ){
        $login=$_POST["Login"];
        $haslo=$_POST["Haslo"];
        try{$pda = new PDO($host,$user,$password);
               echo "Nawiazałes połączenie z baza danych";
           
              
       
         
           $wyniktestulog=$pda -> query("SELECT LoginA,Haslo FROM User");
        //    $wynik=$wyniktestulog -> fetchAll();
        //    print_r($wynik);
        //    while($res = $wynik=$wyniktestulog -> fetchAll()){
        //        if(in_array($login,$res)== true){
        //                   if(in_array($haslo,$res)== true){
        //                       echo "Witaj ".$login."jesteś zalogowany.";
        //                   }
        //                 }
        //                }  
        foreach($wyniktestulog as $w){
                if(($w['LoginA']) == $login && ($w['Haslo'])==$haslo){
                    echo "<br> Witaj ".$login." zalogowany!";
                }




        } 
                   } 
               
           
       
           catch (PDOException $e){
               echo "Bład:". $e -> getMessage();
               exit();
           }
    
    }
    
    
    
    
    $konkiz="kjefrngoneg4809u438u";
    $nazwoko="Kowalskiego";
    $email="nino.koip@interia.pl";
    $pesul="123457685743";
    $kaczki='/[0-9]{10}/';
    $snaczki="/^[A-Z]{0,1}[a-z]{1,10}$/";
    $eznaczki='/^[a-z|A-Z|0-9]{4,20}.[a-z|A-Z|0-9]{4,15}@[a-z|A-Z|0-9]{2,10}.pl|gr|com$/';
    $protogol="/^[http|https|ftp]:\/\/\/([a-z|A-Z]{1,10}.[pl|com|de|])/";
    $link="http://zsem.pl";
    echo"<br>";
    if(preg_match($protogol,$link)){echo "Link :Jest git"."<br>";}else{echo "Link:nie jest git"."<br>";};
    if(preg_match($kaczki,$pesul)){echo "Pesel :Jest git"."<br>";}else{echo "Pesel:nie jest git"."<br>";};
    if(preg_match($snaczki,$konkiz)){echo "Imie :Jest git"."<br>";}else{echo"Imie:nie jest git"."<br>";};
    if(preg_match($snaczki,$nazwoko)){echo "Nazwisko :Jest git"."<br>";}else{echo"Nazwisko:nie jest git"."<br>";};
    if(preg_match($eznaczki,$email)){echo "mail :Jest git"."<br>";}else{echo"Mail :nie jest git"."<br>";} ;
    
    ?>


</body>
</html>