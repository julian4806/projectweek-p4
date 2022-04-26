<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='style.css'>
  <script src='script.js' defer></script>
  <title></title>
</head>

<body>


  <div class="container">
    <h1 id="title">Oekraïne Donatiepunt <br> (VrijwilligersHuis Nieuwegein)</h1>
    <p id="description">
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. In maiores tempora earum praesentium eveniet qui sunt, dolore eius atque odio autem consectetur nulla dolorum soluta voluptatem vitae, ad commodi odit?
    </p>
    <p id="note">Bedankt dat u ons helpt!</p>
    <h3>Using CSS to style an HTML Form</h3>
    <form id="survey-form" name="contact" action="contactform.php" method="POST" onsubmit="validateForm(); return false">

      <label>Naam (Verplicht)</label><br>
      <input type="text" id="name" name="name" placeholder="naam">

      <label>Email (Verplicht)</label><br>
      <input type="email" name="email" id="email" placeholder="voorbeeld@email.com">

      <label>Telefoonnummer</label><br>
      <input type="tel" name="phone" id="number" placeholder="06 12345678">

      <label>Categorie (Verplicht)</label><br>
      <select name="category">
        <option disabled value selected>Selecteer een categorie</option>
        <option value="goederen">Goederen</option>
        <option value="diensten">Diensten</option>
      </select>


      <div id="subcategory-one">
        <label>Subcategorie Goederen (Verplicht)</label><br>
        <select name="subcategory-one">
          <option disabled value selected>Selecteer een categorie</option>
          <option value="meubels">meubels</option>
          <option value="fiets">fiets</option>
          <option value="kleding">kleding</option>
          <option value="speelgoed">speelgoed</option>
          <option value="verzorgingsproducten">verzorgingsproducten</option>
        </select>
      </div>

      <div id="subcategory-two">
        <label>Subcategorie Diensten (Verplicht)</label><br>
        <select name="subcategory-two">
          <option disabled value selected>Selecteer een categorie</option>
          <option value="buddy">Maatje/buddy worden</option>
          <option value="activiteit">Activiteit organiseren</option>
          <option value="vrijwilliger">Inzetten als vrijwilliger</option>
          <option value="tolk">Tolk/ vertaler</option>
        </select>
      </div>

      <label>Beschrijving (Verplicht)</label><br>
      <textarea name="message" cols="50" rows="5"></textarea>
      <input id="submit" type="submit" name="submit" value="Verstuur" />
      <a href="loginpage.php">Ga naar de adminpagina</a>

    </form>
  </div>

</body>

</html>