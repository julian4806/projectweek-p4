<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Help Oekraine</title>
  <link rel='stylesheet' href='style.css'>
  <script src="script.js" defer></script>

  <script defer>
    setInterval('location.reload(true)', 1 * 1000);
  </script>

</head>

<body>
  <div id="main">
    <h1 id="title">Oekraïne Donatiepunt <br> (VrijwilligersHuis Nieuwegein)</h1>
    <p id="description">
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. In maiores tempora earum praesentium eveniet qui sunt, dolore eius atque odio autem consectetur nulla dolorum soluta voluptatem vitae, ad commodi odit?
    </p>
    <p id="note">Bedankt dat u ons helpt!</p>
    <form id="survey-form" name="contact" action="contactform.php" method="POST" onsubmit="validateForm(); return false">
      <fieldset>
        <legend>
          Hulp voor Oekraïne
        </legend>
        <table id="personal-info">
          <tr>
            <td>
              <label>Naam (Verplicht)</label>
            </td>
            <td>
              <input type="text" id="name" name="name" placeholder="naam">
            </td>
          </tr>
          <tr>
            <td>
              <label>Email (Verplicht)</label>
            </td>
            <td>
              <input type="email" name="email" id="email" placeholder="voorbeeld@email.com">
            </td>
          </tr>
          <tr>
            <td>
              <label>Telefoonnummer</label>
            </td>
            <td>
              <input type="tel" name="phone" id="number" placeholder="06 12345678">
            </td>
          </tr>
          <tr>
            <td>
              <label>Categorie (Verplicht)</label>
            </td>
            <td>
              <select name="category" id="dropdown">
                <option disabled value selected>Selecteer een categorie</option>
                <option value="goederen">Goederen</option>
                <option value="diensten">Diensten</option>
                <option value="levensmiddelen">Levensmiddelen</option>
              </select>
            </td>
          </tr>

          <tr id="subcategory-one">
            <td>
              <label>Subcategorie</label>
            </td>
            <td>
              <select name="category" id="dropdown">
                <option disabled value selected>Selecteer een categorie</option>
                <option value="goederen">Goederen</option>
                <option value="diensten">Diensten</option>
                <option value="levensmiddelen">Levensmiddelen</option>
              </select>
            </td>
          </tr>
          <tr id="subcategory-two">
            <td>
              <label>Subcategorie</label>
            </td>
            <td>
              <select name="category" id="dropdown">
                <option disabled value selected>Selecteer een categorie</option>
                <option value="goederen">Goederen</option>
                <option value="diensten">Diensten</option>
                <option value="levensmiddelen">Levensmiddelen</option>
              </select>
            </td>
          </tr>
          <tr id="subcategory-three">
            <td>
              <label>Subcategorie</label>
            </td>
            <td>
              <select name="category" id="dropdown">
                <option disabled value selected>Selecteer een categorie</option>
                <option value="goederen">Goederen</option>
                <option value="diensten">Diensten</option>
                <option value="levensmiddelen">Levensmiddelen</option>
              </select>
            </td>
          </tr>

          <td>
            <label>Beschrijving (Verplicht)</label>
          </td>
          <td>
            <textarea name="message" cols="50" rows="5"></textarea>
          </td>
        </table>
      </fieldset>
      <input id="submit" type="submit" name="submit" value="Verstuur" />
      <a href="loginpage.php">Ga naar de adminpagina</a>
      </section>

    </form>
  </div>

</body>

</html>