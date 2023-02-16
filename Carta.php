<html>
<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
    <title>Carta del restaurante</title>
    <meta charset="UTF-8">
    <style>
        :root {
  --clr-neon: hsl(317 100% 54%);
  --clr-bg: hsl(323 21% 16%);
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

body {
  min-height: 100vh;
  display: grid;
  place-items: center;
  background: var(--clr-bg);
  font-family: "Balsamiq Sans", cursive;
  color: var(--clr-neon);
  padding-right: 10rem;
}

.neon-button {
  font-size: 4rem;

  display: inline-block;
  cursor: pointer;
  text-decoration: none;
  color: var(--clr-neon);
  border: var(--clr-neon) 0.125em solid;
  padding: 0.25em 1em;
  border-radius: 0.25em;

  text-shadow: 0 0 0.125em hsl(0 0% 100% / 0.3), 0 0 0.45em currentColor;

  box-shadow: inset 0 0 0.5em 0 var(--clr-neon), 0 0 0.5em 0 var(--clr-neon);

  position: relative;
}

.neon-button::before {
  pointer-events: none;
  content: "";
  position: absolute;
  background: var(--clr-neon);
  top: 120%;
  left: 0;
  width: 100%;
  height: 100%;

  transform: perspective(1em) rotateX(40deg) scale(1, 0.35);
  filter: blur(1em);
  opacity: 0.7;
}

.neon-button::after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  box-shadow: 0 0 2em 0.5em var(--clr-neon);
  opacity: 0;
  background-color: var(--clr-neon);
  z-index: -1;
  transition: opacity 100ms linear;
}

.neon-button:hover,
.neon-button:focus {
  color: var(--clr-bg);
  text-shadow: none;
}

.neon-button:hover::before,
.neon-button:focus::before {
  opacity: 1;
}
.neon-button:hover::after,
.neon-button:focus::after {
  opacity: 1;
}
    </style>
</head>
<body style="text-align:center">
    <!-- Aqui podemos ver como se hace un formulario de tipo radio donde solo se puede seleccionar 1 -->
    <form action="Comanda.php" method="post" enctype="multipart/form-data">
        
        <h1 style="font-style: italic;">Seleccione su entrante</h1>
        Mojama con atun<input type="radio" name="plato" value="Mojama con atun" checked>
        Volador Seco<input type="radio" name="plato" value="Volador Seco">
        Hueca Seca<input type="radio" name="plato" value="Hueca Seca">
        Solomillo atun<input type="radio" name="plato" value="Solomillo atun">
        <!-- Aqui es lo mismo que arriba pero en checkbox para poder elegir mas de un elemento -->
        <!-- 
          <p style="font-style: italic;margin-top:5%" >Mojama con atun</p><input type="checkbox" name="plato" value="Mojama con atun" checked>
          <p style="font-style: italic;" >Volador Seco</p><input type="checkbox" name="plato" value="Volador Seco">
          <p style="font-style: italic;" >Hueca Seca</p><input type="checkbox" name="plato" value="Hueca Seca" checked>
          <p style="font-style: italic;" >Solomillo atun</p><input type="checkbox" name="plato" value="Solomillo atun">
        -->
        <br>
        <h1 style="font-style: italic;">Seleccione su postre</h1>
        Manzana<input type="checkbox" name="postre" value="Manzana">
        Pera<input type="checkbox" name="postre" value="Pera">
        <br><br>
        <h1 style="font-style: italic;">Introduzca sus datos personales</h1>
        <p style="font-style: italic" >Nombre Completo</p><input type="text" maxlength="10" size="20" name="Usuario">
        <br><br>
        Señor<input type="radio" name="sex" value="Hombre" checked>
        Señora<input type="radio" name="sex" value="Mujer">
        <!-- un poco de humor why not -->
        Helicoptero Apache<input type="radio" name="sex" value="Apache">
        
        <br><br>
        <!-- Es igual que los casos de arriba asi que no veo necesario explicarlo, ya esta arriba-->
        <h1 style="font-style: italic;">Seleccione su edad</h1>
        Niño<input type="radio" name="edad" value="Niño" checked>
        Adolescente<input type="radio" name="edad" value="Adolescente">
        Adulto<input type="radio" name="edad" value="Adulto" checked>
        Persona mayor<input type="radio" name="edad" value="Persona mayor">
        <br><br>
        <h1 style="font-style: italic;">Elija su situacion actual</h1>
        Estudiante<input type="checkbox" name="Puesto" value="Estudia">
        Trabajador<input type="checkbox" name="puesto" value="Trabaja">
        <br><br>
        <h1 style="font-style: italic;">Introduzca una breve descripción de su consulta</h1>
        <!--En la opcionde wrap podemos usar, off, virtual o physical. Cada una de ellas producira efectos diferentes al tratar los saltos de lineas y al enviarlos al server-->
        <textarea name="Consulta" cols="50" rows="10" wrap="virtual" id="Consulta" placeholder="Escriba aqui por favor, se que es intuitivo, pero hay gente que intenta escribir fuera."></textarea> 
        <br><br>
        <!--Este es un menu -->
        <h1 style="font-style: italic;">Seleccione su menu</h1>
        <select multiple name="Menu[]" size="7" style="width:230px;height:120px">
          <option value="1">Mojama</option>
          <option value="2">Salazones</option>
          <option value="3">Ahumados</option>
          <option value="4">Conservas</option>
          <option value="5">Semiconservas</option>
          <option value="6">Surtidos</option>
        </select>
        <br><br>
        <!--<input class="neon-button" type="submit" name="enviar">-->
        <button class="neon-button">Enviar</button>
    </form>
</body>
</html>