
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta property= "og:title" content= "UNE SOCIÉTÉ QUI FABRIQUE DES COMPLÉMENTES ALIMENTAIRES DES PRODUITS 100%BIO VENANT DE LA MALAISIE"/>
  <meta property= "og:url "  content= "https://www.axonile.com/boutiques/b012.php" />
  <meta property= "og:image" content= "https://axonile.com/boutiques/012_BM/logo.jpg" />
  <meta property= "og:description" content="Régle des problémes de santé: Bio Medical."  />
  <meta name="keywords" content="hépatite, avc, diabet,dokoumsiti,asthme,varicocéle... ">
  <title>BioMédicale</title>


    <!-- Meta Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '564444948765534');
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=564444948765534&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Meta Pixel Code -->

</head>




<style>

/*/ ========== CHARTE GRAPHique ============
Foncé ordinaire     clair

ORANGE   #B70  #F85   #FC6

VERT     #093  #9f0   #AFA
  
CYAN     #099  #5FF  #AFF  

BLEU

MARRON
         #632  #A54  #D85
============================================
/*/


:root{--fond:rgb(122, 202, 126); --bande:rgb(25, 83, 21); --intro:rgb(241, 241, 236); --bgtab:rgb(140, 233, 129);}
/*/   --fond:#5cf; --bande:#08a; --intro:#df0; --bgtab:#af5;}/*/


/*/
:root{--fond:#eee; --bande:#08a; --intro:#df0; --bgtab:#aaa;}
/*/

html {  scroll-behavior: smooth; }

body
{
font-size:30px; font-family:"Arial" 
width:700px; background: var(--fond); font-family:calibri; touch-action: manipulation;
}

/* Bande sombre top */
#tou{background:var(--bande); height:160px;width:100vw; display:flex; padding:10px;} 


#ilogo{;z-index:1;} 

/* 1er Texte : fluo*/
#intro{color:var(--intro); margin-left: 20px; font-size: 60px; 
       text-shadow: -7px 7px 3px #000; position:relative; 
       left:40px; top:-20px;} 

.aperap{  margin-left: auto; margin-right: auto; display:block;}

#idate{font-size: 12px;}

