<ul>
	<li><a href="?option=france"> France </a></li>
	<li><a href="?option=italie"> Italie </a></li>
	<li><a href="?option=espagne"> Espagne </a></li>
	<li><a href="?option=angleterre"> Angleterre </a></li>
</ul>
<hr />
<?php
	// --- recuperation des donn�es	
if(isset($_GET['option']))
{
	switch($_GET['option'])
	{

		case 'france':	print '<p>Vous �tes Fran�ais ?</p>';	break;
		case 'italie':	print '<p>Vous �tes Italien ?</p>';		break;
		case 'espagne':	print '<p>Vous �tes Espagnol ?</p>';	break;
		case 'angleterre':	print '<p>Vous �tes Anglais ?</p>';	break;
	}
}
?>