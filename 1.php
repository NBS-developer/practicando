<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <scrip src="js/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <title>NBS.STYLES Sublimados</title>


</head>

<body>




<style>
    body {
        background-color:black;
    }
    h1,h3,h2{
             color:grey;
        text-align: center;
    }
    .centrar{

        margin-left: 30%;
    }
    .color{
        color:bisque;
        font-size: 23px;
    }
    .compra{

text-decoration: none;

border-radius:11px;
 color:bisque;
text-align: center;


    }
    .php{
display: flex;
flex-direction: row;
justify-content: space-evenly;
 background-image: linear-gradient(rgb(14, 8, 8), rgb(253, 21, 21));
 padding: 20px;
 border-radius: 30px;
border:2px solid gray;
    }
    .acomodar{

        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }
    .acomodar2{

        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
       
    }
    .imgres{

     text-align: center;
}
.redondear{

  border-radius:50%;
}
    @media screen and (max-width: 576px) {
        .acomodar2{

            display:flex;
            flex-direction:column;
        }


        .elprecio{

        display:flex;
            flex-direction:column;
            align-items:center;

        }



         #a {grid-area:"a";}
         #b{grid-area:"b";}
         #c {grid-area:"c";}
         #d {grid-area:"d";}
         .php{


            display: grid;
                    grid-template-columns: 50% 50%;
                    grid-template-areas: "a b" "c d";
                    column-gap: 10px;
                    row-gap: 20px;

         }   
          .comprasola{
            width:60%;
            margin: 0 auto;
          }



}

            .comprasola{
            width:60%;
            margin: 0 auto;
          }
       .comprasola{
 color:gray;
border:2px solid gray;
            text-decoration: none;
         display: flex;
flex-direction: row;
justify-content: space-evenly;
 background-image: linear-gradient(rgb(14, 8, 8), rgb(253, 21, 21));
 border-radius: 20px;
 margin-bottom:30px;
 font-size: 19px;
 font-weight: bold;
 text-align: center;
         } 
         .comprasola:hover{
border-top:solid bisque 2px;
 color:white !important;
 border-radius: 50px;
background-image: linear-gradient(red, rgb(253, 21, 21));


         }
         
        .resumen{

color:gray;
border:2px solid gray;
background-image: linear-gradient(rgb(14, 8, 8), rgb(253, 21, 21));
 border-radius: 20px;
        }



     .social {
	position: fixed; /* Hacemos que la posición en pantalla sea fija para que siempre se muestre en pantalla*/
	left: 0; /* Establecemos la barra en la izquierda */
	top: 220px; /* Bajamos la barra 200px de arriba a abajo */
	z-index: 2000; /* Utilizamos la propiedad z-index para que no se superponga algún otro elemento como sliders, galerías, etc */
}

	.social ul {
		list-style: none;
	}

	.social ul li a {
		display: inline-block;
		color:#fff;
        border-radius:6px;
		background: #000;
		padding: 0px 8px;
		text-decoration: none;
		-webkit-transition:all 500ms ease;
		-o-transition:all 500ms ease;
		transition:all 500ms ease; /* Establecemos una transición a todas las propiedades */
	}

	.social ul li .icon-facebook {background-image: linear-gradient(to left,rgb(14, 8, 8), rgb(37, 167, 18 ));} /* Establecemos los colores de cada red social, aprovechando su class */
	.social ul li .icon-twitter  {background-image: linear-gradient(to left,rgb(14, 8, 8), rgb(194, 4, 94  ));}
	.social ul li .icon-googleplus {background-image: linear-gradient(to left,rgb(14, 8, 8), rgb( 4, 138, 194));}
	.social ul li .icon-pinterest {background-image: linear-gradient(to left,rgb(14, 8, 8), rgb(194, 4, 22));}
	.social ul li .icon-mail {background-image: linear-gradient(to left,rgb(14, 8, 8), rgb(253, 21, 21));}

	.social ul li a:hover {
		background-image: linear-gradient(t left,rgb(14, 8, 8), rgb(253, 21, 21)); /* Cambiamos el fondo cuando el usuario pase el mouse */
		padding: 0px 30px; /* Hacemos mas grande el espacio cuando el usuario pase el mouse */ 
        border-radius:30px;


}

        

   
     .social1 {
	position: fixed; /* Hacemos que la posición en pantalla sea fija para que siempre se muestre en pantalla*/
		/*right:35px; /* Establecemos la barra en la izquierda */
        left: 88%;
	top: 220px; /* Bajamos la barra 200px de arriba a abajo */
	z-index: 2000; /* Utilizamos la propiedad z-index para que no se superponga algún otro elemento como sliders, galerías, etc */
}

 





	.social1 ul {
		list-style: none;
	}

	.social1 ul li a {
		display: inline-block;
		color:#fff;
        border-radius:6px;
		background: #000;
		padding: 0px 8px;
		text-decoration: none;
		-webkit-transition:all 500ms ease;
		-o-transition:all 500ms ease;
		transition:all 500ms ease; /* Establecemos una transición a todas las propiedades */
	}

	.social1 ul li .icon-facebook {background-image: linear-gradient(to left,rgb(14, 8, 8), rgb(37, 167, 18 ));} /* Establecemos los colores de cada red social, aprovechando su class */
	.social1 ul li .icon-twitter  {background-image: linear-gradient(to left,rgb(14, 8, 8), rgb(194, 4, 94  ));}
	.social1 ul li .icon-googleplus {background-image: linear-gradient(to left,rgb(14, 8, 8), rgb( 4, 138, 194));}
	.social1 ul li .icon-pinterest {background-image: linear-gradient(to left,rgb(14, 8, 8), rgb(194, 4, 22));}
	.social1 ul li .icon-mail {background-image: linear-gradient(to left,rgb(14, 8, 8), rgb(253, 21, 21));}

	.social1 ul li a:hover {
		background-image: linear-gradient(t left,rgb(14, 8, 8), rgb(253, 21, 21)); /* Cambiamos el fondo cuando el usuario pase el mouse */
	padding: 0px 25px; /* Hacemos mas grande el espacio cuando el usuario pase el mouse */ 
    
        border-radius:30px;
       


}
  @media screen and (max-width: 576px) {
     .social1{
        left: 80%;
     }
  }
   h3 spam{
color:gray;
border:2px solid gray;
background-image: linear-gradient(rgb(14, 8, 8), rgb(253, 21, 21));
 border-radius: 20px;
 padding:5px;
   }
   
