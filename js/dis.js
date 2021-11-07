document.getElementById('triggar').addEventListener('click', openDis);
document.forms["etsiduunia"].addEventListener("submit", etsiduuni);



if (localStorage.getItem("hait")) {
    let okis = localStorage.getItem("hait");
    let hakuris = JSON.parse(okis)
    let data = Object.values(hakuris)


    // const queryString = window.location.search;
    // const urlParams = new URLSearchParams(queryString);
    // const product = urlParams.get('ala')
    // console.log(product);


        for (let i = 0; i < data.length; i++) {
            let span = document.createElement("a");
            span.setAttribute('class', 'haetut');
            let content = data[i];

            let linkki = content.replace(",##","&ala=").replace(" ","");

            let cleaner = content.replace(",##",", ");




            span.setAttribute('href', "haku.php?citys=" + linkki);
            span.id = "haettu" + i;
            span.innerHTML = cleaner + " ";
            // console.log(span);
            document.getElementById('haetut').appendChild(span);
        }
}



function openDis(event) {
    document.getElementById("Modaliii").className = "modal fade";
    document.getElementById("Modaliii").setAttribute("style", "display: none");
    console.log("wiiu wiiu")
    let descs = event.target.dataset.descid;
    let thiss = {
        todo: "getmain",
        id: descs
    };
    if (descs > 1) {
        document.getElementById("Modaliii").className = "modal show";
        document.getElementById("Modaliii").setAttribute("style",
            "display: block;  overflow: auto; background-color: #000000ba;");
        let ajax = new XMLHttpRequest();
        ajax.onload = function() {
            data = JSON.parse(this.responseText);
            // let budjettis = data[0].budjettis;
            let kuvauss = data[0].bodyText;
            let id = data[0].id;
            // let milloins = data[0].milloins;
            // let otsikkos = data[0].otsikkos;
            // let timestamp = data[0].timestamp;
            // let url = data[0].url

            // document.getElementById('exampleModalLabel').innerHTML = otsikkos;
            // // document.getElementById('idis').innerHTML = id;
            document.getElementById('kuvauss').innerHTML = kuvauss;
            // document.getElementById('milloins').innerHTML = milloins;
            // // document.getElementById('otsikkos').innerHTML = otsikkos;
            // // document.getElementById('timestamp').innerHTML = timestamp;
            // document.getElementById('budjettis').innerHTML = budjettis;
            // var a = document.getElementById('urls'); //or grab it by tagname etc
            // a.href = url;
        }
        ajax.open("POST", "../ware/core.php", true);
        ajax.setRequestHeader("Content-Type", "application/json");
        ajax.send(JSON.stringify(thiss));
        [0]
    }

}



function etsiduuni(e) {
    console.log("what")
    e.preventDefault();
    const citys = document.getElementById("citys").value;
    const ala = document.getElementById("ala").value;
    const tyosuhteet = document.getElementById("tyosuhde").value;
    const hakusana = document.getElementById("hakusana").value;

    let kaupunki = 'citys=' + citys;
    let alat = 'ala=' + ala;
    let tyosuhde = 'tyosuhde=' + tyosuhteet;
    let hakujuttu = 'haku=' + hakusana;

    /// Magia
    let haku = "hait";
    let i = 0
    if (localStorage.getItem("hait") === null) {
        let thissa = '{"0":"' + citys + ',##' + ala  + '"}';
        localStorage.setItem("hait", thissa);

    } else {

    let oki = localStorage.getItem("hait");
    let hakuri = JSON.parse(oki)

    let curr = Object.values(hakuri)

    if (curr.indexOf(ala) === -1) {
        let oldsaved = oki.slice(0, -1);
        console.log("kaupunkia ei ole...lisätään");
        let allvalue = Object.keys(hakuri).length;
        allvalue++
        let news = oldsaved + ', "' + allvalue + '":"' + citys +',##'+ala + '"}';
        localStorage.setItem(haku, news);
    } if (curr.indexOf(citys) === -1) {
        let oldsaved = oki.slice(0, -1);
        console.log("kaupunkia ei ole...lisätään");
        let allvalue = Object.keys(hakuri).length;
        allvalue++
        let news = oldsaved + ', "' + allvalue + '":"' + citys +',##'+ala + '"}';
        localStorage.setItem(haku, news);
    }
}


    window.location.href = "haku.php?" + hakujuttu + "&" + alat + "&" + kaupunki + "&" + tyosuhde;//siirtää toiseen ikkunaan
}