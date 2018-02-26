<style>
h2{
	margin: 0;
	font-size:15px;
	background: #dedede;
	text-align:center;
	padding:10px;
}
</style>
<h2>Ecriture et affichage</h2>
<!-- Nous pouvons écrire du HTML dans un fichier ayant l'extension PHP, l'inverse n'est pas possible -->

<?php 
echo '<h3>Bonjour</h3>'; //echo est une instruction d'affichage qui se traduit par "affiche-moi"
// si on regarde le code source de notre page, on ne voit pas le php apparaitre dans ce code source.

//on ne verra pas le code php car ce langage est INTERPRETé

?>

<?= "Allo" ?>  <!--le "=" remplace le "echo". --> 

<?php print 'Nous sommes Mercredi'; 
/**
 * print est une autre instruction d'affichage. Il n'y a PAS DE DIFFERENCE ENTRE ECHO et PRINT 
 * 
 * On n'est obligé de fermer la balise php "?>"  si sur la page nous codons seulement du PHP
 */
echo '<hr><h2>Variables : types / Déclaration / Affectation </h2>';
//une variable est un espace nommé permettant de conserver une valeur.
// on déclare toujours une variable avec le signe dollars '$' suivi du nom de la variable
//  ex : $a2 -> ok --------$a2 -> erreur, jamais de chiffre apres le signe dollar, pas d'accent, pas d'espace

$a=127;  //affectation de la valeur 127 dans la variable nommée "a"
gettype($a);// fct predefinie dans le code PHP permettant de voir le type d'une variable. //ici ca ne fonctionne pas car je n'ai pas mis le mot "echo"

//aller toujours sur le site php.net pour trouver les doc, les exemples ...
// a savoir: sous visual studio code:  exemple suivi de ... affiche <exemple class=""></exemple>  dès qu'on valide.
echo '<br>';
$b =1.5;
echo gettype($b); // un nombre à virgule : double

echo '<br>';
$c="une chaine"; //une chaine de caracteres
echo gettype($c);	// une chaine de caracteres: string

echo '<br>';
$d='127';
echo gettype($d);	// une chaine de caracteres: string

echo '<br>';
$e= true;
echo gettype($e);	//un boolean

echo '<br>';
$a=127;
echo gettype($a);	// Il s'agit d'un entier: integer


//Attention, a savoir:

echo '<hr><h2> concaténation  </h2>';
$x="bonjour";
$y=" tout le monde";
echo $x.$y."<br>"; // le "." signifie: "suivi de..."											// bonjour tout le monde
echo "$x $y <br>"; // entre guillemets, les variables sont évaluées								// bonjour tout le monde 
echo '$x $y <br><br>'; // entre quote, c'est une chaine de caractères, les variables ne sont pas évaluées		// $x $y 

echo 'aujourd\'hui <br>'; 
echo "hey!".$x.$y;
echo "<br>", "coucou" , "<br>";	// concatenation avec une virgule (la virgule et le point de concatenationsont similaires)

//----------------------------------------------------------------------
echo '<hr><h2>Concaténation lors de l\'afectation</h2>';
$prenom1="Grégory";
$prenom1="Andrei";
echo $prenom1."<br>";

$prenom2= "Grégory";
$prenom2 .=" Andrei";
echo $prenom2;	//cela ajoute Andrei sans remplacer la valeur Grégory, grace à l'opérateur '.='

//-----------------------------------------------------------------------
echo '<hr><h2>Constante et constante magique</h2>';
// c'est comme une variable, ca permet de conserver une valeur. A la différence que sa valeur ne pourra pas etre modifiée durant l'execution du script.

define("CAPITALE", "Paris"); // la premiere info c'est le nom de ma constante. Elle se déclare toujours en majuscule. suivi de la valeur de la constante. 
echo CAPITALE . "<br>";

// define("CAPITALE","Rome");     Nous renvoie un message d'erreur, nous informant que cette constante est deja definie.

