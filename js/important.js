
    document.forms['ilmoitus'].addEventListener('submit', uusiIlmoitus);
    document.getElementById('trigga').addEventListener('click', openPoll);


    function closethissh() {
        document.getElementById("Modaliii").className = "modal fade";
        document.getElementById("Modaliii").setAttribute("style", "display: none;");

    }

    function findTotal() {
        console.log("ha");
        var arr = document.getElementsByName('qty');
        var ex = document.getElementsByName('qtyt');
        let ifs = ""
        let aloitusmaksu = 100;

        var tot = 0;
        let min = ex[0].value;
        let vamas = parseInt(min);
        for (var i = 0; i < arr.length; i++) {
            if (parseInt(arr[i].value))
                tot += parseInt(arr[i].value);
        }
        tot - aloitusmaksu;
        tot / parseInt(min);
        let thiss = tot / min;
        let answ = parseInt(thiss).toFixed(2);

        if (vamas > 1) {
            ifs = "/kk</b>" + "<span style='font-size: 60%;'> yht. " + min + " kuukautta </span>";
        }

        tot - 100;
        document.getElementById('total').innerHTML = "Aloitus maksu: <b>" + aloitusmaksu + "€</b>, Projekti: <b>" +
            tot + "€</b> Yhteensä: <b>" + answ + "€" + ifs + "<span style='font-size: 60%;'> sis. alv </span>";
    }

    function openPoll(event) {
        document.getElementById("Modaliii").className = "modal fade";
        document.getElementById("Modaliii").setAttribute("style", "display: none");
        console.log("wiiuu")
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
                let budjettis = data[0].budjettis;
                let kuvauss = data[0].full;
                let id = data[0].id;
                let milloins = data[0].milloins;
                let otsikkos = data[0].otsikkos;
                let timestamp = data[0].timestamp;
                let url = data[0].url

                document.getElementById('exampleModalLabel').innerHTML = otsikkos;
                // document.getElementById('idis').innerHTML = id;
                document.getElementById('kuvauss').innerHTML = kuvauss;
                document.getElementById('milloins').innerHTML = milloins;
                // document.getElementById('otsikkos').innerHTML = otsikkos;
                // document.getElementById('timestamp').innerHTML = timestamp;
                document.getElementById('budjettis').innerHTML = budjettis;
                var a = document.getElementById('urls'); //or grab it by tagname etc
                a.href = url;
            }
            ajax.open("POST", "./ware/core.php", true);
            ajax.setRequestHeader("Content-Type", "application/json");
            ajax.send(JSON.stringify(thiss));
            [0]
        }

    }


    function uusiIlmoitus(e) {
        e.preventDefault();
        // const msg = document.querySelector('.msg');
        // const msgtwo = document.querySelector('.msgtwo');
        // const msgdate = document.querySelector('.msgdate');
        // const msdateend = document.querySelector('.msgdateend');
        const sivu = document.getElementById("sivu").value
        const sivu1 = document.getElementById("sivu1").value
        const sivu2 = document.getElementById("sivu2").value
        const sivu3 = document.getElementById("sivu3").value
        const sivu4 = document.getElementById("sivu4").value
        const sivu5 = document.getElementById("sivu5").value
        const sivu6 = document.getElementById("sivu6").value
        const sivu7 = document.getElementById("sivu7").value
        const sivu8 = document.getElementById("sivu8").value
        const sivu9 = document.getElementById("sivu9").value
        const sivu10 = document.getElementById("sivu10").value
        const sivu11 = document.getElementById("sivu11").value

        let thiss = {
            ilmoitus: "insert",
            sivu: sivu,
            sivu1: sivu1,
            sivu2: sivu2,
            sivu3: sivu3,
            sivu4: sivu4,
            sivu5: sivu5,
            sivu6: sivu6,
            sivu7: sivu7,
            sivu8: sivu8,
            sivu9: sivu9,
            sivu10: sivu10,
            sivu11: sivu11
        }
        console.log("lohl")

        let ajax = new XMLHttpRequest();
        ajax.onload = function() {
            const data = JSON.parse(this.responseText);
            console.log("data")

            if (data.hasOwnProperty('onnistui')) {
                let ids = this.responseText.substr(19, 3); // pitää manuualisesti vaihtaa isompaan.... ongelma.
                console.log(ids);
                window.location.href = "index.php?id=" + ids; //siirtää toiseen ikkunaan
            } else {
                window.location.href = "omat.php?type=succec&msg=Uusi aani lisatty!" //siirtää toiseen ikkunaan

            }
        }
        ajax.open("POST", "./ware/core.php", true);
        ajax.setRequestHeader("Content-Type", "application/json");
        ajax.send(JSON.stringify(thiss));
        [0]
    }


    function openIlmoitus(event) {
        document.getElementById("Modaliii").className = "modal fade";
        document.getElementById("Modaliii").setAttribute("style", "display: none");
        console.log("wiiuu")
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
                let budjettis = data[0].budjettis;
                let kuvauss = data[0].full;
                let id = data[0].id;
                let milloins = data[0].milloins;
                let otsikkos = data[0].otsikkos;
                let timestamp = data[0].timestamp;
                let url = data[0].url

                document.getElementById('exampleModalLabel').innerHTML = otsikkos;
                // document.getElementById('idis').innerHTML = id;
                document.getElementById('kuvauss').innerHTML = kuvauss;
                document.getElementById('milloins').innerHTML = milloins;
                // document.getElementById('otsikkos').innerHTML = otsikkos;
                // document.getElementById('timestamp').innerHTML = timestamp;
                document.getElementById('budjettis').innerHTML = budjettis;
                var a = document.getElementById('urls'); //or grab it by tagname etc
                a.href = url;
            }
            ajax.open("POST", "./ware/core.php", true);
            ajax.setRequestHeader("Content-Type", "application/json");
            ajax.send(JSON.stringify(thiss));
            [0]
        }

    }
