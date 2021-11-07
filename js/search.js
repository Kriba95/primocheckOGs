document.forms["etsiduunia"].addEventListener("submit", etsiduuni);

function etsiduuni(e) {
  e.preventDefault();
  const citys = document.getElementById("citys").value;
  const ala = document.getElementById("ala").value;

  let kaupunki = 'citys=' + citys;
  let alat = 'ala=' + ala;

  window.location.href = "tyopaikat/haku.php?" +  alat + "&" + kaupunki + "&"  ;//siirtää toiseen ikkunaan
}
