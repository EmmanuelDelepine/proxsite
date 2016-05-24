<?php
 $thisPage="contact";
/*
	********************************************************************************************
	CONFIGURATION
	********************************************************************************************
*/
// destinataire est votre adresse mail. Pour envoyer à plusieurs à la fois, séparez-les par une virgule
$destinataire = 'webmestre@proxsite.fr';

// copie ? (envoie une copie au visiteur)
$copie = $_POST['copie'];

// Action du formulaire (si votre page a des paramètres dans l'URL)
// si cette page est index.php?page=contact alors mettez index.php?page=contact
// sinon, laissez vide
$form_action = '';

// Messages de confirmation du mail
$message_envoye = "<b>Votre message nous est bien parvenu, vous recevrez une réponse sous 48 heures.</b>";
$message_non_envoye = "<b>L'envoi du mail a échoué, merci de réessayer.</b>";

// Message d'erreur du formulaire
$message_formulaire_invalide = "Vérifiez que tous les champs soient bien remplis et que l'email soit sans erreur.";

/*
 * NoSpamQuestion affiche une question pour la validation d'un formulaire ...
 * $mode, mode question ou réponse par défaut tirage au sort de question {string}
 * $answer, lors de la demande d'une réponse à la question numero tant ... {int}
 *
 * @returns array
 *
 * Ajouter une question :
 * copier/coller ces lignes et remplir le contenu entre guillemets doubles :
 *
 * $array_pictures[$j]['num'] = $j; // ne pas changer cette ligne
 * $array_pictures[$j]['question'] = "mettre ici la question (correspondant à l'image si vous utilisez une image)";
 * $array_pictures[$j]['answer'] = "mettre ici la réponse à l'énigme";
 * $j++; // ne pas oublier cette ligne dans la copie :-)
 *
 *
 */
function NoSpamQuestion($mode = 'ask', $answer = 0)
{
	$array_pictures = array(); $j = 0;

	$array_pictures[$j]['num'] = $j;
	$array_pictures[$j]['question'] = "Quelle est la cinquième lettre du mot Proxsite? ";
	$array_pictures[$j]['answer'] = "s";
	$j++;

	$array_pictures[$j]['num'] = $j;
	$array_pictures[$j]['question'] = "Le soleil est-il chaud ou froid? ";
	$array_pictures[$j]['answer'] = "chaud";
	$j++;

	$array_pictures[$j]['num'] = $j;
	$array_pictures[$j]['question'] = "Taper 11 en lettres ";
	$array_pictures[$j]['answer'] = "onze";
	$j++;

	if ($mode != 'ans')
	{
		// on est en mode 'tirer au sort', on tire une image aléatoire
		$lambda = rand(0, count($array_pictures)-1);
		return $array_pictures[$lambda];
	}
	else
	{
		// on demande une vraie réponse
		foreach($array_pictures as $i => $array)
		{
			if ($i == $answer)
			{
				return $array;
				break;
			};
		};
	}; // Fin if ($mode != 'ans')
};
/*
	********************************************************************************************
	FIN DE LA CONFIGURATION
	********************************************************************************************
*/
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proxsite: webmaster de proximité en Loire-Atlantique et Vendée</title>
    <link rel="canonical" href="http://www.mobile.proxsite.fr/"/>
    <meta name="description" content="Proxsite webmestre Clisson: Commerçant, restaurateur, artisan, vous cherchez un webmaster en sud Loire? Proxsite vous propose un service web de qualité" />
    <meta name="author" content="Emmanuel Delépine Proxsite">
    <!-- Favicon-->
    <link rel="shortcut icon" href="icon/favicon.png" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template  -->
    <link href="css/templatemo_style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
    <div class="col-xs-12 visible-sm visible-xs" id="templatemo_mobile_menu_wap">
        <p id="mobile_menu_btn"> <a href="#"><span class="glyphicon glyphicon-align-justify"></span></a> </p>
        <div id="mobile_menu">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="#templatemo_banner_top">Bienvenue</a></li>
                <li><a href="#templatemo_upcomming_event">Nos services</a></li>
                <li><a href="#templatemo_blog">Infos utiles</a></li>
                <li><a href="https://www.facebook.com/proxsite" class="external-link">Réseaux sociaux</a></li>
                <li><a href="#templatemo_pricing">Tarifs</a></li>
                <li><a href="#templatemo_contact">Contact</a></li>
            </ul>
        </div>
    </div>
  	<div id="templatemo_banner_top" class="container_wapper">
        <div class="container">
            <div class="row">
            	<div class="col-md-8">
                <img src="bandeau-proxsite-handshake-800.jpg" alt="Proxsite Loire Atlantique Vendée" /><br>
                </div>
                <div class="col-md-8">
                    <p class="col-md-8"><a href="#">PROXSITE</a> | <a href="#templatemo_contact_map_wapper">CONTACT</a></p>
                </div>
            </div>
        </div>
    </div>
    <div id="templatemo_banner_logo" class="container_wapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-4">
                    <h1><a href="#">PROXSITE</a></h1><br><br><br>
                    <span>Proxsite, webmaster de proximité, Loire-Atlantique, Clisson</span>
                </div>
            </div>
        </div>
    </div>
    <div class="banner" id="templatemo_banner_slide">
        <ul>
        	<li class="templatemo_banner_slide_01">
                <div class="slide_caption">
                    <h1>Votre site web sur mesure</h1>
                    <p>Basé à Gorges (44), Proxsite répond à vos attentes en matières de design web, référencement et peut vous conseiller en matière d'hébergement.