</style>
<?php



$a = $_GET["color"];
$b = strtoupper($_GET["talle"]);
$remera= $_GET["remera"];
$foto = $_GET["foto"];
$oferta = $_GET["oferta"];

function prueba($a, $b)
{
  if($a=="BLANCO" || $a=="NEGRO"){
    if ($b=="S" || $b=="M") {
       $result=2000;
    }else if ($b=="L" || $b=="XL"){

        $result=2300;
    }else{
        $result=2500;
    }




  }else{

 if ($b=="S" || $b=="M") {
       $result=2200;
    }else if ($b =="L" || $b=="XL"){

        $result=2300;
    }else{
        $result=2700;
    }




  }
  return $result;
}

    $precio=prueba($a, $b);
?>
<div class=imgres>
<img src="imagenes/logo/Grupo 1.png" widht:80% alt="">
</div>
<h2>Hola !! te ayudamos con tu compra</h2>

<h2 class="resumen"> Este es el resumen de tu elección</h2>
<div class=acomodar>
    <h3>Elegiste la remera con la estampa de </html> <?php echo "<p class='color'>" . $remera . "</p>"?></h3>
    <img class="redondear"src="<?php echo $foto ?>"width=190; alt="">
</div>
<div class="acomodar2" >
<div>
    <h3>En talle 
    <?php echo "<p class='color'>" . $b ."</p>" ?></h3> 
</div>
<div >
    <h3>La remera en color
    <?php echo "<p class='color'>" . $a ."</p>" ?></h3> 
    </div>
    <div class="elprecio">
    <h3>El precio seria</h3>
    <?php echo "<p class='color'> $ " . $precio ."</p>" ?></h3> 
</div>
</div>
<?php

$oferta=="si"? $preciofinal=($precio -($precio*18/100)):$preciofinal=$precio;


