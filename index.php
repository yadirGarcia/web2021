<html>

<head>

<title>Presentación</title>

</head>

<body>

  <img src = "img/im.jpg" alt="Salida con los amigos de la U" width="1000" height="200"></img>

<h1 style="color:#FF0000">
  YADIR ALONSO GARCIA QUINTERO
  </h1>

<h2>
  Fecha de Nacimiento: 02/05/1999
  </h2>

<p>
  Nací en la ciudad de Cúcuta en el barrio Antonia santos, provengo de una familia de escasos recursos de un pueblo llamado Las Mercedes en Norte de Santander, el cual me encantaba visitar cada fin de año mientras se pudiese. Contemplaba mucho la naturaleza y los animales, en cuanto a mis características soy un chico bastante alegre, me considero gracioso, aprecio mucho a las personas y suelo ayudarlas mientras este a mi alcance, también soy muy agradecido. No he sido bueno con los deportes, pero me gusta el futbol, en cuanto a los países que conozco, solo he estado en Colombia y Venezuela, de Colombia conozco algunos pueblitos alrededor de la ciudad de Cúcuta, ya que me gusta visitarlos en bicicleta y Santamarta, que tuve la oportunidad de visitar con un grupo de compañeros al graduarnos de bachillerato. De Venezuela conozco unas aldeas cercanas a la frontera.
  </p>

  <p>
    Mi experiencia con la carrera ha sido muy buena, tiene un buen nivel de exigencia comparándolo con las universidades de los alrededores, los semilleros nos ayudan a mantenernos en constante investigación y la comunidad es acogedora, lo que mas me gusta es la programación y las personas que he conocido. En cuanto a lo que mas se me ha dificultado son los cálculos. En 5 años me visiono graduado y laborando.
    </p>

    <h3>Mis hobbies </h3>

    <ul>
      <li>Andar en bicicleta</li>
      <li>Los videojuegos</li>
      <li>Ver series</li>
      <li>Conocer lugares nuevos</li>
    </ul>

    <h3>Mis series favoritas</h3>
    <ul>
      <li>Lucifer</li>
      <li>Los 100</li>
      <li>Malcolm in the Middle</li>
      <li>The umbrella academy</li>
    </ul>
 
    <h3>Mis películas favoritas</h3>
    <ul>
      <li>Juego de Honor</li>
      <li>Mosul</li>
      <li>Los Vengadores</li>
      <li>No se aceptan devoluciones</li>
    </ul>

    <h3>Mis Juegos favoritos</h3>
    <ul>
      <li>Halo 1</li>
      <li>Call of Duty</li>
      <li>Fifa</li>
      <li>Parchis Star</li>
    </ul>
     
    <h3>Mi canción favorita:</h3>

    <p><a href="https://youtu.be/QpJ2Dm2Jb2w">BERET-OJALÁ</a></p>

    <audio controls autoplay>
<source src="audio/oj.mp3" type="audio/mpeg"/>
 </audio>

 <h3>Materias favoritas </h3>
 <table border="1px" bordercolor="666633" high="70%" width="70%" >
 <tr> 
 <td> 
 <b>Materia</b>
 </td>
 <td> 
 <b>Nota</b>
 </td>
 <td> 
 <b>Por qué es de las favoritas?</b>
 </td>
 </tr>
 
 <tr> 
 <td> 
 Seminario integrador I
 </td>
 <td> 
 4.3
 </td>
 <td> 
 Fue una materia bastante didactica, me gusto la metodologia donde nos hacian ofrecer un producto en equipo.
 </td>
 </tr>
 
 <tr> 
 <td> 
 Estructuras de datos
 </td>
 <td> 
 3.3
 </td>
 <td> 
Se aumento un poco el nivel de programacion, se realizaban ejercicios todas las clases permitiendo adquirir el conocimiento, y el docente tiene mucha vocación
 </td>
 </tr>
 
 <tr> 
 <td> 
 Programacion orientada a objetos II
 </td>
 <td> 
 3.9
 </td>
 <td> 
 Entendi bien la tematica y el docente hacia las clases bastante divertidas
 </td>
 </tr>
 
 <tr> 
 <td> 
 Arquitectura de computadores
 </td>
 <td> 
  4.0
 </td>
 <td> 
 La materia es dificil, pero se aprende mucho sobre el funcionamiento a bajo nivel del hardware y software.
 </td>
 </tr>
 
 <tr> 
 <td> 
 Bases de datos
 </td>
 <td> 
 3.4
 </td>
 <td> 
 La materia es muy importante y el docente maneja buena metodologia, explicando tanto en clase como con cursos y herramientas.
 </td>
 </tr>
 
 </table
   
   <form method="POST">

<label for="nombre">Nombre: </label>
<input type="Text" name="nombre" placeholder="Escriba el nombre de la persona" id="nombre"> 
<br>
<label for="asunto">Asunto: </label>
<input type="Text" name="asunto" placeholder="Escriba el asunto " id="asunto">
<br>
<label for="email">Email: </label>
<input type="email" name="email" id="email" placeholder="Escriba el Email del usuario">
<br>
<label for="mensaje">Mensaje: </label>
<textarea name="mensaje" id="mensaje" placeholder="Escriba el mensaje por el cual desea contactarnos"></textarea>


<br>
<input type="submit" name="enviar" placeholder="Enviar">
</form>
  
  <?php
include("datos.php");
?>


</body>

</html>