Webmaster de proximité au service des artisans, commerçants, restaurateurs, viticulteurs mais aussi des particuliers du vignoble nantais (vallée de Clisson); Proxsite gère la conception de votre site internet de l'idée à la mise en ligne. A votre service et proche de vous, sur rendez-vous, nous fixons ensemble les objectifs en termes d'image comme de référencement et les moyens d'y parvenir.</p>
                </div>
            </li>
            <li class="templatemo_banner_slide_01">
                <div class="slide_caption">
                    <h2>Un site web de qualité</h2>
                    <p>Proxsite c'est l'assurance d'un service sur mesure et d'une conception de qualité avec les standards web les plus récents vous permettant d'accéder à un classement en première page des moteurs de recherche et d'un design respectueux de votre charte graphique. </p>
                </div>
            </li>
            <li class="templatemo_banner_slide_03">
                <div class="slide_caption">
                    <img src="images/banner_slide_03.jpg" alt="Nicolas et Violaine, Tro Breizh" title="Restaurateurs" />
                </div>
            </li>
            <li class="templatemo_banner_slide_04">
                <div class="slide_caption">
                	<img src="images/banner_slide_04.jpg" alt="logo" />
                </div>
            </li>
            <li class="templatemo_banner_slide_05">
                <div class="slide_caption">
                	<img src="images/banner_slide_01.jpg" alt="e commerce">
                </div>
            </li>
            <li class="templatemo_banner_slide_06">
                <div class="slide_caption">
                	<img src="images/banner_slide_02.jpg" alt="site vitrine" />
                </div>
            </li>
        </ul>
    </div>    
	<div id="templatemo_main_menu" class="container_wapper hidden-sm hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="nav nav-justified">
                        <li><a href="#templatemo_banner_top">BIENVENUE</a></li>
                		<li><a href="#templatemo_upcomming_event" title="Refonte de site">SERVICES</a></li>
                		<li><a href="#templatemo_blog" title="Identité visuelle">INFOS</a></li>
                		<li><a href="https://www.facebook.com/proxsite" class="external-link" title="Proxsite sur Facebook">RESEAUX</a></li>
                		<li><a href="#templatemo_pricing">TARIFS</a></li>
                		<li><a href="#templatemo_contact">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="templatemo_upcomming_event" class="container_wapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 section_header">
                    <h2>SERVICES PROPOSES</h2>
                </div>
                <div class="col-md-6 col-md-offset-3 col-md-offset-3">
                    <p>Que vous possédiez déjà un site web ou que ce soit une création, Proxsite propose des solutions actuelles.</p>
                    <p></p>
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-6 col-md-3">
                    <div class="event_box event_animate_left">
                        <img src="images/event_02.jpg" alt="Création de site web" class="img-responsive" />
                        <ul>
                            <li><h3>CREATION</h3></li>

<li><p>La vitrine de votre entreprise, votre site se doit d'être design, aux standards du web actuel et générer un référencement naturel. Le site vitrine ou "Bootstrap" vous permet d'exister sur le web. Les moteurs de recherche sont aujourd'hui le principal moyen de trouver un professionnel à proximité de chez soi. Mais c'est aussi une façon de partager aussi bien des connaissances qu'un événement important.<br>
Pour les professionels, le site vitrine c'est "la vitrine web" de votre entreprise qui donne une image positive et actuelle de votre société à vos clients.</p>
							</li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="event_box event_animate_left">
                        <img src="images/event_01.jpg" alt="Refonte de site web" class="img-responsive" />
                        <ul>
                            <li><h3>REFONTE de votre site web</h3></li>