//Constante magique
echo __FILE__ .'<br>';	//renvoie le chemin complet vers le fichier 
echo __LINE__ .'<br>'; 	//renvoie la ligne sur laquelle se trouve cette instruction.
// ATTENTION a ne pas oublier de mettre les 2_ avant et apres,  &   ATTENTION à ne pas oublier  les 2 " ", l'un apres "echo", l'autre avant le "." 


$bleu="bleu";
$blanc="blanc";
$rouge="rouge";
$tiret="-";

 echo $bleu.$tiret.$blanc.$tiret.$rouge."<br>";
 
 //correction du prof:
 echo "$bleu-$blanc-$rouge<br>";
 
 //-----------------------------------------------------------------------
 echo '<hr><h2>Opérateurs arithmétiques</h2>';
 $a=10; $b=2;
 echo $a + $b . "<br>"; //12		
 echo $a - $b . "<br>"; //8
 echo $a * $b . "<br>"; //20
 echo $a / $b . "<br>"; //5

 // opération/ affectation
 $a=10; $b=2; 
  $a += $b; //cela equivaut à $a=$a+$b
  echo $a."<br>"; // affiche 12 
  $a -= $b; //cela fait 10 et non 8 car je viens de changer la valeur de $a
    echo $a . "<br>";
  $a*=$b; //cela me retourne 20
    echo $a . "<br>";
  $a/=$b;
  echo $a . "<br>";	//affiche 10
  
  //-------------------------------------------------------------------------
  echo '<hr><h2>Structure Conditionnelle (if /else) </h2>';
  //isset et empty
  $var1 = 0;	//en php on ne peut pas definir une variable sans lui affecter de valeur contrairement au Javascript
  $var2 = "";	// par contre, si $var2 = " "; ce n'est pas vide donc je ne rentrerai pas dans le if.
  //$var3		// on n'a pas defini la variable 3
  if(empty($var3))
  // il existe 4 CAS qui rendent la VARIABLE: "EMPTY" : 
		//	- $var3="" 
		//	- $var3=0 ou 
		//	- $var3 est INEXISTANT !!!
		//	- $var3 est NULL
  
  {
		echo '0, vide ou non définie: ';	// ceci s'appelle une instruction
		  echo "<br>";	
  }
  if(empty($var2))
  {
		echo '0, vide ou non définie';	// ceci s'appelle une instruction
  }
  // empty teste si une variable a la valeur 0 , si elle est vide: "" ou si elle n'est pas definie. ou si elle est Null
   echo "<br>";
  if(isset($var2))
  {
	  echo "var2 existe et est définie par rien";
  }
    echo "<br>";	
  //----------------------------------------
  

  $tonton=0;
  if(isset($tonton)){echo "sarah, je t'aime !!";}	
  //on rentre dans le if seulement si $tonton est DECLARE PLUS HAUT
  //bref le seul cas pour lequel on ne rentre pas c'est: 
		//	- $tonton est INEXISTANT !!!
  
  
  /** (si une variable est egale à 0 alors elle est vide.) **/
  
  //isset teste l'existence d'une variable, si elle existe,c'est à dire si elle est déclarée, c'est à dire si elle est définie.
  
  // (
  //empty signifie "vide", c'est à dire : c'est seulement le cas où $variable2="". Si $variable2=0, on serait rentré dans le if car alors ma variable ne serait pas vide... car elle contiendrait 0
  // )
  
  $variable2="";  
  if(isset($variable2) && !empty($variable2))	
  // pour afficher le contenu du if, il est necessaire que:
		//que $variable2 ne soit pas empty, c'est à dire qu'il faut qu'elle soit déclarée 	& 	!= ""	&	!= 0	& !=Null
		//&
		//que $variable2 soit isset, 		c'est à dire qu'il faut qu'elle soit déclarée.
		//En bref, $variable2 doit etre != aux 4 cas de "empty"  pour afficher le contenu du if !
  {
	  echo 'variable2 existe et n\'est pas vide';
	  echo "fgdfgfgdfgdfgdfgdfgdfgdfgdfgdfgdfgdfg";
  }
    echo "<br>";	
  //opérateurs de comparaison
  
  /*
  =		affectation
  ==	comparaison de valeur
  ===	comparaison de valeur et de type
  >		
  <
  =>
  =<
  !=	différent de
  ! 	n'est pas
  
  && AND et
  || OR ou
  
  XOR     c'est un ou Exclusif// Donc si l'une ou l'autre; mais pas les 2
  */
  
  $a=10;$b=5;$c=2;
  if($a>$b)
  {
	  echo "A est bien supérieur à B";
  }
  else
  {
	  echo "Non c'est B qui est supérieur à A";
  }
  
    echo "<br>";	