a{text-decoration:none;color:#000;}
a:visited{color:#000;}


#imgd{width:68vw;}
#texd{width:35vw; font-size: 36px;}

/*Grand tableau des produits*/

#tb {border:6px solid;width:100vw; background:var(--bgtab); }
.imgs {border:4px solid #D85; }

#tb td{}

input[type="checkbox"]{accent-color:#0cf;}

.ch  {height: 60px; font-size: 50px;
      width: 50px;
      }

.updn
{font-size: 50px;       opacity: .6;border:3px solid;
background: var(--fond);
  /* NO SELECTION*/   
  -webkit-user-select: none; /* Safari */
  -ms-user-select: none; /* IE 10 and IE 11 */
  user-select: none; /* Standard syntax */
}

.updn:hover{cursor: pointer;}
   #X:hover{cursor: pointer;}




input{background:#fff;height:40px;border:3px solid;}
input[type="checkbox"],input[type="radio"]{height:90px; width:90px;}
.chs{height:70px;width:710px;font-size:50px; padding:10px;}


/*Aperçu de la commande dans inputs verrouillés*/
#T_id1, #T_idA, #T_id2,  #T_idB
{
background: var(--fond); border:40px;font-size:30px; width:300px;
}

/*Ajouter (devant chkBox) et ti= titre*/
.CLASSaj{position:relative; top:-30px; 
         margin-left:20px;  font-size:50px;}

.CLASSti{ -webkit-text-stroke-width:1.5px; color:#fc0;
          -webkit-text-stroke-color:#000; margin-top:4px;
          font-weight:bold;  font-size:50px; text-shadow: #000 -2px 2px 2px;
        }

.imgs:hover{cursor: pointer;}


#sum{background:#007;border:0px;font-size:50px;color:#ff9;}


#jang  /* JE VEUX UNE BOUTIQUE COMME CA*/
{background-image: linear-gradient(#55F,#116); padding:10px;
 border-radius:8px; color:#fff; font-size:40px; font-weight:bold; 
 -webkit-text-stroke-width:2px; text-shadow: -5px 5px 2px #005;
 -webkit-text-stroke-color:#000;text-align: center;
opacity:.7;} #jang:hover{opacity:1;}

#ibtcom{color:#a00;}





</style>







<body id="bodi">


<div id="tou">

</div>


<br><br>

<table border="0" cellpadding="10">
  <td id="imgd" style="width:50vw"></td>
  <td id="texd"> </td> <br> 
</table>



<span id="idate"></span>


<h2 id="choix">CHOISISSEZ VOS PRODUITS </h2>
<h3 id="ship"></h3>

<div id="iDTL" style="background:#ccc; position: sticky; top:20vh; width:80vw; margin:auto; z-index: 2">
  
</div> <!-- VOLET DETAILS-->

  <form method="POST" action="" accept-charset="utf-8">




    <div style="background:#007;color:#FF9;font-size:50px;
    position: sticky; top:4vh;
">
  &nbsp;&nbsp;
  TOTAL&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="total" id="sum" style="width:300px;" readonly>
</div><br>


<!-- ===== TABLEAU PRINCIPAL P: PRODUITS-->
<table border="0" id="tb" cellpadding="20" onclick="prix()">

    
    <td><span id="span_id1"></span>  <td><span id="span_idA"></span><tr>

    <!-- Separation -->
    <td colspan="2"><tr>
    <td colspan="2"><tr>

    <td><span id="span_id2"></span>  <td><span id="span_idB"></span><tr>

<!--
    <td><span id="span_id3"></span>  <td><span id="span_idC"></span><tr>
    
    <td><span id="span_id4"></span>  <td><span id="span_idD"></span><tr>

    <td><span id="span_id5"></span>  <td><span id="span_idE"></span><tr>
-->

</table> <br><br>



<!-- ===== FONCTIONS recap()=====-->
<div> VOTRE COMMANDE :<br>

  <span id="comSP_id1"></span> <input name="name_id1" id="T_id1" readonly>  

  <span id="comSP_idA"></span> <input name="name_idA" id="T_idA" readonly> 
  <br>


  <span id="comSP_id2"></span> <input name="name_id2" id="T_id2" readonly>  

  <span id="comSP_idB"></span> <input name="name_idB" id="T_idB" readonly> 
  <br>


</div>

<br><br>



  <!--Vous aurez le contact WhatsApp dans le mail-->

  <table>
    <td>
        <span id="lgmail"> </span>
        <input type="email" name="nmail" placeholder="Adresse e-mail" id="imail" class="chs">
    <td rowspan="2"><br>
        <div style="border:10px solid #000; padding:20px;
                    font-size: 50px; background:#ff0;height: 150px;"
         onclick="valiMAIL()"><br>VALIDER</div>
         
    <tr>
    <td><input name="loca" class="chs" placeholder="Localisation ou adresse" id="iloca">
  
    <tr>
    <td>
        <input type="number" name="numcli" id="iwhp" placeholder="WhatSapp" class="chs">
  </table>


<br><br>

<div style="background:#999;color:#eee;font-size:50px;">
  MODES DE PAIEMENT </div>







<fieldset>

<table border="0" cellpadding="5">

    <td>
    <input type="radio" name="rname" id="idwav" value="WAVE">

    <a href="https://play.google.com/store/apps/details?id=com.wave.personal" title="Payez par Wave" target="blank">
    <img src="nats/logo_wave.png" height="80"> 
    <td>WAVE</a><tr>


    <td>
    <input type="radio" name="rname" id="idorg" value="ORANGE" checked>

    <a href="https://play.google.com/store/apps/details?id=com.orange.mobile.orangemoney" title="Payez par Orange Money" target="blank">
    <img src="nats/logo_orangeM.jpg" height="80"> 
    <td>ORANGE MONEY</a><tr>


    <td>

    <!-- PAYER A LA LIVRAISON variable si produit physique-->
    <span id="radioL"></span>

    <span id="icoL"></span>

    <td id="textL"></td> <tr>

</table>

<!--id du bouton de commande -->
<h2 id="ibtcom"><hr>CHOISISSEZ DES PRODUITS AVANT DE COMMANDER.</h2>



</fieldset>

</form>   

<!--
<a href="https://api.whatsapp.com/send?phone=221764637664&text=Besoin+site+boutique+e-commerce" target="blank">
  <p id="jang"> JE VEUX UNE BOUTIQUE COMME CA  </p> 
</a>
-->


<hr style="border: 1px solid;">



<script>

//================= JUSTE BIBLIOTHEQUE DE BASE ========
let br ="<br>"; let BR ="<br><br><br><br>"; 
let hr ="<hr>";
let sp = "&nbsp;"; let SP= sp+sp+sp+sp;

// ! Pas d'espace dans ces strings !
ns="font-size:2vw;font-family:courier;background:#000;color:#0f0;padding:5px;";
NS="font-size:4vw;font-family:courier;background:#000;color:#0f0;padding:7px;";

function n(ix){ return "<b style="+ns+">"+ ix +"</b>";}
function N(ix){ return "<b style="+NS+">"+ ix +"</b>";}

function b(ix){ return "<b style='color:blue'>"+ ix +"</b>";}
function g(ix){ return "<b style='color:green'>"+ ix +"</b>";}
function r(ix){ return "<b style='color:red'>"+ ix +"</b>";}
function gr(ix){ return "<b style='color:grey'>"+ ix +"</b>";}
function w(ix){ return "<b style='color:#fff'>"+ ix +"</b>";}

function c(ix,wir){ return "<b style='color:"+wir+";transition:2s'>"+ ix +"</b>";}


//Style coloré ombré
function tag(ix,iD){return "<b id='"+ iD +"'>"+ ix +br+"</b>";}

function cir(ix)
{
  return "<b style='font-size:30px;border:5px solid #777 ; border-radius:80%; padding:3px;color:#ddd'>"+
 ix +"</b>";
}

// Console log d'un array
function a(array,arrName)
{
  Display=""; for(i in array)
    {
      Display+= ""+arrName+"["+ b(i) +"] =" +sp+ array[i] +br;
    }
      return Display ;
}


//=========================================================



// =============== VARIABLES IDENTITAIRES ==============


TITRE = "BIO"+sp+"-"+sp+" MEDICALE" ;

num = "012";
tur = "_BM";


    // ====== En cas de produit physique
ship.innerHTML =`LIVRAISON GRATUITE A DAKAR  &nbsp; &nbsp;&nbsp;
  <i style="opacity: .5"></i>` ;

        // ==== RADIO : Payer à la livraison
        radioL.innerHTML =` <input type="radio" name="rname" id="idliv" value="LIVR">`;
        icoL.innerHTML =`<img src="nats/logo_auto.png" height="80"> `;
        textL.innerHTML="PAYER A LA LIVRAISON ";


    // ====== En cas de produit numérique
    // Juste mettre les éléments en commentaire.
    // =============



tou.innerHTML=''+
  '<img src=" '+num+tur+ '/logo.jpg" height="160" id="ilogo">' +
  '<m id="intro"><br> '+ TITRE +'</m>' ;

imgd.innerHTML=''+
'<table >'+
  '<td><img class="aperap" src="'+ 
  num+tur+ '/NAT.jpg" height="400"></td>'+
  '<tr> '+                                 
'</table>';

texd.innerHTML =`

La MÉDECINE Malaisienne est l'une des meilleurs qui vous donne la meilleure santé !!!  Choisissez parmi notre large sélection de produits de santé naturels biologiques. <br> 

 <br> Pour Les zones Rufisque / Lac rose, la livraison est de 2000 fcfa. Vous pouvez payer à la livraison.

`;

// =====================================








TDY= Date().split(" ");
PDAT= Date().split(TDY[3]); //Obtenir l'année et l'utiliser comme split
// ex: PDAT[0] = [ Sat , Oct , 25 ]
today= PDAT[0].split(" ");

tey = today[0] ;   wer = today[1] ;   fan = today[2] ;


function fstr(n_d) // Récup les 2 prem lettres des jours et mois
{
DAY= today[n_d].split(""); return DAY.splice(0,2).join("").toLowerCase();
}
// Exemple : fstr(0) = sa   et   fstr(1) = oc

den=[0,"su", "mo", "tu", "we", "th", "fr", "sa"] ;
dfr=[0,"Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi"];

men=[0,"ja","fe","ma","ap","ma","ju","ju","au","se","oc","no","de"];
mfr=[0,"Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"];

jour = dfr[den.indexOf(fstr(0))] +sp;   jn= fstr(2) +sp; 
mois = mfr[men.indexOf(fstr(1))] +sp;   ann = TDY[3] +sp;

upd = parseInt(13); 

idate.innerHTML= jour + jn + mois + ann + br+ 

"<i style='color:#aaa'>Mis à jour le "+upd+ " Novembre 2022</i>" + br+
"Il faut faire vite !  Les prix augmentent quand il reste peu d'articles en stock.";




/*    Logique des nomenclatures des iD du tableau
_________________
|       |       |
|   1   |   A   |
|_______|_______|
|       |       |
|   2   |   B   |
|_______|_______|
|       |       |
|   3   |   C   |
|_______|_______|



*/           lv= 0;

pay1_0= lv+ 4000 ;   payA_0= lv+ 5000 ; 

pay2_0= lv+ 6500 ;   payB_0= lv+ 6000 ;  

//pay3=0;  payC=0;

//pay4=0;   pay5=0;   payD=0;   payE=0;








// Affichage des produits dans le grand tableau
function produit(IDbox, NAMEbox, tito, plus, nat, njek, hnat)
//IDbox = id de la checkBox, tito = titre du produit,   
// plus = plus de détail sur le produit , nat = nataal
{
// Régler hnat = hauteur image par défaut
hnat = 430;
//hnat = 430;
prdolla= njek/656;
dolla = prdolla.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ' ');
dollar = parseFloat(dolla).toFixed();
// Cet argument doit être placé à la fin et il peut être ignoré lors de l'appel

dispo ="";

if (false) //(nat ==  "nat (3).jpg")  
{
  fl='<b style="color:#a0;font-size:70px;">'+r("x")+'</b>'+ sp;
  dispo = '<span class="CLASSaj">'+fl+r("INDISPO")+'</span>'+br;
  offon="disabled" ;
}

else
{
  fl='<b style="color:#0a0;font-size:70px;">←</b>'+ sp;
  dispo = '<span class="CLASSaj">'+fl+'AJOUTER</span>'+br;
  offon="" ;
}

document.getElementById("span_"+IDbox).innerHTML= 

    '<span id="tito_'+IDbox+'" class="CLASSti">'+tito+ sp+ '</span>'+ '<br>'+

    '<input type="checkbox" id='+IDbox+' name='+NAMEbox+' onclick="vert()" '+offon+'>'+
    
     dispo +

    'QUANTITE'+sp+sp+
    '<input id="'+IDbox+'ch" class="ch" value="1"  name="Q'+IDbox+'"> '+SP+SP+

      '<span id="'+IDbox+'dn" class="updn">▼</span> '+sp+sp+
      '<span id="'+IDbox+'up" class="updn">▲</span> '+br+br+

        '<img src="'+num+tur+'/'+nat+'" height='+hnat+' '+
            'width='+hnat/1.1+' class="imgs" id="'+IDbox+'nat">'+br+

       dollar + ' USD $'+SP+SP+

      '<span id="IDnjek">'+njek+' '+'fcfa</span>'+sp ;

      document.getElementById(IDbox+"nat").onclick=function(){DETAILS(plus)}

      function auto(){DETAILS(plus)}
// setTimeout(auto, 500)

    //Affichage de l'étiquette de prix
} // ======================== fin produit()



function DETAILS(specs)
{
  iDTL.innerHTML=
  '<div id="volet" >'+
// X croix de fermeture
    '<div style="background:#aaa; width:100%; text-align:right; color:#000";font-size:50px;>'+
    '<span id="X">X</span>'+sp+
    '</div>'+

    '<div style=" color:#070"; font-size:50px; >'+
      specs+
    '</div>'+

  '</div>';
  volet.style="border:6px #ff0 solid;"+
  " height:60vw; padding:20px";

  volet.onclick=function(){iDTL.innerHTML="" ;}
}

//SPEC TITRES = ST





ST1= "DYNA HERBAL TONIC" ;     /*/ STA= "MINI" ;/*/ STA= "D.I NONI" ;

ST2= "BENEPISYO DYNA TONIC " ;    STB= "DI SEA CUCUMBER" ;


st1= "DYNA HERBAL TONIC" ;      stA= "D.I NONI" ;

st2= "BENEPISYO DYNA TONIC" ;    stB= "DI SEA CUCUMBER" ;




specu="" ; // Spec unique


spec1=`
<h2> `+st1+` </h2>

 ` + specu ;


spec1=`
<h2> `+st1+` </h2>
La MÉDECINE Malaisienne est l'une des meilleurs qui vous donne la meilleure santé !!!  Choisissez parmi notre large sélection de produits de santé naturels biologiques. Vous pouvez passer votre commande en ligne et nous pouvons vous livrer partout. 
 `;


specA=`
<h2> `+stA+` </h2>
La MÉDECINE Malaisienne est l'une des meilleurs qui vous donne la meilleure santé !!!  Choisissez parmi notre large sélection de produits de santé naturels biologiques. Vous pouvez passer votre commande en ligne et nous pouvons vous livrer partout. 
`;

/*/
specA=`
<h2> `+stA+` </h2>
Il est 2 fois plus petit que les autres et plus léger. Facile à ranger et à emporter avec soi. Il peut vous suivre partout.
`;


specA=`
<h2> `+stA+` </h2>
Le plus léger. En plus des couleurs on a les lettres et les chiffres.
`;
/*/





spec2=`
<h2> `+st2+` </h2>
La MÉDECINE Malaisienne est l'une des meilleurs qui vous donne la meilleure santé !!!  Choisissez parmi notre large sélection de produits de santé naturels biologiques. Vous pouvez passer votre commande en ligne et nous pouvons vous livrer partout. 

` ;


specB=`
<h2> `+stB+` </h2>
La MÉDECINE Malaisienne est l'une des meilleurs qui vous donne la meilleure santé !!!  Choisissez parmi notre large sélection de produits de santé naturels biologiques. Vous pouvez passer votre commande en ligne et nous pouvons vous livrer partout. 
`;


function afficher()
{
  /*/
  function produit(IDbox, NAMEbox, tito, plus, nat, njek, hnat)
  /*/
  // Ligne 1
  produit("id1", "rsm1", ST1 ,  spec1, 
          "nat (0).jpg", pay1_0 );


  produit("idA", "pjA" , STA , specA ,
          "nat (1).jpg", payA_0 );

  // Ligne 2
  produit("id2", "rsm2", ST2 , spec2 ,
          "nat (2).jpg", pay2_0  );

  produit("idB", "pjB" , STB , specB ,
          "nat (3).jpg", payB_0 );

}


// ============== CHECK IF CLIENT PAID monthly  ================
maint = BR + SP+SP+SP+SP+SP+SP+SP+SP+SP+SP+SP+SP+SP+
         N("EN MAINTENANCE") +BR;

if(true){afficher()} else {tb.innerHTML = maint ;}
// ==============================




function QT(ich, iup, idn)
{
q= ich.value;


  function UP(){ if(q<4) q++; ich.value=q; prix()} // Maximum
  function DN(){ if(q>1 ) q--; ich.value=q; prix()}

// Avant de lancer UP et DN directement, on récupère 
// toujours la value en cours. Exemple frappe manuelle de la quantité.
// Pas besoin de délai millisecondes
  iup.onclick=function(){q= ich.value; setTimeout(UP) }
  idn.onclick=function(){q= ich.value; setTimeout(DN) }

}

QT(id1ch, id1up, id1dn );    QT(idAch, idAup, idAdn );
QT(id2ch, id2up, id2dn );    QT(idBch, idBup, idBdn );



// CALCUL DU PRIX A PAYER



// Vérification des checked et addition. Checked = 1, else = 0

function prix()
{

// Afficher le total des produits sélectionnés.

//q = coef quantité
q1= id1ch.value ;     qA= idAch.value ;
q2= id2ch.value ;     qB= idBch.value ;

if(document.getElementById("id1").checked== true && q1>=1 && q1<=20 )
  {pay1=pay1_0*q1;}else{pay1=0; }

if(document.getElementById("idA").checked== true && qA>=1 && qA<=20 )
  {payA=payA_0*qA;}else{payA=0; }


if(document.getElementById("id2").checked== true && q2>=1 && q2<=20 )
  {pay2=pay2_0*q2;}else{pay2=0; }

if(document.getElementById("idB").checked== true && qB>=1 && qB<=20 )
  {payB=payB_0*qB;}else{payB=0; }




//+ pay3 + pay4 + pay5;

// Ajouter coefficient du prix correspondant à chaque unité de cours.

TOTAL=  pay1+payA + pay2+payB ;

document.getElementById("sum").value=
TOTAL.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ' ')+" fcfa" ; 





    function recap(iD, pay_)
    {
    titre = document.getElementById("tito_"+iD).textContent;
    pay_ = pay_.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ' ');

    if(document.getElementById(iD).checked== true)
      {
        document.getElementById("comSP_"+iD).innerHTML = pay_+ sp  ; 
        document.getElementById("T_"+iD).value =  titre ; 
      }

    else
      {
        document.getElementById("comSP_"+iD).innerHTML = SP+SP+SP+SP ;
        document.getElementById("T_"+iD).value ="" ; 
      }
    }


    recap("id1", pay1);   recap("idA", payA);
    recap("id2", pay2);   recap("idB", payB);  


} //=============== Fin prix()



legende=`
  Vous aurez le contact <b>WhatsApp</b> du vendeur par mail.<br>
 `;
lgmail.innerHTML= legende ;


function valiMAIL() // Vaidation du Mail et num whatsapp et autres infos
{

  ilocar = iloca.value.split(" ");
  iwhpar= iwhp.value.split("") ;


  if(imail.value != "")
  { 
    arrmail= imail.value.split("");

    if(arrmail.indexOf("@") === -1 || arrmail.indexOf(".") === -1)
    { imail.style="background:#faa;";
      lgmail.style="background:#000;";
      lgmail.innerHTML = SP+ r("Entrez un bon mail svp.") +SP+br;
      setTimeout(function()
            {lgmail.innerHTML=legende; 
             imail.style="background:#fff;";
             lgmail.style="background:none;";},2500)
    }
    else if(ilocar.length < 4 && ilocar[0][1] !="t") // le T de hTtps://
    { iloca.style="background:#faa;";
      lgmail.style="background:#000;";
      lgmail.innerHTML = SP+ r("Livraison : Adresse avec quartier et repère"+br+"ou lien localisation GPS svp.") +SP+br;
      setTimeout(function()
            {lgmail.innerHTML=legende; 
             iloca.style="background:#fff;";
             lgmail.style="background:none;";},4000)
    }
    else if(iwhpar.length < 7)
    { iwhp.style="background:#faa;";
      lgmail.style="background:#000;";
      lgmail.innerHTML = SP+ r("Le livreur doit vous contacter sur un bon numéro.") +SP+br;
      setTimeout(function()
            {lgmail.innerHTML=legende; 
             iwhp.style="background:#fff;";
             lgmail.style="background:none;";},2500)
    }
    else
    {  
      if(iloca.value !="")
      {
        if(TOTAL != 0 && TOTAL != "undefined")
        {
          imail.style="background:#bfb";
          iloca.style="background:#bfb";
          iwhp.style="background:#bfb";
          ibtcom.innerHTML=`
          <input type="submit" name="comm" value="COMMANDER" id="go" onclick="prix()" onclick=location.href ="#go"; 
          style="width:600px; height:100px; background:#5f5 ;font-size:75px; padding:6px"> 
          `;
        }
      }
    iwhp.value = iwhp.value.replace(/[^\d.-]/g, '');
    }
/*/

/*/
  }
   else  
  { lgmail.style="background:#000;";
    lgmail.innerHTML = SP+ r("Entrez votre adresse mail svp.") +SP+br;
    setTimeout(function()
                {lgmail.innerHTML=legende; lgmail.style="background:none;";},2500)
  }
}

function vert(){ibtcom.innerHTML= g("VALIDEZ VOS E-MAIL ET LOCALISATION POUR COMMANDER.");}


</script>















<?php  

//================================================
$br = "<br>";     $BR = $br.$br.$br.$br;   $hr = "<hr>";  
$sp = "&nbsp;";   $SP = $sp.$sp.$sp.$sp;

$ns="font-size:2vw;font-family:courier;background:#000;color:#ff0;padding:5px;";
$Ns="font-size:4vw;font-family:courier;background:#000;color:#ff0;padding:7px;";

function n0($ix)
{
 $ns="font-size:2vw;font-family:courier;background:#000;color:#ff0;padding:5px;";
 return "<b style=".$ns.">". $ix ."</b>";
}

function N1($ix)
{
 $Ns="font-size:4vw;font-family:courier;background:#000;color:#ff0;padding:7px;";
 return "<b style=".$Ns.">". $ix ."</b>";
}

function b($ix){ return "<b style='color:blue'>". $ix ."</b>";}
function g($ix){ return "<b style='color:green'>". $ix ."</b>";}
function r($ix){ return "<b style='color:red'>". $ix ."</b>";}
function gr($ix){return "<b style='color:grey'>". $ix ."</b>";}
function w($ix){ return "<b style='color:#fff'>". $ix ."</b>";}
//====================================================



$num = "012" ;
$site = "https://www.shopsonile.com/boutiques/b".$num.".php" ;


$COMail = "" ;

$exp = "Bio-MEDICALE" ; // pas d'espaces ou carac spéciaux ici

$prod = "Bio";

$sign = "BioMédicale." ;

//En cas de produit physique
$payLivr =`Envoyez-nous votre localisation ou adresse de livraison.`;

$tel ="+221 77 874 04 53 "; //Pour numéro unique

$ntel_wa=$tel; // wa = whatsapp
$ntel_wo=$tel; // wo = wave orange

// =================== MAnip pour compresser le tel pour url
$artel = str_split($ntel_wa);

function comp($elm)
{
  return ($elm != " " && $elm != "+") ;
}

$arT= array_filter($artel, "comp") ;

$arT= implode("", $arT) ;

//echo gettype(b($arT)) ;
// =================== 

$whp = "https://api.whatsapp.com/send?phone=".$arT."&text=";

//echo $ntel .$br. g($whp) ;



// Définir variable du nom du produit choisi. Nécessaire uniquement pour l'envoi du mail
//Les inputs statiques ne servent qu'à faire basculer la varible html/js en $_POST php


if( isset($_POST["rsm1"]) )  // Si la case est cochée
                             // Alors récupérer le titre du produit qui sera affiché dans le mail
 {    if($_POST["Qid1"] >1){$pcs1= " pièces.";}else{$pcs1= " pièce."; }
    $tito1= $_POST["name_id1"]; $Qnt1= "x ".$_POST["Qid1"].$pcs1; 
     $ok1= $tito1;
} 
 else { $ok1= ""; $Qnt1="";} 
 


if( isset($_POST["rsm2"]) )  

{   if($_POST["Qid2"] >1){$pcs2= " pièces.";}else{$pcs2= " pièce."; }
    $tito2= $_POST["name_id2"]; $Qnt2= "x ".$_POST["Qid2"].$pcs2;    
    $ok2= $tito2; 
}
 else { $ok2= ""; $Qnt2=""; } 



if( isset($_POST["pjA"]) )  

{   if($_POST["QidA"] >1){$pcsA= " pièces.";}else{$pcsA= " pièce."; }
    $titoA= $_POST["name_idA"]; $QntA= "x ".$_POST["QidA"].$pcsA ;    
    $okA= $titoA; 
}
 else { $okA= ""; $QntA=""; } 
 


if( isset($_POST["pjB"]) )  

{   if($_POST["QidB"] >1){$pcsB= " pièces.";}else{$pcsB= " pièce."; }
    $titoB= $_POST["name_idB"]; $QntB= "x ".$_POST["QidB"].$pcsB ;   
    $okB= $titoB; 
}
 else { $okB= ""; $QntB=""; } 


//Récupération des produits 1234... sélectionnés. V= variable / N = numéro

function recuRSM($V,$N)
{
if( isset($_POST["rsm".$N]) )    
  { 
    echo "<br>".$V;  //Texte à afficher pour produit choisi
    //Faire en sorte que les cases restent cochées après SUBMIT
    //Injection de JS et de la fonction JS prix() qui calcule le total.
    echo '<script>document.getElementById("id'.$N.'").checked= true; prix();</script>'; 
  }
}
recuRSM($ok1,"1");   recuRSM($ok2,"2");  /* recuRSM($ok3,"3");   recuRSM($ok4,"4");   recuRSM($ok5,"5");   */




//Récupération des produits ABCD....

function recuPJ($V,$L)
{

if( isset($_POST["pj".$L]) )    
  { 
    echo "<br>".$V; //Texte à afficher selon cours choisi
    //Faire en sorte que les cases restent cochées après SUBMIT
    //Injection de JS et de la fonction JS prix() qui calcule le total.
    echo '<script>document.getElementById("id'.$L.'").checked= true; prix();</script>'; 
  }
}
recuPJ($okA,"A");   recuPJ($okB,"B");  /* recuPJ($okC,"C");   recuPJ($okD,"D");   recuPJ($okE,"E");   */



// Récupération du TOTAL à payer
if( isset($_POST["total"]) && $_POST["total"] != 0 ) 
{
  echo "<br><br><b>TOTAL à payer : ".$_POST["total"]."</b><br>";
  //echo '<script>document.getElementById("idD").checked= true; </script>'; 
$total=$_POST["total"];
}


if( isset($_POST["rname"]) && $_POST["rname"] == "WAVE"  )  
{ 
$refwav= "WAVE : Payer sur le : \n". $ntel_wo ; $mpW="Wave";
} 
else  { $refwav= ""; $mpW=""; } 


if( isset($_POST["rname"]) && $_POST["rname"] == "ORANGE"  )  
{ 
$reforg= "ORANGE MONEY sur le : \n". $ntel_wo ; $mpO="Orange";
} 
else  { $reforg= ""; $mpO=""; } 


if( isset($_POST["rname"]) && $_POST["rname"] == "LIVR"  )  
{ 
$refliv= "Le paiement se fera à la livraison"; $mpL="Liv.";
} 
else  { $refliv= ""; $mpL=""; } 



//Selection des modes de paiement

 function recuPAY($val,$SFX,$RF) // sfx = suffixe
{
  // Toutes les radios doivent être homonymes pour le choix unique.
  // La nuance sera au niveau de la variable $_POST["rname"] qui est = à 
  // l'attrubut HTML "value" du INPUT radio.

if( isset($_POST["rname"]) && $_POST["rname"] == $val )    //rname = radio name
  {                              
    echo "<span id='succPAY'><br>Mode de paiment : <br>".$RF."</span>";  //Texte à afficher pour produit choisi

    //Faire en sorte que les cases restent cochées après SUBMIT
    //Injection de JS
    echo '<script>document.getElementById("id'.$SFX.'").checked= true;</script>'; 
  }
}
recuPAY("WAVE","wav",$refwav);   
recuPAY("ORANGE","org",$reforg);   
recuPAY("LIVR","liv",$refliv);   


//Envoi du mail

if(isset($_POST["nmail"]) )
{
$CLImail= htmlentities($_POST["nmail"]);


    $WHPcli="";
    
    if(isset($_POST["numcli"]) )
    {
    $WHPcli= htmlentities($_POST["numcli"]);
    }

    $berep="";
    
    if(isset($_POST["loca"]) )
    {
    $berep= htmlentities($_POST["loca"]);
    }



// Message du mail respecter les retours et sauts de ligne


          

          $ads="$CLImail,$COMail";
          $sbj= $prod." , Livraison commande ".$WHPcli;

          $msg=" De $CLImail
          Commande  $WHPcli  :

          $ok1   $Qnt1  
          $ok2   $Qnt2  
          $okA   $QntA  
          $okB   $QntB  

          A PAYER
          ____________________________
          $total



          MODE DE PAIEMENT :
        $refwav
        $reforg
        $refliv
        $payLivr

$berep
LE LIVREUR VA PASSER ! (Envoyez votre localisation ou adresse si elle n'apparaît pas.)
________________________
Si vous habitez DANS LES REGIONS hors de la zone Dakar - Rufisque, donnez le numéro WhatsApp d'un PROCHE à Dakar ou d'un chauffeur de $berep qui va souvent à Dakar.


contactez-nous par WhatsApp.

$ntel_wa
$whp

         Merci pour votre commande !

         $site
         $sign .

      " 
          ;
        

 /*/
    $hed ="From: Commande_Axonile@NePasRepond.re";
    // Ajouter un header avec . = pour le cc
    $hed.= "Cc: axoniles@gmail.com"."\r\n";
/*/
    $headers = "From: COMMANDE_".$exp."@NePasRepondre.com\r\n";
    $headers .= "Cci: $COMail,axoniles@gmail.com\r\n";
    $headers .= "X-Mailer: PHP/".phpversion();


    //mail(to,subject,message,headers,parameters);
   

  mail($ads,$sbj,$msg,$headers);
  mail("axoniles@gmail.com",$sbj,$msg,$headers);

//MAIL BIEN ENVOYE
    echo "<br><span id='succMAIL'> COMMANDE VALIDEE </span>".
         g("✔");
   
       echo'<script>'.
      'success= succPAY.textContent + br + g(succMAIL.textContent);'.
      'setTimeout(function(){choix.innerHTML=success;},20) '.

       '</script>'; 


// ============== RECUP DONNEES POUR LA BASE fichier txt
$_ = "\n____________________________\n";
$arr=["🔴","🔴","🟠","🟡","🟢","🟡","🟢","🔵","🟣","⚫","⚪","🟤"];

$lid =  date("i j F Y")." ".date("h:i:s A").
"<br>+221 ".$WHPcli." :: <br> $berep 




$ok1 $Qnt1    $ok2 $Qnt2     Total $total".
" <br> $CLImail  &nbsp;&nbsp;  $mpO $mpW $mpL "." ".$arr[rand(0,12)]."<br><br><h1>MAIL:</h1>".
$ads .$br. $sbj .$br. $msg .$br. $headers;


    //Ouvrir le fichier .txt en mode a écriture
    $T =fopen(("Leads_RK.html"), "a") ;

        array_push($arr, $lid)  ;
        
        fputs($T, "<br>".$lid)  ;
        
        fclose($T) ;


        $data = file_get_contents("Leads_RK.html");
        $data = mb_convert_encoding($data, 'UTF-8', 'OLD-ENCODING');
} 

// =============== Fin récup données
?>


<br><br>

<i style="font-size:12px">
  Ce site respecte les préceptes de la finance islamique. Pas de dropshipping ni d'intermédiaires. Tout ce qui est mis en vente est réellement disponible en ce moment même.<br> 
  Shopsonile est un service d'hébergement de boutiques en ligne sur axonile boutiques. Les vendeurs ont 100% de la responsabilité de leurs produits et engagements vis-à-vis de leurs clients.</i>
<br><br>

 SECURITE :  Cette page ne nécessite aucune information bancaire.
</i>

<br><br>
<br><br>


 </body>


 </html>