<li><p>La mise en place de votre site internet date d'il y a quelques années? Il a mal vieillit? Son design ne vous correspond plus? Votre entreprise et votre activité ont changé? Votre site web ne correspond plus à l'image que vous souhaitez donner?<br>Le référencement naturel du site n'est pas optimisé?<br> Les résultats dans les moteurs de recherche ne sont pas au rendez-vous?<br> Les mots clef sont mal choisis?<br>
Dans tous ces cas de figure, Proxsite intervient directement sur le code mais aussi sur les textes de façon à améliorer vos résultats aussi bien sur les moteurs de recherches que sur la navigation des visiteurs.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="event_box event_animate_left">
                        <img src="images/event_03.jpg" alt="Référencement" class="img-responsive" />
                        <ul>
                            <li><h3>REFERENCEMENT</h3></li>

<li><p>Lors de la création de votre site web, deux objectifs principaux sont à atteindre:<br>
1.Un bon référencement dans les moteurs de recherche<br>
2.Un bon usage du site internet par les visiteurs<br>
Je rédige les articles de votre site en tenant compte de vos attentes, de la facilité de lecture des textes ainsi que des mots clef définis avec vous. La présence simple des mots clefs dans le corps de texte ne suffisant pas aux moteurs de recherche, je détermine leur intégration au sein des titres de façon cohérente et naturellement accrocheuse pour les visiteurs d'un site internet. 
 </p>
</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="event_box event_animate_right">
                        <img src="images/event_04.jpg" alt="Proxsite" class="img-responsive" />
                        <ul>
                        	<li><h3>LA REPONSE PROXSITE</h3></li>
                            <li>
                                <p>Proxsite peut apporter une réponse à tous ces cas de figure. Par un contrôle des standards du code Html/CSS mis en place, par un remaniement des articles et un choix ciblé des mots clef ainsi qu'un optimisation de l'ergonomie améliorant la relation client; je réalise une refonte compléte de votre site web. Il apparaît rapidement que réaliser un bon référencement dépend principalement de la qualité des articles du site. Mais de bons textes peuvent être mis à mal par un codage inapproprié ou ne respectant pas les standards W3C actuels. Les articles sont rédigés aussi bien pour les lecteurs que pour les moteurs de recherche, joignant ainsi l'utile à l'agréable. Les titres des articles sont choisis avec soin, de maniére à intégrer un maximum de mots clef tout en restant cohérent et simple.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div id="templatemo_pricing" class="container_wapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 section_header">
                    <h1>TARIFS</h1>
                    
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 pricing_icon_wapper">
                    <div class="clearfix"></div>
                    <h3>LE COUT D'UN SITE</h3>
                    <p>Les tarifs pour la conception d'un site dépendent de nombreux facteurs comme les services (photographies, rédaction des articles assistée ou non...). Mais on peut dégager une idée du coût de conception "à la page". Proxsite conçoit tous ses sites de façon à ce que vous soyez propriétaires du nom de domaine et de l'hébergement.</p>
                </div>
                <div class="col-md-4 pricing_icon_wapper">
                    <div class="clearfix"></div>
                    <h3>TARIFS CREATION</h3>
                    <p>SITE VITRINE:<br>
                   		Index et design global du site: 390€00 TTC<br>
 						Page supplémentaire (minimum 2): 75€00 TTC
 
</p>
					<P>SITE "BOOTSTRAP" 6 rubriques maximum (optimisé technologies mobiles): 495€00 TTC
					<p>Maintenance &amp; petites mises à jours 288€00/an TTC 
 soit 24€00/mois</p>
 

                </div>
                <div class="col-md-4 pricing_icon_wapper">
                    <div class="clearfix"></div>
                    <h3>SEO</h3>
                    <p>L'optimisation du référencement (Search Engine Optimisation):<br> 
Optimisation du code, insertion des meta données et de micro-data sur 5 pages maximum, inscription du site sur Google, création du sitemap et enregistrement Google: 450€00 TTC<br>
 Création d'une page facebook et insertion d'un encart sur votre site web
150€00 TTC<br>
 Pack SEO Facebook pour un site créé par ProxSite: 150€00 TTC (inclus l'optimisation SEO, le sitemap, l'enregistrement google et la création de page Facebook) 
