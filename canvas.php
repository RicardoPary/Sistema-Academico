<!DOCTYPE html>
<html lang="es"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>Dibujar Canvas</title>
<style type="text/css">
body{
	margin:0px;
	padding:0px;
	}
	#canvas{
	border: 1px solid  #000;
	box-shadow: 2px 2px 10px #333;
	}
</style>

<script type="text/javascript">	
function comenzar()
{					
	lienzo = document.getElementById('canvas');
 	ctx = lienzo.getContext('2d');

	//Dejamos todo preparado para escuchar los eventos
	document.addEventListener('mousedown',pulsaRaton,false);
	document.addEventListener('mousemove',mueveRaton,false);
	document.addEventListener('mouseup',levantaRaton,false);
}

function pulsaRaton(capturo)
{
	estoyDibujando = true;
	//Indico que vamos a dibujar
	ctx.beginPath();
	//Averiguo las coordenadas X e Y por dónde va pasando el ratón
	ctx.moveTo(capturo.clientX,capturo.clientY);
}


function mueveRaton(capturo)
{
	if(estoyDibujando)
	{
		//indicamos el color de la línea
		ctx.strokeStyle='#000';
		//Por dónde vamos dibujando
		ctx.lineTo(capturo.clientX,capturo.clientY);
		ctx.stroke();
	}
}

function levantaRaton(capturo)
{
	//Indico que termino el dibujo
	ctx.closePath();
	estoyDibujando = false;
}

</script>

</head>

<body onLoad="comenzar()">
<canvas id="canvas" width="600" height="400"></canvas>
</body>
</html>