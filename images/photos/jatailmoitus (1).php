<?php 
    include_once('header.php');
    include "ware/pricetable.php";

?>


<section>
    <br>
    <br>
    <div class="container">
        <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-white pb-5">
                <h3 class="text-left mt-2">Jätä ilmoitus</h3>
                <form name="ilmoitus">
                <fieldset>
                    <div  class="div">
                        <span>Otsikko:</span>

                                <input id="sivu" name="sivu8" type="text" class="form-control" placeholder="" aria-label="Username"
                                    aria-describedby="basic-addon1" require>
                                    <br>
                    </div>
                    <span>Montako sivua:</span>

                    <select aria-label="Recipient's username" aria-describedby="basic-addon2" class="form-control"
                         name="sivu" id="sivu7" type="text">
                         
                        <option  value="100">1 sivu | One Page (alk. 100€)</option>
                        <option value="300">3-8 sivua | Basic (alk. 300€)</option>
                        <option value="800">+14 sivua | Multi (alk. 800€)</option>
                        <option value="700">Verkkokauppa | Json Mega (alk. 700€)</option>
                    </select> 
                    <span><input name="sivu1" id="sivu1" type="checkbox">  Graaffinen suunnittelu</span> <br><br>
                    <div style="justify-content: space-between;margin: auto;" class="row">
                        <div style="width: 48%;" class="div">
                            <span>Sisällöntuotanto sivumääräsi mukaan</span>
                            <select aria-label="Recipient's username" aria-describedby="basic-addon2" class="form-control"
                                 name="sivu2" id="sivu2" type="text" id="qty1">
                                <option>Minulla on jo sisältö</option>
                                <option value="100">1 sivu | One Page (alk. 100€)</option>
                                <option value="300">3-8 sivua | Basic (alk. 300€)</option>
                            </select>
                        </div>
                        <div style="width: 48%;" class="div">
                            <span>Logosuunnittelu</span>
                            <select aria-label="Recipient's username" aria-describedby="basic-addon2" class="form-control"
                                 name="sivu3" id="sivu3" type="text" id="qty1">
                                <option>En tarvitse logoa</option>
                                <option value="700">Logo | (alk. 700€)</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <span>Valitse budjetti</span>
                    <select aria-label="Recipient's username" aria-describedby="basic-addon2" class="form-control"
                         name="sivu4" id="sivu4" type="text" id="qty1">
                         <option value="Budjetti Ei tiedossa">Ei tiedossa</option>
                        <option value="100€">100€</option>
                        <option value="300€">300€</option>
                        <option value="400€">400€</option>
                        <option value="500€">500€</option>
                        <option value="1000€">1000€</option>
                        <option value="2000€+">2000€ +</option>



                    </select>
                    <br>
                    <span>Minua kiinnostaisi myös</span>
                    <br>
                    <span><input id="sivu5" name="sivu5" type="checkbox"> <b>Premium</b> Graaffinen suunnittelu</span> <br>
                    <span><input id="sivu6" name="sivu6" type="checkbox"> <b>Premium</b> Graaffinen suunnittelu</span> <br>
                    <br> 
                    <p>Yhteystiedot</p>
                    <div style="justify-content: space-between;margin: auto;" class="row">
                        <div style="width: 48%;" class="div">
                            <input id="sivu8" name="sivu8" type="text" class="form-control" placeholder="Nimi" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                        <div style="width: 48%;" class="div">
                            <input id="sivu9" name="sivu9" type="text" class="form-control" placeholder="Sähköposti" aria-label="Recipient's username"
                                aria-describedby="basic-addon2">
                        </div>
                    </div>
                    <div class="input-group mb-3">

                    </div>
                    <div class="input-group mb-3">

                    </div>

                    <label for="basic-url">Nykyinen verkkosivu</label>
                    <div class="input-group mb-3">
                        <input id="sivu10" name="sivu10" type="text" class="form-control" placeholder="url" aria-label="Recipient's username"
                            aria-describedby="basic-addon2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2">https://esimerkki.fi/</span>
                        </div>
                    </div>

                    <label for="basic-url">Kuvaus</label>
                    <div class="input-group">
                        <textarea id="sivu11" name="sivu11" class="form-control" aria-label="With textarea"></textarea>
                    </div>
                    <br>
                    <br>
                    <div style="margin:auto" class="row">
                        <button type="submit" style="position: relative; " class="btn btn-primary">Lähetä</button>
                        <span name="total" id="total"
                            style="font-size: 26px; color: ;margin-right: 60px; right: 0; position: absolute;">
                        </span>
                    </div>
                    </fieldset>

                </form>
            </div>
        </div>
    </div>
</section>




<script>
    document.forms['ilmoitus'].addEventListener('submit', uusiIlmoitus);
    console.log("lohl");

    function uusiIlmoitus(e){
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
        ajax.onload = function(){
            const data = JSON.parse(this.responseText);
            console.log("data")

            if (data.hasOwnProperty('onnistui')){
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
</script>








<?php 
        include_once('footer.php');
    ?>