//------------------------------------
  $a=10;$b=5;$c=2;

if($a==10)
{
	echo "1 - A est égal à 10<br>";
}	
elseif($b==5)
{
	echo "2 - B est égal à 5<br>";
}
else
{
	echo "3 - Sinon, par défaut<br>";
}
// si la première condition est respectée, alors le elseif stoppera le script, bien que la 2eme condition soit respéctée. On peut déclarer une cdtion avec plusieurs elseif, en revanche, il n'y a qu'un seul cas par défaut: c'est ce qu'on renseigne dans notre "else", à la fin. Bref,il n'y a pas de croisement de 2 chemin à chaque fois...

    echo "<br>";
//-----------------------------------
// condition exclusive
if($a==10 XOR $b==6)
{//cela signifie : si $a=10 ou si $b=6 alors on rentre dans le if.
//mais ON N Y ENTRE PAS SI $a=10 ET $b=6

	echo "ok condition exclusive";
	//bref, si les 2 conditions sont vraies ou si les 2 conditions sont fausses, nous ne rentrerons pas dans le if.
}
    echo "<br>";
//------------------------------------
// Forme contractée: 2eme possibilité d'écrire un if
    echo "<br>";
echo($a==10)? "A est égal à 10" : "A n'est pas égal à 10";
    echo "<br>";

//-------------------------------------
// comparaison
$vara=1;
$varb="1";
if($vara==$varb)
{	// on rentre bien dans cette condition car on ne compare que la valeur; pas le type. 1 = "1"
	echo "il s'agit de la même chose";
}

    echo "<br>";
	
// Avec la présence du triple égal, la condition n'est pas respectée car les valeurs sont les meme mais les types sont différents

//-------------------------------------
echo'<hr><h2>Condition switch</h2>';
$couleur="bleu";

switch($couleur)
{
	case 'bleu':
	echo "Vous aimez le bleu";
	break;//break stoppe l'execution du script si un des cas est vérifié
	
	case 'rouge':
	echo "Vous aimez le rouge";
	break;	
	
	case 'vert':
	echo "Vous aimez le vert";
	break;

	default:
	echo "Vous n'aimez rien";
}
    echo "<br>";

// Exercice : faire la même chose que le switch avec if/else?
$couleur="jaune";

if($couleur=="bleu")
{
	echo "Vous aimez le bleu";
}
elseif($couleur=="rouge")
{
	echo "Vous aimez le rouge";
}
elseif($couleur=="vert")
{
	echo "Vous aimez le vert";
}
else
{
	echo "Vous n'aimez rien";
}

    
	echo "<br>";
	
//---------------------------------------------------------------------------

echo "<h2>Fonctions prédéfinies : traitement des chaines </h2>";

//une fonction prédéfinie permet de réaliser un traitement spécifique

echo "Date: ";
echo date("d/m/Y"); // avec un y minuscule, ca nous retourne 18 au lieu de 2018.	//voir aussi les Token en sql.
// toujours penser à consulter la documentation

	echo "<br>";
	
//---------------------------------------------------------------------------
$email1= "glx78@free.fr"; // email de Gregory LACROIX
echo strpos($email1, "@"); // va retourner la position du caractere @ dans ma chaine. Dans ce cas, ca me sert egalement à controler que l'adresse mail est bien valide.
/*elle recoit 2 arguments : 
*-la chaine à analyser
*-l'information à chercher */
	echo "<br>";