if($oferta=="si"){?>
<h3><spam>Esta remera esta en oferta, al precio inicial de :</spam> <?php echo "<p class='color'> $ " . $precio ."</p>" ?> <spam>descontar 18% total final:</spam> <?php echo "<p class='color'> $ " . $preciofinal."</p>" ?></h3>
<?php ;}?>

    <div class="social">
		<ul>
			<li><a href="http://www.facebook.com/falconmasters" target="_blank" class="icon-facebook"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="22" height="22" viewBox="0 -1 28 24" stroke-width="2.5"stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
  <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
</svg></a></li>
<br>
			<li><a href="https://www.instagram.com/_nbs.styles/" target="_blank" class="icon-twitter"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="22" height="22" viewBox="0 -1 28 24" stroke-width="2.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <rect x="4" y="4" width="16" height="16" rx="4" />
  <circle cx="12" cy="12" r="3" />
  <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
</svg></a></li>
<br>
			<li><a href="https://www.facebook.com/nbsstyles-105857858480448" target="_blank" class="icon-googleplus"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="22" height="22" viewBox="0 -1 28 24" stroke-width="2.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
</svg></a></li>
<br>
			<li><a href="https://www.youtube.com/channel/UCj0v8aqSlF0-phoBb5siarg/featured" target="_blank" class="icon-pinterest"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-youtube" width="22" height="22" viewBox="0 -1 28 24" stroke-width="2.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <rect x="3" y="5" width="18" height="14" rx="4" />
  <path d="M10 9l5 3l-5 3z" />
</svg></a></li>
			<li><a href="mailto:contacto@falconmasters.com" class="icon-mail"></a></li>
		</ul>
	</div>

    <div class="social1">
		<ul>
			<li><a href="index.php" target="_blank" class="icon-facebook"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home-2" width="22" height="22" viewBox="0 0 24 24" stroke-width="2" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <polyline points="5 12 3 12 12 3 21 12 19 12" />
  <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
  <rect x="10" y="12" width="4" height="4" />
</svg></a></li>
<br>
			<li><a href="javascript:history.go(-1)" class="icon-twitter"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back-up" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" />
</svg></a></li>
<br>
			<li><a href="index.php#talles" target="_blank" class="icon-googleplus"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-ruler-2" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M17 3l4 4l-14 14l-4 -4z" />
  <path d="M16 7l-1.5 -1.5" />
  <path d="M13 10l-1.5 -1.5" />
  <path d="M10 13l-1.5 -1.5" />
  <path d="M7 16l-1.5 -1.5" />
</svg></a></li>
<br>
			<li><a href="http://www.pinterest.com/falconmasters" target="_blank" class="icon-pinterest"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-gmail" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M16 20h3a1 1 0 0 0 1 -1v-14a1 1 0 0 0 -1 -1h-3v16z" />
  <path d="M5 20h3v-16h-3a1 1 0 0 0 -1 1v14a1 1 0 0 0 1 1z" />
  <path d="M16 4l-4 4l-4 -4" />
  <path d="M4 6.5l8 7.5l8 -7.5" />
</svg></a></li>
			<li><a href="mailto:contacto@falconmasters.com" class="icon-mail"></a></li>
		</ul>
	</div>
 <?php $mensaje="Quiero encargar una remera de $remera en color $a en talle $b el costo es $ $preciofinal"; ?>

 <a class="comprasola"  href="https://wa.me/5493412295930/?text= <?php echo $mensaje; ?>"><p>Si estas de acuerdo con el resumen hacé click para enviar  pedido </p></a>

<!-- <div class="php">
<a class="compra " id="a" href="#"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
  <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
</svg> </a>

<a class="compra " id="b" href="index.php#2">  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <rect x="4" y="4" width="16" height="16" rx="4" />
  <circle cx="12" cy="12" r="3" />
  <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
</svg></a>
<a class="compra " id="c" href="https://www.facebook.com/nbsstyles-105857858480448"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
</svg></a>
<a class="compra " id="d" href="#">  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-youtube" width="32" height="32" viewBox="0 -2 24 24" stroke-width="1.5" stroke="#597e8d"fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <rect x="3" y="5" width="18" height="14" rx="4" />
  <path d="M10 9l5 3l-5 3z" />
</svg> </a>
</div>-->
<!--<a href="https://wa.me/5493412295930/?text= <?php echo $mensaje; ?>">Anchor text</a>-->
</body>
</html>