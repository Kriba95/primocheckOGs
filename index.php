<?php 
    include_once('header.php');

 
    // // Database connection
    // include_once 'ware/DatabaseConnection.php';
    // $database = new DatabaseConnection();
    // $db = $database->openConnection();

    // $perPage = 10;

    // // Calculate Total pages
    // $stmt = $db->query('SELECT count(*) FROM spdata');
    // $total_results = $stmt->fetchColumn();
    // $total_pages = ceil($total_results / $perPage);

  
    // $users = $db->query($query)->fetchAll();



?>




<section class="section section-lg section-shaped">
    <div class="shape shape-style-1 shape-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>

    </div>
    <div class="container py-md">
        <div class="row row-grid justify-content-between align-items-center">
            <div class="col-lg-6">
                <h3 class="dislay-3 text-white">Etsi työpaikkoja<span
                        class="text-white"></span></h3>
                <p class="lead text-white">Primocheck auttaa sinua löytämään uusia mahdollisuuksia – ehkäpä sellaisiakin, joita et itse olisi tullut ajatelleeksi?
Aloita etsimällä kiinnostavia työpaikkoja hakusanojen tai sijainnin perusteella. 
                </p>
                <!-- <div class="btn-wrapper">
                    <a href="./hintalaskuri/" class="btn btn-white">Lähetä tarjouspyyntö</a>
                    <a href="./hinnasto/" class="btn btn-white">Katso lisää</a>

                </div> -->
            </div>
            <div class="col-lg-5 mb-lg-auto">

                <div class="bg">
                    <div class=" pb-5">

                        <div class=" px-lg-5 py-lg-5">

                            <div style="display: none;" id="errorViesti" class="alert alert-danger" role="alert">
                                <div class="error">

                                </div>
                            </div>


                        </div>


                        <form name="etsiduunia" >
                        <fieldset>

                            <p style="color:white">Sijainti</p>

                            <input id="citys" class="form-control" list="kaupungit" placeholder="Kaupunki" type="text" />
                                <datalist id="kaupungit">
                                    <option value="Akaa">Akaa</option>
                                    <option value="Alajärvi">Alajärvi</option>
                                    <option value="Alavus">Alavus</option>
                                    <option value="Espoo">Espoo</option>
                                    <option value="Forssa">Forssa</option>
                                    <option value="Haapajärvi">Haapajärvi</option>
                                    <option value="Haapavesi">Haapavesi</option>
                                    <option value="Hamina">Hamina</option>
                                    <option value="Hanko">Hanko</option>
                                    <option value="Harjavalta">Harjavalta</option>
                                    <option value="Heinola">Heinola</option>
                                    <option value="Helsinki">Helsinki</option>
                                    <option value="Huittinen">Huittinen</option>
                                    <option value="Hyvinkää">Hyvinkää</option>
                                    <option value="Hämeenlinna">Hämeenlinna</option>
                                    <option value="Iisalmi">Iisalmi</option>
                                    <option value="Ikaalinen">Ikaalinen</option>
                                    <option value="Imatra">Imatra</option>
                                    <option value="Pietarsaari">Pietarsaari</option>
                                    <option value="Joensuu">Joensuu</option>
                                    <option value="Jyväskylä">Jyväskylä</option>
                                    <option value="Jämsä">Jämsä</option>
                                    <option value="Järvenpää">Järvenpää</option>
                                    <option value="Kaarina">Kaarina</option>
                                    <option value="Kajaani">Kajaani</option>
                                    <option value="Kalajoki">Kalajoki</option>
                                    <option value="Kangasala">Kangasala</option>
                                    <option value="Kankaanpää">Kankaanpää</option>
                                    <option value="Kannus">Kannus</option>
                                    <option value="Karkkila">Karkkila</option>
                                    <option value="Kaskinen">Kaskinen</option>
                                    <option value="Kauhajoki">Kauhajoki</option>
                                    <option value="Kauhava">Kauhava</option>
                                    <option value="Kauniainen">Kauniainen</option>
                                    <option value="Kemi">Kemi</option>
                                    <option value="Kemijärvi">Kemijärvi</option>
                                    <option value="Kerava">Kerava</option>
                                    <option value="Keuruu">Keuruu</option>
                                    <option value="Kitee">Kitee</option>
                                    <option value="Kiuruvesi">Kiuruvesi</option>
                                    <option value="Kokemäki">Kokemäki</option>
                                    <option value="Kokkola">Kokkola</option>
                                    <option value="Kotka">Kotka</option>
                                    <option value="Kouvola">Kouvola</option>
                                    <option value="Kristiinankaupunki">Kristiinankaupunki</option>
                                    <option value="Kuhmo">Kuhmo</option>
                                    <option value="Kuopio">Kuopio</option>
                                    <option value="Kurikka">Kurikka</option>
                                    <option value="Kuusamo">Kuusamo</option>
                                    <option value="Lahti">Lahti</option>
                                    <option value="Laitila">Laitila</option>
                                    <option value="Lappeenranta">Lappeenranta</option>
                                    <option value="Lapua">Lapua</option>
                                    <option value="Lieksa">Lieksa</option>
                                    <option value="Lohja">Lohja</option>
                                    <option value="Loimaa">Loimaa</option>
                                    <option value="Loviisa">Loviisa</option>
                                    <option value="Maarianhamina">Maarianhamina</option>
                                    <option value="Mikkeli">Mikkeli</option>
                                    <option value="Mänttä">Mänttä-Vilppula</option>
                                    <option value="Naantali">Naantali</option>
                                    <option value="Nivala">Nivala</option>
                                    <option value="Nokia">Nokia</option>
                                    <option value="Nurmes">Nurmes</option>
                                    <option value="Uusikaarlepyy">Uusikaarlepyy</option>
                                    <option value="Närpiö">Närpiö</option>
                                    <option value="Orimattila">Orimattila</option>
                                    <option value="Orivesi">Orivesi</option>
                                    <option value="Oulainen">Oulainen</option>
                                    <option value="Oulu">Oulu</option>
                                    <option value="Outokumpu">Outokumpu</option>
                                    <option value="Paimio">Paimio</option>
                                    <option value="Parainen">Parainen</option>
                                    <option value="Parkano">Parkano</option>
                                    <option value="Pieksämäki">Pieksämäki</option>
                                    <option value="Pori">Pori</option>
                                    <option value="Porvoo">Porvoo</option>
                                    <option value="Pudasjärvi">Pudasjärvi</option>
                                    <option value="Pyhäjärvi">Pyhäjärvi</option>
                                    <option value="Raahe">Raahe</option>
                                    <option value="Raasepori">Raasepori</option>
                                    <option value="Raisio">Raisio</option>
                                    <option value="Rauma">Rauma</option>
                                    <option value="Riihimäki">Riihimäki</option>
                                    <option value="Rovaniemi">Rovaniemi</option>
                                    <option value="Saarijärvi">Saarijärvi</option>
                                    <option value="Salo">Salo</option>
                                    <option value="Sastamala">Sastamala</option>
                                    <option value="Savonlinna">Savonlinna</option>
                                    <option value="Seinäjoki">Seinäjoki</option>
                                    <option value="Somero">Somero</option>
                                    <option value="Suonenjoki">Suonenjoki</option>
                                    <option value="Tampere">Tampere</option>
                                    <option value="Tornio">Tornio</option>
                                    <option value="Turku">Turku</option>
                                    <option value="Ulvila">Ulvila</option>
                                    <option value="Uusikaupunki">Uusikaupunki</option>
                                    <option value="Vaasa">Vaasa</option>
                                    <option value="Valkeakoski">Valkeakoski</option>
                                    <option value="Vantaa">Vantaa</option>
                                    <option value="Varkaus">Varkaus</option>
                                    <option value="Viitasaari">Viitasaari</option>
                                    <option value="Virrat">Virrat</option>
                                    <option value="Ylivieska">Ylivieska</option>
                                    <option value="Ylöjärvi">Ylöjärvi</option>
                                    <option value="Ähtäri">Ähtäri</option>
                                    <option value="Äänekoski">Äänekoski</option>
                                </datalist>
                                
                            <p style="color:white">Hae työpaikkaa, yritystä tai alaa</p>
                            
                            <input  id="ala"  class="form-control" list="alat" placeholder="Tehtävä" type="text" />
                                <datalist id="alat">
                                    <option>Executive- ja avainhenkilötaso Teollisuus</option>
                                    <option>Hoitoala</option>
                                    <option>Informaatioteknologia</option>
                                    <option>Informaatioteknologia Kaupan ala Toimisto</option>
                                    <option>Informaatioteknologia Toimisto</option>
                                    <option>Kaupan ala</option>
                                    <option>Kaupan ala Informaatioteknologia Tietoliikenne</option>
                                    <option>Kaupan ala Informaatioteknologia Toimisto</option>
                                    <option>Kaupan ala Rakennus- ja kiinteistöteollisuus</option>
                                    <option>Kaupan ala Rakennus- ja kiinteistöteollisuus Logistiikka- ja kuljetusala</option>
                                    <option>Kaupan ala Ravintola- ja hotelliala</option>
                                    <option>Kaupan ala Ravintola- ja hotelliala Toimisto</option>
                                    <option>Kaupan ala Teollisuus</option>
                                    <option>Kaupan ala Toimisto</option>
                                    <option>Kaupan ala Turvallisuusala</option>
                                    <option>Logistiikka- ja kuljetusala</option>
                                    <option>Logistiikka- ja kuljetusala Kaupan ala</option>
                                    <option>Logistiikka- ja kuljetusala Rakennus- ja kiinteistöteollisuus </option>
                                    <option>Logistiikka- ja kuljetusala Ravintola- ja hotelliala</option>
                                    <option>Logistiikka- ja kuljetusala Teollisuus</option>
                                    <option>Rakennus- ja kiinteistöteollisuus</option>
                                    <option>Rakennus- ja kiinteistöteollisuus Kaupan ala</option>
                                    <option>Rakennus- ja kiinteistöteollisuus Logistiikka- ja kuljetusala</option>
                                    <option>Rakennus- ja kiinteistöteollisuus Logistiikka- ja kuljetusala Teollisuus</option>
                                    <option>Rakennus- ja kiinteistöteollisuus Teollisuus</option>
                                    <option>Ravintola- ja hotelliala</option>
                                    <option>Ravintola- ja hotelliala Kaupan ala</option>
                                    <option>Ravintola- ja hotelliala Logistiikka- ja kuljetusala Teollisuus</option>
                                    <option>Ravintola- ja hotelliala Toimisto Turvallisuusala</option>
                                    <option>Teollisuus</option>
                                    <option>Teollisuus Informaatioteknologia</option>
                                    <option>Teollisuus Logistiikka- ja kuljetusala</option>
                                    <option>Teollisuus Rakennus- ja kiinteistöteollisuus</option>
                                    <option>Teollisuus Rakennus- ja kiinteistöteollisuus Turvallisuusala</option>
                                    <option>Teollisuus Toimisto</option>
                                    <option>Tietoliikenne Rakennus- ja kiinteistöteollisuus Logistiikka- ja kuljetusala</option>
                                    <option>Toimisto</option>
                                    <option>Toimisto Informaatioteknologia Tietoliikenne</option>
                                    <option>Toimisto Rakennus- ja kiinteistöteollisuus Teollisuus</option>
                                    <option>Toimisto Ravintola- ja hotelliala Kaupan ala</option>
                                    <option>Toimisto Teollisuus</option>
                                    <option>Toimisto Tietoliikenne</option>
                                    <option>Toimisto Turvallisuusala</option>
                                    <option>Turvallisuusala Kaupan al</option>
                                    <option>Turvallisuusala Rakennus- ja kiinteistöteollisuus Teollisuus</option>
                                </datalist>

                            <div class="">
                                <br>
                                <!-- <input class="custom-control-input" id="customCheckLogin2" type="checkbox" /> -->
                                <!-- <label class="custom-control-label" for="customCheckLogin2"><span>Remember me</span></label> -->
                                <button type="submit" style="position: relative; magin-left:20px" class="btn btn-primary">Lähetä</button>
                                
                            </div>
                            </fieldset>

                        </form>

            </div>
        </div>
    </div>
    </div>
    </div>








</section>




<section>
<div class="container">
<iframe style="width:100%; height:1080px" src="https://primocheck.site/tyopaikat/forbody.php?citys=Helsinki" title="primo-search"></iframe>

</div>

</section>







<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="php">
                    <table>
                        <tr>
                            <td>Nimis</td>
                            <td><input id="getNimi" name="nimi" type="text"></input> </td>

                        </tr>
                        <tr>
                            <td>Sähköposti</td>
                            <td><input id="getSposti" type="text"></input></td>
                        </tr>
                        <tr>
                            <td>Salasana</td>
                            <td><input id="getPassword" type="text"></input></td>
                        </tr>
                        <tr>
                            <td>Salasana uudelleen</td>
                            <td><input id="getSpassword" type="text"></input></td>
                        </tr>

                    </table>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button onclick="regista()" type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script src="js/search.js"></script>



<?php 
        include_once('footer.php');
    ?>