$email2="bonjour";
echo strpos($email2, "@");	// il n'affiche rien mais il me retourne qq chose. pour voir ce qu'elle me retourne, il existe une fct d affichage amélioré: var_dump (c'est un peu comme le console.log en javascript)
	echo "<br>";
var_dump(strpos($email2, "@"));	// il retourne false, car il n'a pas trouvé l'arobase. false est un boolean.
	echo "<br>";
// Attention ! var_dump() est une fonction (d'affichage amélioré) à n'utiliser que pour nous, les programmeur; le user ne doit pas voir ce qu'affiche var_dump. c'est pour déboguer le code uniquement

$phrase= "Mettez du texte à cet endroit";
echo iconv_strlen($phrase); // ca me retourne la taille en caracteres contrairement a strlen() qui compte en octets, ce qui donne parfois un calcul qui nous induit en erreur. Donc IL VAUT MIEUX UTILISER ICONV_STRLEN()

/*
en cas de succes, il m'affichera un nombre / un integer
en cas d'echec, il me retourne un boolean, un false
Exemple d'utilisation de cette fonction: lors d'une inscription si je veux savoir si le pseudo a une taille conforme et controler egalement, par ex, si le mot de passe a une taille conforme.
*/
	echo "<br>";
	
//--------------------------------------------------------------------------------
$texte="cvxvxcv cvxcvcxvxc  c xc v xcv xc v xc , cvfvcvc  cvxcvxcx  v x cv x c v f  fg h  s   cf sd  qsd qj.";
echo substr($texte, 0, 20)."...<a href=''> Lire la suite </a>"; // Cette fonction va couper et récupérer seulement les 20 premiers caracteres de la chaine de la variable $texte
/*
substr() est une fonction prédéfinie permettant de retourner une partie de la chaine
arguments:
1 - la chaine a couper
2 - la position de début
3 - la position de fin
contexte : sur certains articles, on a une accroche puis un lien permettant de voir le reste de l'article
*/
    
    echo "<br>";
    echo "<hr>";

//$mavar1="";
 
 if(empty($mavar1))	//si $mavar1 N'EST PAS déclarée OU si $mavar1=0 OU si $mavar1="" OU si $mavar1=Null
{
    echo "empty";   //empty:""
    echo "<br>";    
}
if(isset($mavar1))	// isset — Détermine si une variable est définie et est différente de NULL. 
//Donc  si $mavar1 	N'EST PAS DECLAREE OU bien,
// 		si elle 	EST DECLAREE MAIS 	que $mavar1=Null 	alors Le contenu ci-dessous NE S'AFFICHERA PAS !!!:
{
    echo "isset";   //
    echo "<br>";
}
if(is_null($mavar1))// ce echo s'affiche lorsqu'on a $mavar1=Null ou lorsque $mavar1 n'est pas déclaré plus haut;
// Bref is_Null est l'inverse de isset !!!!
{
    echo "is null";	
    echo "<br>";
}
//if(is_void($mavar1))
//{
//    echo "void";
//}
//if(void($mavar1))
//{
//    echo "void";
//}

    echo "<hr>"; 
    echo "<br>";

//-------------------------------------------------------------------------------------------------------------
echo "<h2>Fonctions utilisateur </h2>";

// Les fonctions qui ne sont pas prédé"finies dans le langage, sont déclarées puis exécutées par l'utilisateur
function separation()   //déclaration d'une fonction prévue pour ne pas recevoir d'arguments
{
    echo "<hr><hr><hr>";
}

separation();   // exécution de la fonction


//-------------------------------------------------------------------------------------------------------------

//Fonctions avec arguments

function bonjour($qui)  // $qui est une variable de réception. Je serai obligé de renvoyer un argument à cette fonction         //etape 2
// je pourrai écrire: function bonjour($qui="andrei") 
// et dans ce cas, si je tape bonjour(), ca fonctionne. ca m'affiche "andrei".
// et si je tape bonjour("Paul"), ca m'affichera "Paul" et non "andrei", qui est ma valeur par defaut(c'est a dire:  valeur attribuée si la fonction ne recoit pas d'argument)
{
    echo "Bonjour $qui<br>";                                                                                                    //etape 3
}

