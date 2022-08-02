<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .form11 {
        display: flex;
        flex-direction: column;
    }

    .form22 {
        display: flex;
        flex-direction: column;
        background-image: linear-gradient(#444, #111);
        padding: 0px;
        border-radius: 10px;
    }

    .form33 {
        display: flex;
        justify-content: space-evenly;
    }

    .form33 :hover {
        cursor: pointer;
    }

    .form33 label {
        color: gray;
    }

    .input1 {
        width: 100%;
        background-color: #000;
        color: gray;
        border: gray 1px solid;
        cursor: pointer;
    }

    .input1:hover {
        background-image: linear-gradient(#444, #111);
        color: #fafafa;
        border-radius: 20px;
        border: 2px solid gray;
    }

    .label {
        text-align: center;
        color: white;
        background-image: linear-gradient(#444, #111);
        border: #000 10px solid;
        padding: 4px;
        border-radius: 10px;
        border-top: solid gray 7px;

    }

    .sumary {
        cursor: pointer;
        background-color: rgb(32, 30, 30);
        border-radius: 5px;
        padding: 2px;
        width: 100%;
    }

    .sumary h4 {
        text-align: center;
        margin: 5px;
    }

    .sumary:hover {
        border-radius: 20px;
        background-color: rgb(8, 8, 8);
    }

    .sumary h4:hover {
        border-radius: 20px;
        color: #fafafa;
    }

    .contene {

        width: 50%;
        margin: auto;

    }

    body {
        background: #000;
    }

    h1,
    h2,
    h3,
    p {
        color: gray;
        text-align: center;
    }

    .nombreyfoto {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
      

    }
    .img{
        margin-bottom:20px;
       background-image: linear-gradient(rgb(14, 8, 8), rgb(253, 21, 21));
      border-radius: 100%;
      width:200px;
       
    }
    .img:hover{

 background-image: linear-gradient(rgb(33, 8, 8), rgb(273, 41, 21));

    }
    .radio{
        display:flex;
      
    }
    h2 spam{


       background-image: linear-gradient(rgb(14, 8, 8), rgb(253, 21, 21));
       padding: 3px;
       border-radius: 7px;
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
    


    
</style>

<body>
    <h2>Elegiste el Buzo de : </h2>
   


    <?php
    
    $remera = $_GET["remera"];
    $foto = $_GET["foto"];
    
    ?>
    <div class="nombreyfoto">
        <?php
        echo "<h2><spam>" . $remera  ."</spam></h2>";

        ?>
        <img class="img" src=<?php echo $foto; ?> width="250">

    </div>
     <h3>Ahora elegí color y talle para calcular el precio</h3>
    <div class="contene">

        <form action="2.php" method="get">

            <input type="hidden" name="remera" value=<?php echo  $remera; ?>>
            <input type="hidden" name="foto" value=<?php echo  $foto; ?>>
            <div class="form11">

                <div class="form22">

                    <label class="label">Elegi el color</label>

                    <div class="form33">

                       <div class="radio"> 
                          <input type="radio" id="html" name="color" value="blanco">
                          <p>Blanco</p></div>
                        <div class="radio"> 
                          <input type="radio" id="css" name="color" value="negro" required>
                          <p>Negro</p></div>
                        <div class="radio"> 
                          <input type="radio" id="javascript" name="color" value="gris">
                          <p>Gris</p></div>
                    </div>
                </div>
                <br>
                <br>
                <div class="form22">
                    <label class="label"> Ahora elegí tu talle</label>
                    <div class="form33">
                        <div class="radio"> 
                        <p>S</p>
                        <input class="type" type="radio" id="age1" name="talle" value="s"></div>
                        <div class="radio"> 
                        <p>M</p>
                        <input type="radio" id="age2" name="talle" value="m"></div>
                        <div class="radio"> 
                        <p>L</p>
                        <input type="radio" id="age3" name="talle" value="l" required></div>
                        <div class="radio"> 
                        <p>XL</p>
                        <input type="radio" id="age1" name="talle" value="xl"></div>
                        <div class="radio"> 
                        <p>XXL</p>
                        <input type="radio" id="age2" name="talle" value="xxl"></div>
                        <div class="radio"> 
                        <p>XXXL</p>
                        <input type="radio" id="age3" name="talle" value="xxxl"></div>
                    </div>

                </div>
            </div>
            <br>

            <input class="input1" type="submit" name="pulsado" value="CALCULAR PRECIO">
        </form>
    </div>
    <?php
    if (isset($_GET["pulsado"])) {
        $talle = $_GET["talle"];
        $color = $_GET["color"];
        function PrecioBuzos($color, $talle)
        {
            if ($color == "blanco") {
                if ($talle == "s" || $talle == "m") {
                    return 4000;
                } elseif ($talle == "l") {
                    return 4100;
                } elseif ($talle == "xl") {
                    return 4300;
                } else {
                    return 4500;
                }
            } else {

                if ($talle == "s" || $talle == "m") {
                    return 4200;
                } elseif ($talle == "l") {
                    return 4300;
                } elseif ($talle == "xl") {
                    return 4500;
                } else {
                    return 4700;
                }
            }
        }
        echo "<h2> Tu buzo de <spam> $remera </spam> talle<spam> '$talle' </spam> y en color <spam> $color </spam> tiene un valor de $ <spam>" . PrecioBuzos( $color,$talle) . " .</spam></h2>";
    }




    ?>
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
</body>

</html>