</p>
				</div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div id="templatemo_blog" class="container_wapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 section_header">
                    <h1>INFOS UTILES</h1>
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-4 event_animate_left">
                    <img src="./images/a2df600.jpg" title="A2DF informatique, le Pallet" alt="identité site web" class="img-responsive" />
                </div>
                <div class="col-sm-8 blog_text event_animate_right">
                    <h1>IDENTITE VISUELLE</h1>
                    <p>
                        <span class="glyphicon glyphicon-user"></span> posté par <a href="#">Emmanuel</a>  &nbsp;&nbsp;
                        <span class="glyphicon glyphicon-calendar"></span> 2 mai 2015 &nbsp;&nbsp;
                        <span class="glyphicon glyphicon-bookmark"></span> <a href="#">Site Web</a>, <a href="#">Identité</a>
                    </p>
                    <p>La charte graphique d'un site va définir son identité visuelle. L'identité visuelle d'une entreprise est le premier vecteur de son image et de ses valeurs, elle est l'expression de l'activité même de l'entreprise, qu'elle soit destinée à vendre un produit, un service, diffuser un message ou des valeurs. 
 C'est donc le choix de couleurs accordées et d'une police de caractères moderne qui donnera un aspect harmonieux et cohérent à votre site internet. L'idée est d'utiliser, quand celà est possible, l'identité visuelle déjà existante de l'entreprise pour ainsi affirmer votre image et transmettre votre message. </p>
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-4 event_animate_left">
                    <img src="./images/facebook.jpg" alt="Gestion des réseaux sociaux" class="img-responsive" />
                </div>
                <div class="col-sm-8 blog_text event_animate_right">
                    <h1>RESEAUX SOCIAUX</h1>
                    <p>
                        <span class="glyphicon glyphicon-user"></span> posté par <a href="#">Emmanuel</a> &nbsp;&nbsp;
                        <span class="glyphicon glyphicon-calendar"></span> 22 avril 2015 &nbsp;&nbsp;
                        <span class="glyphicon glyphicon-bookmark"></span> <a href="#">Réseaux</a>, <a href="#">Facebook</a>
                    </p>
                    <p>En France Facebook est le premier réseau social avec 26 millions de membres actifs. <br>
Pourquoi Facebook?<br>
Facebook est leader des réseaux sociaux et de loin, Twitter et Google+ avec chacun 5,5 millions de membres sont toujours en recherche de popularité. Toujours en plein développement, gratuit et accessible Facebook est une priorité pour toutes les entreprises présentes sur le web.
<br>
Comment?
<br>
Je propose la création d'une vraie page Facebook liée à votre site. Cette page vous permettra de dialoguer facilement aussi bien avec vos clients qu'avec des clients potentiels. A votre demande une page dédiée à facebook, ou un encart revenant sur toutes les pages du site web, peuvent être mis en place et rapidement opérationnels. C'est vous qui animerez la page facebook, faisant ainsi vivre la page comme le site web tout en recrutant des "fans". facebook est à considérer comme une publicité gratuite pour votre entreprise et votre site, ergonomiques et vivantes, les pages facebook apportent du dynamisme et une image résolument actuelle et tournée vers le relationnel. D'autre part chaque publication est un lien vers votre site, contribuant à son bon référencement dans les moteurs de recherche. </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div id="templatemo_contact" class="container_wapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 section_header">
                    <h1>Contact</h1>
                </div>
                <div class="col-md-6 col-md-offset-3 col-md-offset-3">
                    <p>N'hésitez pas à contacter Proxsite pour de plus amples renseignements. Emmanuel se fera un plaisir de répondre à toutes vos questions.<br> Télèphone: 09 52697050</p>
                </div>
                <div id="templatemo_contact_map_wapper">
                    <div id="templatemo_contact_map"></div>
                </div>
            <div class="row">
                <div class="col-xs-12 section_header">
                	<h2>Formulaire de contact</h2>
                    </div>
<?php 
	// on tire au sort une question
	$nospam = NoSpamQuestion();
/*
 * cette fonction sert à nettoyer et enregistrer un texte
 */
function Rec($text)
{
	$text = htmlspecialchars(trim($text), ENT_QUOTES);
	if (1 === get_magic_quotes_gpc())
	{
		$text = stripslashes($text);
	}

	$text = nl2br($text);
	return $text;
};
/*
 * Cette fonction sert à vérifier la syntaxe d'un email
 */
function IsEmail($email)
{
	$value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
	return (($value === 0) || ($value === false)) ? false : true;
}

// formulaire envoyé, on récupère tous les champs.
$nom        = (isset($_POST['nom']))        ? Rec($_POST['nom'])        : '';
$email      = (isset($_POST['email']))      ? Rec($_POST['email'])      : '';
$objet      = (isset($_POST['objet']))      ? Rec($_POST['objet'])      : '';
$message    = (isset($_POST['message']))    ? Rec($_POST['message'])    : '';
$antispam_h = (isset($_POST['antispam_h'])) ? Rec($_POST['antispam_h']) : '';
$antispam_r = (isset($_POST['antispam_r'])) ? Rec($_POST['antispam_r']) : '';