bonjour("Andrei");                                                                                                              //etape 1
    echo "<br>";


//L'ESPACE LOCAL c'est à l'intérieur d'une fonction !!!
//-----------------------------------------------------------------------------------------------------------------------------------------------------------
function joursemaine()
{
    $jour= "Jeudi"; // variable déclarée dans l'ESPACE LOCAL c'est à dire à l'intérieur d'une fonction.
    return $jour;   // le return nous fait sortir immédiatement de la fonction. return nous RETOURNE une valeur mais ne l'affiche pas
    echo 'ALLO';    // ALLO ne s'affiche pas à cause du return du dessus.
}

echo joursemaine();
echo $jour;           // /!\ ne s'affiche pas car cette variable n'est connue qu'à l'intérieur de la fonction.
// par contre on pourrait faire:
$recup= joursemaine();
echo $recup;

    echo "<br>";
//-----------------------------------------------------------------------------------------------------------------------------------------------------------
$pays = "France";

function affichagePays()
{
    echo $pays; // ca ne s'affiche pas.
    //A savoir, une variable definie en GLOBAL n'est pas connue en LOCAL
    //       et une variable definie en LOCAL n'est pas connue en GLOBAL.
    //       la différence c'est qu'on peut IMPORTER une variable GLOBALE en LOCALE; mais PAS L'INVERSE 
}

affichagePays();  

//-----------------------------------------------------------------------------------------------------------------------------------------------------------
$pays = "France";
											/* ------ LE MOT CLE :  GLOBAL ------ */
								/* Mot à placer dans la fonction pour appeler une variable dans le main */
function affichageDESpays()
{
    global $pays; // pour importer une variable déclarée en global vers l'espace local, nous devons utiliser le mot clé "global"
    echo $pays;
}

affichageDESpays();

$mavar1=0;
if(isset($mavar1))
{
	echo "isset!";	// est considéré isset: 10, 0, ""
}
if(empty($mavar1))
{
	echo "empty!";	// est considére empty: 0, "", non déclaré
}
//if(void($mavar1))	
//{
//	echo "void!";
//}

// ON NE PEUT PAS DECLARER 2 FOIS UNE FONCTION AVEC LE MEME NOM. J'AI DONC APPELE LA 2eme FONCTION : affichageDESpays()

echo "<br>";
//-----------------------------------------------------------------------------------------------------------------------------------------------------------

function appliqueTva($nombre)
{
    return $nombre*1.2;
}
echo appliqueTva(500);

echo "<br>";
//-----------------------------------------------------------------------------------------------------------------------------------------------------------
// EXERCICE : améliorer cette fonction afin que l'on puisse calculer un nombre avec les taux de notre choix (19.6%, 5.5%, 7%)

function appliqueLAtva($nombre, $taux)
{
    switch($taux){
        case "19.6%":   return $nombre*1.196;
        break;
        case "5.5%":    return $nombre*1.055;
        break;
        case "7%":      return $nombre*1.07;
        break;
        default:        return $nombre*1.20;
    }
    
}

$letaux="19.6%";
echo appliqueLAtva(500,$letaux);

echo "<br>";

//-------------------------------------------------------------------------------------------------------------------------------------------------------------
                                            // ON PEUT EXECUTER UNE FONCTION AVANT DE L AVOIR DECLAREE:

meteo("hiver", -1);
function meteo($saison, $temperature)
{
    $s="s";
    if((-1)<=$temperature && $temperature<=1){
        $s="";
    }
    echo "Nous sommes en $saison et il fait $temperature degré$s <br>";
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------

echo "<br>";


echo "<h2>Boucle : structure itérative </H2>";
$i=0;
while($i<3)
{
    echo "$i---";
    $i++;           
}

echo "<br>";
//Exercice: supprimer les --- à la fin; bref, afficher 0---1---2
$j=0;
while($j<3)
{
    if($j<2)
        echo "$j---";
    
    else
        echo "$j";
    
// ICI ON NA PAS MIS D'ACCOLADES CAR CA N EST PAS NECESSAIRE. LES ACCOLADES SONT NECESSAIRES LORSQU'IL Y A + D'UNE INSTRUCTION, DANS LE IF, OU DANS LE ELSE, OU DANS LE IF ET DANS LE ELSE.  
    $j++;           
}


echo "<br>";
//-------------------------------------------------------------------------------------------------------------------------------------------------------------

// boucle for
for($j=0;$j<5;$j++) // valeur de départ, cdtion d entrée, incrémentation
{
    echo $j. "<br>";
}
echo "<br>";
//-------------------------------------------------------------------------------------------------------------------------------------------------------------

echo '<select>';
echo '<option>1</option>';
echo '<option>2</option>';
echo '<option>3</option>';
echo '<option>4</option>';
echo '<option>5</option>';
echo '<option>6</option>';
echo '<option>7</option>';
echo '<option>8</option>';
echo '<option>9</option>';
echo '</select>';
echo "<br>\n";
echo "<br>";
// Exercice : afficher 16 options via une boucle

echo "<select>";
    for($j=1;$j<=30;$j++)
    {
        echo "<option>$j</option>";
    }
echo "</select>";


echo "<br>";
//-------------------------------------------------------------------------------------------------------------------------------------------------------------

// Exercice : Faire une boucle de 0 a 9 sur la même ligne dans un tableau HTML

echo "<br>";
echo "<table border=1 cellpadding=0 cellspacing=0>";
echo "<tr>";
for ($i=0;$i<10;$i++){
echo "<td> $i </td>";
}
echo"</tr>";
echo "</table>";

echo "<br>";
//-------------------------------------------------------------------------------------------------------------------------------------------------------------

echo "<br>";

echo "<table border=1 cellpadding=0 cellspacing=0>";
$variable=0;
for($i=0;$i<10;$i++)
{
    echo "<tr>";    
    for($k=0;$k<10;$k++)
    {
        echo "<td>_";
        if($variable<10)echo "0";
        echo $variable; 
         echo "_</td>";
        $variable++;
    }    
    echo "</tr>";
}
echo "</table>";

echo "<br>";


// Exercice : Faites la même chose en allant de 0 à 99 sur plusieurs lignes sans faire 10 boucles

//correction 1  du prof

$z = 0;

echo '<table border=1>';
for($ligne = 0; $ligne < 10; $ligne++)
{
	echo '<tr>';
	for($cellule = 0; $cellule < 10; $cellule++) // tant que ligne est à zéro, cellule s'incrémente 10 fois, ligne est à 1, cellule s'incrémente 10 fois etc..
	{
		echo '<td>' . $z . '</td>'; // $z ne reviens jamais à 0 puisqu'on l'incrémente à chaque tour de boucle
		$z++; // $z = $z + 1;
	}
	echo '</tr>';
}
echo '</table><br>';


// correction 2 du prof
echo '<table>';
for($ligne = 0; $ligne < 10; $ligne++)
{
	echo '<tr>';
	for($cellule = 0; $cellule < 10; $cellule++)
	{
		echo '<td>' . (10 * $ligne + $cellule) . '</td>';	//la cellule du tableau aura une valeur = à 	10 X LE_NUMERO_DE_LA_LIGNE   +    LE_NUMERO_DE_LA_COLONNE 		ex: 61= 6x10  +  1

	}
	echo '</tr>';
}
echo '</table>';	


echo "<br>";
echo "<br>";
//------------------------------------------------------------------------------------------------------------------------
								//les ARRAY  il n'y a que 2 methodes: soit avec les (), soit avec les []
					
//  ___________________
// |_0_|__Gregory______|
// |_1_|__John_________|
// |_2_|__Andrei_______|
// |_3_|__Adeline______|
// |_4_|__Jonathan_____|

echo "<H2>Boucle : tableau de données ARRAY </H2>";
// c est plus perfectionne qu une variable car ca peut contenir plusieurs valeurs.

$liste=array("Grégory","John","Andrei","Adeline");
echo $liste;	// /!\ azttention erreur, on ne peut pas afficher les données d'un tableau avec une instruction classique
echo "<br>";
echo "<br>";
var_dump($liste);
echo "<br>";
echo "<br>";
echo '<pre>'; var_dump($liste); echo '</pre>';
echo "<br>";
echo "<br>";
echo '<pre>'; print_r($liste); echo '</pre>';	// Print_r, comme implode, et comme foreach et comme join() servent à afficher des tableaux. Pas echo !!!


//var_dump et print_r sont des instructions d'affichage amélioré. <pre> est une balise HTML
//permettant de formater le texte, cela nous permet de mettre en forme la sortie du print_r
//contexte: lorsqu'on récupère des informations en BDD, nous les retrouverons sous forme d'ARRAY

//-------------------------------------------------------------------------------------------------------------------------

echo "<H2>Boucle : boucle foreach pur les tableau de données ARRAY </H2>";
$tab[] = "France";
$tab[] = "Italie";
$tab[] = "Espagne";
$tab[] = "Portugal";
$tab[] = "Angleterre";
$tab[] = "Suisse";	// autre moyen de déclarer un tableau ARRAY, à l'aide des crochets '[]'

echo '<pre>'; print_r($tab); echo '</pre>';

// EXERCICE: sortir "Italie" en passant par le tableau ARRAY sans faire un echo "Italie"

echo $tab[1];	// on va crocheter à l'indice 1 du tableau de données ARRAY

echo "<br>";
echo "<br>";

foreach ($tab as $info) // $info est une variable que je crée arbitrairement, qui vient parcourir la colonne des valeurs du tableau de données ARRAY et qui va contenir, POUR CHAQUE TOUR DE BOUCLE une valeur différente.
// Le mot AS fait partie du langage est et obligatoire.
{
	echo $info. "<br>";	// on affiche successivement les éléments du tableau
} 
echo "<br>";
echo "<br>";

// on pourrait aussi extraire l'indice:
foreach($tab as $indice => $info)	// on aurait pu appeler $info et $indice comme on veut. 
//Quand il y a 2 variables, la 1ere parcourt la colonne des indices et la 2eme parcourt la colonne des valeurs
{
	echo $indice . "=>" . $info. "<br>";	// on affiche successivement les éléments du tableau
} 

$couleur = array("j" => "jaune", "r"=>"rouge", "v"=> "vert", "b"=>"bleu"); // il est possible de définir les indices du tableua de données ARRAY
echo '<pre>'; print_r($couleur); echo '</pre>';

echo "<br>";
//Afficher successivement les données (indice,valeur) du tableau représenté par la variable $couleur
foreach($couleur as $indice => $valeur) // FOREACH fonctionne aussi bien pour les tableaux Array que pour les objets à parcourir
{
	echo $indice. "=>".$valeur. "<br>";
}
echo 'taille du tableau: '. count($couleur)."<br>";
echo 'taille du tableau: '. sizeof($couleur)."<br>";	// c'est la meme chose que count. La doc dit que "sizeof est un alias de count". Ceux sont des fctions prédéfinies.

echo implode("-", $couleur);	// implode() est une fonction prédéfinie qui rassemble les elements d'un tableau en une chaine (séparé par un symbole)

//-------------------------------------------------------------------------------------------------------------------------

echo "<H2>Tableau de données ARRAY multidimensionnel</H2>";

$tab_multi = array(
			0=> array("prenom" => "Grégory", "nom"=> "Lacroix"),
			1=> array("prenom" => "Adeline", "nom"=> "Clere"),
			);
			
echo '<pre>'; print_r($tab_multi); echo '</pre>';

//Exercice: sortir 'Clere' en passant par les tableaux ARRAY et sans faire de echo "Clere"

echo $tab_multi[1][nom];	//Notice: Use of undefined constant nom - assumed 'nom' in C:\xampp\htdocs\fomation-front\Formation-Front\JS\PHP\entrainement.php on line 721
echo "<br>";
echo $tab_multi[1]["nom"];	//Clere
echo "<br>";
echo "<br>";

echo "<hr>";
// Exercice : extraire les valeurs des tableaux multi à l'aide de boucle
foreach($tab_multi as $valeur)  // FOREACH fonctionne aussi bien pour les tableaux Array que pour les objets à parcourir
{
	//print_r($valeur);
	foreach($valeur as $sonNom) // FOREACH fonctionne aussi bien pour les tableaux Array que pour les objets à parcourir
	{
		echo $sonNom."<br>";
	}
}

echo "<br>";
echo "<br>";


//Correction de Grégory
foreach($tab_multi as $indice1=>$tableau)   // FOREACH fonctionne aussi bien pour les tableaux Array que pour les objets à parcourir
{
	echo implode("-",$tableau).'<br>';  // ATTENTION ! Ne pas oublier de mettre le ECHO devant implode
	echo '<hr>';
}
// implode (ou aussi print_r) peut REMPLACER un FOREACH pour AFFICHER l'ensemble des VALEURS d'un tableau sur une MEME LIGNE, séparés par un SEPARATEUR que l'on définit. ex: - , " " , ...
// implode( $separateur , $tableau );
//Il existe une fonction totalement similaire à la fonction implode, il s’agit de la fonction join().


echo "<br>";
echo "<br>";

// Autre correction de Grégory
foreach($tab_multi as $indice1 => $tableau) // FOREACH fonctionne aussi bien pour les tableaux Array que pour les objets à parcourir
{
	//print_r($valeur);
	foreach($tableau as $indice2 => $valeurs)   // FOREACH fonctionne aussi bien pour les tableaux Array que pour les objets à parcourir
	{
		echo $indice2 . ":" . $valeurs."<br>";
	}
	echo '<hr>';
}
// on aurait pu, opur cette 2eme correction, utiliser une boucle for, mais seulement pour le 1eme foreach car c'est un tableau d'indices


echo '<h2>Classe et Objet</h2>';
// un objet est un autre type de données. 
//Un peu à la manière d'un ARRAY, de regrouper des informations.
// Cependant cela va beaucoup plus loin, car on peut y declarer des variables (appelées: propriétés) mais aussi des fonctions (appelées: méthodes)

class Etudiant  // la class est la boite dans laquelle on a toutes les pieces necessaires pour créer ma voiture par ex
{
    public $prenom="Grégory";       // public permet de préciser que l'element sera visible de partour (il y a aussi protected et private)
    public $age=25;                 // déclaration d'une propriété public
    public function pays()          // déclaration d'une fonction public
    {
        return "France";
    }
}

$objet = new Etudiant();       //l'objet est une voiture que l'on a créé a partir de ma boite d'objets "class".
//new est un mot-clé permettant d'instancier la classe et d'en faire un objet. C'est ce qui nous permet de le déployer afin que l'on puisse s'en servir. On se sert de ce qui est dans la classe, via l'objet.

// en tapant la ligne suivante:
echo '<pre>'; var_dump($objet); echo '</pre>';

// j'obtiens l'affichage d'un objet:

/*
object(Etudiant)#1 (2) {
    ["prenom"]=>
    string(8) "Grégory"
    ["age"]=>
    int(25)
  }
*/

//Pour piocher dans un Array, on utilise les [].
//Pour piocher dans un Objet, on utilise la ->affichageDESpays
// la déclaration d'un array peut se faire soit avec des () soit avec des [], mais pour piocher dedans ça ne se fait qu'avec des []. 
echo $objet->prenom .'<br>';    //prenom et non $prenom   car ca devient une propriété. Ce n'est plus une variable!
echo $objet->age .'<br>';
echo $objet->pays() .'<br>';
