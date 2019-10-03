<html>
<head>
 <link rel="stylesheet" type="text/css" href="style.css">
 <title>Formulario teste</title></head>
<body>
 <style>
 body{background-color: #ADD8E6;}
 </style>

<body><form action="metodo_post.php" method="POST">
  <fieldset>
       <legend>Fill in the fields below:</legend>
        <p>
          <div class="linha">
            <label>
            <label{background-color: #FF69B4 font-weight;}
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 11px

           <label for="name">Name: </label>
           <input type="text" name="name" id="name" required>
       </p>        <p>
           <label for="email">E-mail: </label>
           <input type="email" name="email" id="email" required>
       </p>        <label for="phone">Phone: </label>
           <input type="text" name="Phone" id="phone"required>
           <p>
             <div class="linha2">
 <label>Estado:
 <select name="estado" id="estado">
<option>              </option>
 <option>Minas Gerais </option>
 <option>São Paulo</option>
 <option>Rio de Janeiro</option>
 <option>Espirito Santo</option>
 </select>
  </label>
</div>
           <label for="endereço">Endereço: </label>
           <input type="text" name="Endereço" id="Endereço">
         </p>

   </fieldset>    <p>
       <input type="submit" value="Submit" id="submit">
   </p></form></body>


</html>