// On va vérifier les variables et l'email ...
$email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erroné, soit il vaut l'email entré
$err_formulaire = false; // sert pour remplir le formulaire en cas d'erreur si besoin

if (isset($_POST['envoi']))
{
	// On demande la vraie réponse
	$verif_nospam = NoSpamQuestion('ans', $antispam_r);

	if (strtolower($antispam_h) != strtolower($verif_nospam['answer']))
	{
		// le formulaire s'arrête ici
		echo '<p>Réponse incorrecte à la question Antispam.</p>';
	}
	else
	{
		if (($nom != '') && ($email != '') && ($objet != '') && ($message != ''))
		{
			// les 5 variables sont remplies, on génère puis envoie le mail
			$headers  = 'From:'.$nom.' <'.$email.'>' . "\r\n";
			//$headers .= 'Reply-To: '.$email. "\r\n" ;
			//$headers .= 'X-Mailer:PHP/'.phpversion();

			// envoyer une copie au visiteur ?
			if ($copie == 'oui')
			{
				$cible = $destinataire.','.$email;
			}
			else
			{
				$cible = $destinataire;
			};

			// Remplacement de certains caractères spéciaux
			$message = str_replace("&#039;","'",$message);
			$message = str_replace("&#8217;","'",$message);
			$message = str_replace("&quot;",'"',$message);
			$message = str_replace('<br>','',$message);
			$message = str_replace('<br />','',$message);
			$message = str_replace("&lt;","<",$message);
			$message = str_replace("&gt;",">",$message);
			$message = str_replace("&amp;","&",$message);

			// Envoi du mail
			if (mail($cible, $objet, $message, $headers))
			{
				echo '<p>'.$message_envoye.'</p>';
			}
			else
			{
				echo '<p>'.$message_non_envoye.'</p>';
			};
		}
		else
		{
			// une des 4 variables (ou plus) est vide ...
			echo '<p>'.$message_formulaire_invalide.'</p>';
			$err_formulaire = true;
		};
	};
}; // fin du if (!isset($_POST['envoi']))
if (($err_formulaire) || (!isset($_POST['envoi'])))
{
	// afficher le formulaire
	echo '
	<form id="contact" method="post" action="'.$form_action.'">
	<fieldset class="col-md-4">
		<input type="text" placeholder="Prénom/Nom" id="nom" name="nom" value="'.stripslashes($nom).'" tabindex="1" />
	</fieldset>	
	<fieldset class="col-md-4">
			<input type="text" placeholder="Email" id="email" name="email" value="'.stripslashes($email).'" tabindex="2" /></p>
	</fieldset>

	<fieldset class="col-xs-12"><legend>Votre message</legend>
		<p><input type="text" style="width:220px" placeholder="Demande de devis ou d&apos;informations" id="objet" name="objet" value="'.stripslashes($objet).'" tabindex="3" /></p>
		<p><textarea id="message" name="message" tabindex="4" cols="36" rows="6">'.stripslashes($message).'</textarea></p>
	</fieldset>
	<fieldset class="col-md-4"><legend>Souhaitez vous recevoir une copie de cet e-mail?</legend>
		<p><label><input type="radio" id="copie" name="copie" value="oui" />Oui</label> <label><input type="radio" id="copie" name="copie" value="non" />Non</label></p>
	</fieldset>
	<fieldset class="col-md-4"><legend>Merci de répondre à la question anti-spam</legend>
		<p><label for="antispam_h">'.$nospam['question'].'</label><input type="text" name="antispam_h" id="antispam_h" /><input type="hidden" name="antispam_r" value="'.$nospam['num'].'" /></p>
	</fieldset>
	<div class="col-md-4 col-xs-8">
                        <button name="envoi" value="Envoyer le formulaire">Envoyer le message</button>
                    </div>
	</form>';
};
?>
				</div>
            </div>
        </div>
    </div>
    <div id="templatemo_footer" class="container_wapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p>Copyright © 2015 <font style="Segoe UI"><a href="http://www.proxsite.fr/">PROXSITE</a></font> SIRET: 
 791 763 584 00012 Entreprise non assujettie à la TVA</p>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.mobile.customized.min.js"></script>
    <script src="js/unslider.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script src="js/templatemo_script.js"></script>
  </body>
</html>