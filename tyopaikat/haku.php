<?php 
require 'header.php';
require '../ware/search.php'


?>
<?  


?>

<div id="triggar" class="container erikoinen">



    <br>
    <br>
    <br>
    <!-- 
    <div class="row">
        <div class="box">
         <form name="etsidusunia">
        <fieldset>
            <input id="citys" class="form-control rounded" list="kaupungit" placeholder="Kaupunki"
                type="text" />
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
        </div>
                                    <br>
                                    <br>
        <div class="box">
            <input id="ala" class="form-control" list="alat" placeholder="Hae työpaikkaa, yritystä tai alaa"
                type="text" />
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
        </div>
       
        <button type="submit" stlye="cursor:pointer" class="input-group-text border-0" id="search-addon">
            <i class="fas fa-search"></i>
        </button>

        </fieldset>

        </form> 
    </div>
 -->




    <div class="grid">

        <div class="row">
            <div class="kakskolme">
		<div class="mobilehaku">
                <div>
                    <span style="color:white">Hae: </span><input style="width: 70%; float:right" type="text"> 
                </div>
                    <hr>
                <div>
                    <span style="color:white">Sijainti: </span><input style="width: 70%; float:right" type="text">
                </div>
            </div>
	
                <div style="margin-top:20px" class="card bg-secondary shadow border-0">
                    <div class="card-header bg-white pb-2">
                        <h3 class="text-left mt-2">
                            <b><?php if (isset($citys) === false) {$citys = "";} echo $resultss[0]["count(*)"]; ?></b>
                            avointa työpaikkaa <?php echo ucfirst(str_replace("%", "", $citys)) ?></h3>
                        <div class="div">
                            <span>Etsitkö töitä Uudenmaan alueelta? Löysimme 9 410 avointa työpaikkaa Uudellamaalla.
                                Voit tarkentaa hakuasi toimialan tai taitojen mukaan.</span>
                        </div>
                        <br>
                    </div>
                </div>


                <!-- Pagination -->
                <section style="margin-bottom: -30px;margin-top: 5px;">
                    <nav style="overflow: auto;" aria-label="pagination">
                        <ul class="pagination">

                            <!-- <li class="page-item">
                                <a class="page-link" href='<?php 
                                
                                // if ($seuraava === "1") {echo "?page=1&ala=$ala&citys=$citys&category=$category&tyosuhde=$tyosuhde"; } else echo "?page=" . $seuraava - 1 . "&ala=$ala&haku=$haku&citys=$citys&category=$category&tyosuhde=$tyosuhde" ?>'>Edellinen
                                 </a>
                            </li> -->

                            <?php 
                                $ala = str_replace("%", "%20",$ala);
                                $haku = str_replace("%", "%20",$haku);
                                $citys = str_replace("%", "%20",$citys);
                                $category = str_replace("%", "",$category);
                                // $category = str_replace(" ", "%20",$citys);






                                // if ($total_pages > 15){
                                //     $total_pages = 15;
                                // }
                            
                                for ($page = 1; $page <= $total_pages ; $page++):
                                ?>
                                
                            <li class="page-item">
                                <a href='haku.php?page=<?php 
                                if ($page === 15) {
                                    echo "$page&ala=$ala&haku=$haku&citys=$citys&category=$category&tyosuhde=$tyosuhde";
                                    ;
                                } else {
                                    echo "$page&ala=$ala&haku=$haku&citys=$citys&category=$category&tyosuhde=$tyosuhde";
                                    } ?>'
                                    class="page-link"><?php  echo $page; ?></a>
                            </li>


                            <?php endfor; ?>

                            <!-- <li class="page-item">
                                <a class="page-link" href='
                                <?php 
                                // if ($seuraava === "1") {echo "?page=1&haku=$haku&ala=$ala&citys=$citys&category=$category&tyosuhde=$tyosuhde"; } else echo "?page=" . $seuraava + 1 . "&haku=$haku&citys=$citys&category=$category&tyosuhde=$tyosuhde" ?>
                                '>Seuraava
                                </a>
                            </li> -->

                        </ul>
                    </nav>
                </section>
                <!-- End Pagination -->
                <?php foreach ($searchresult as $key => $user): ?>

                <section>
                <div style="width:100%; margin-bottom: 20px; margin-top: 20px;"
                    class="card bg-secondary shadow border-0">
                    <div class="card-header bg-white pb-2">
                        <div style="margin-right: auto;" class="col-">
                            <b><a style="font-size:20px; color: #333;" class="post_title"
                                    href="posts.php?content=noindex.yet">
                                    <?PHP 
                                        $lil = $user["shortTitle"];
                                        $lol = substr($lil,0,90);
                                        $lol = str_replace("<br>", " ",$lol);
                                        $lol = str_replace("<br/>", " ",$lol);
                                        $lol = str_replace("<em>", " ",$lol);
                                        $lol = str_replace("</em>", " ",$lol);
                                        $lol = str_replace("<b>", " ",$lol);




                                        echo  $lol ?>
                                </a></b>
                            <br>
                            <span>
                                <?PHP echo $user["cityNames"] ?>
                            </span>
                            <span style="float: right">
                                <?PHP echo $user["visibleDateForOrdering"]; ?>
                            </span>
                        </div>
                        <hr style="margin-top: 1rem; margin-bottom: 1rem;">
                        <p class="post_content">
                            <?PHP if ($user["bodyText"]) 
                        $in = $user["bodyText"];
                        $inside = $user["id"];
                        $out   = strlen($in) > 70 ? substr($in,0,500)."... <a class='success' href='#' data-descid='${inside}' data-toggle='modal' data-target='#hintaModal' id='linkster'>Katso lisää<a><span id='magic' style='display: none;'>$in</span> " : $in;
                        $kleanout = str_replace("<p>", " ",$out);

                        $kleanerout = str_replace("</p>", " ",$kleanout);
                        $evenkleaner = str_replace("<br>", " ",$kleanerout);

                        $moreklean = substr($evenkleaner,0,350) . "...";
                        $moreklean = str_replace("<b>", " ",$moreklean);

                        echo $moreklean ?>
                        </p>
                        <hr>
                        <div>
                            <div style="justify-content: space-between; margin: auto;" class="row">
                                <span style="float:left;">
                                    <div class="d-flex flex-row fs-12">
                                        <div class="like p-2 cursor"><i class="fa fa-thumbs-up"></i><span
                                                style="font-size: 13px;" class="ml-1">Tykkää</span>
                                        </div>
                                        <div class="like p-2 cursor"><i class="fa fa-comment"></i><span
                                                style="font-size: 13px;" class="ml-1">Kommentoi</span>
                                        </div>
                                        <div class="like p-2 cursor"><i class="fa fa-share"></i><span
                                                style="font-size: 13px;" class="ml-1">Jaa</span>
                                        </div>
                                        <div class="like p-2 cursor"><i class="fa fa-heart"></i><span
                                                style="font-size: 13px;" class="ml-1">Suosikki</span>
                                        </div>
                                    </div>
                                </span>
                                <button data-descid="<?PHP echo $user["id"]; ?>" style="color:white;" class="btn
                                    btn-primari">Lue lisää</button>
                            </div>
                        </div>
                    </div>
                </div>


                </section>
                <?php endforeach; ?>


<section>
                <nav style="overflow: auto;" aria-label="pagination">
                        <ul class="pagination">
                            <!-- <li class="page-item">
                                <a class="page-link" href='<?php 
                                // if ($seuraava === "1") {echo "?page=1&ala=$ala&citys=$citys&category=$category&tyosuhde=$tyosuhde"; } else echo "?page=" . $seuraava - 1 . "&ala=$ala&citys=$citys&category=$category&tyosuhde=$tyosuhde" 
                                ?>'>Edellinen
                                </a>
                            </li> -->

                            <?php 
                                // if ($total_pages > 15){
                                //     $total_pages = 15;
                                // }
                            
                                for ($page = 1; $page <= $total_pages ; $page++):
                                ?>
                                
                            <li class="page-item">
                                <a href=' <?php 
                                if ($page === 15) {
                                    echo "?page=$page&ala=$ala&citys=$citys&category=$category&tyosuhde=$tyosuhde";
                                    ;
                                } else {
                                    echo "?page=$page&ala=$ala&citys=$citys&category=$category&tyosuhde=$tyosuhde";
                                    } ?>'
                                    class="page-link"><?php  echo $page; ?></a>
                            </li>


                            <?php endfor; ?>
<!-- 
                            <li class="page-item">
                                <a class="page-link" href='<?php
                                //  if ($seuraava === "1") {echo "?page=1&ala=$ala&citys=$citys&category=$category&tyosuhde=$tyosuhde"; } else echo "?page=" . $seuraava + 1 . "&ala=$ala&citys=$citys&category=$category&tyosuhde=$tyosuhde" 
                                 ?>'>Seuraava
                                </a>
                            </li> -->

                        </ul>
                    </nav>
            </div>
        
    </section>

            <div class="ykskolme">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-white pb-2">
                        <h3 class="text-left mt-2">Hakutulokset</h3>
                        <form name="etsiduunia">
                            <fieldset>
                                <div class="div">
                                    <b><span>Rajaa hakua</span></b>
                                    <br><br>
                                </div>
                                <div class="div">
                                    <span>Hakusana:</span>
                                    <br>
                                    <input id="hakusana" class="form-control rounded" list="haku"
                                        placeholder="Hae, työpaikkaa, yritystä, titteliä" type="text" />

                                </div>
                                <div class="div">
                                    <span>Sijainti</span>
                                    <br>
                                    <input id="citys" class="form-control rounded" list="kaupungit"
                                        placeholder="Kaupunki" type="text" />
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
                                </div>


                                <br>
                                <button class="btn btn-primary">Hae</button>
                            </fieldset>
                        </form>
                    </div>
                </div>

                <div style="margin-top:20px" class="card bg-secondary shadow border-0">
                    <div class="card-header bg-white pb-2">

                        <h3 class="text-left mt-2">Tehtäväalue</h3>
                        <div class="div">
                            <span>Työtehtävä:</span>
                            <br>
                            <input id="ala" class="form-control" list="alat" placeholder="Valitse..." type="text" />
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
                                <option>Kaupan ala Rakennus- ja kiinteistöteollisuus Logistiikka- ja kuljetusala
                                </option>
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
                                <option>Rakennus- ja kiinteistöteollisuus Logistiikka- ja kuljetusala Teollisuus
                                </option>
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
                                <option>Tietoliikenne Rakennus- ja kiinteistöteollisuus Logistiikka- ja kuljetusala
                                </option>
                                <option>Toimisto</option>
                                <option>Toimisto Informaatioteknologia Tietoliikenne</option>
                                <option>Toimisto Rakennus- ja kiinteistöteollisuus Teollisuus</option>
                                <option>Toimisto Ravintola- ja hotelliala Kaupan ala</option>
                                <option>Toimisto Teollisuus</option>haku
                                <option>Toimisto Tietoliikenne</option>
                                <option>Toimisto Turvallisuusala</option>
                                <option>Turvallisuusala Kaupan al</option>
                                <option>Turvallisuusala Rakennus- ja kiinteistöteollisuus Teollisuus</option>
                            </datalist>
                        </div>
                        <div class="div">
                            <span>Työsuhde</span>
                            <br>
                            <input id="tyosuhde" class="form-control rounded" list="tyosuhteet" placeholder="Valitse..."
                                type="text" />
                            <datalist id="tyosuhteet">
                                <option value="Vakituinen">Vakituinen</option>
                                <option value="Määräaikainen">Määräaikainen</option>
                                <option value="Kokopäiväinen">Kokopäiväinen</option>
                                <option value="Osa-aikainen">Osa-aikainen</option>
                                <option value="Tuntityö">Tuntityö</option>
                                <option value="Kesätyö">Kesätyö</option>
                                <option value="Harjoittelu">Harjoittelu</option>
                            </datalist>
                        </div>
                        <div class="div">
                            <li><a href="haku.php?category=Toimisto%"><span>Toimisto </span><span id="adds"></span></a>
                            </li>
                            <li><a href="haku.php?category=Kaupan%20ala"><span>Kaupan ala </span><span id="a"></span></a>
                            </li>
                            <li><a href="haku.php?category=Varasto%20"><span>Varasto </span><span id="b"></span></a></li>
                            <li><a href="haku.php?category=Valmennus%20ja%20Koulutus"><span>Valmennus ja
                                        Koulutus </span><span id="c"></span></a></li>
                            <li><a href="haku.php?category=Logistiikka-%20ja%20kuljetusala"><span>Logistiikka- ja
                                        kuljetusala </span><span id="d"></span></a></li>
                            <li><a href="haku.php?category=Turvallisuusala%20"><span>Turvallisuusala </span><span
                                        id="e"></span></a></li>
                            <li><a href="haku.php?category=Rakennus-%20ja%20kiinteistöteollisuus"><span>Rakennus- ja
                                        kiinteistöteollisuus </span><span id="f"></span></a></li>
                            <li><a href="haku.php?category=Tietoliikenne%20"><span>Tietoliikenne </span><span
                                        id="g"></span></a></li>
                            <li><a href="haku.php?category=Informaatioteknologia%20%20"><span>Informaatioteknologia
                                         </span><span id="h"></span></a></li>
                            <li><a href="haku.php?category=Ravintola- ja hotelliala"><span>Ravintola- ja
                                        hotelliala </span><span id="i"></span></a></li>
                            <li><a href="haku.php?category=Teollisuus%20"><span>Teollisuus </span><span id="j"></span></a>
                            </li>
                            <li><a href="haku.php?category=Hoitoala%20"><span>Hoitoala </span><span id="k"></span></a>
                            </li>
                            <li><a href="haku.php?category=Myynti%20"><span>Myynti </span><span id="l"></span></a></li>
                            <li><a href="haku.php?category=Sosiaalityö%20"><span>Sosiaalityö </span><span
                                        id="m"></span></a></li>
                            <li><a href="haku.php?category=Tekniikka%20"><span>Tekniikka </span><span id="n"></span></a>
                            </li>
                            <li><a href="haku.php?category=Tuotanto%20"><span>Tuotanto </span><span id="o"></span></a>
                            </li>
                            <li><a href="haku.php?category=IT%20"><span>IT </span><span id="p"></span></a></li>
                            <li><a href="haku.php?category=Asiakaspalvelu%20"><span>Asiakaspalvelu </span><span
                                        id="q"></span></a></li>
                            <li><a href="haku.php?category=Ohjelmistokehitys%20"><span>Ohjelmistokehitys </span><span
                                        id="r"></span></a></li>
                            <li><a href="haku.php?category=Johto%20"><span>Johto </span><span id="s"></span></a></li>
                            <li><a href="haku.php?category=Talous%20ja%20rahoitus%20"><span>Talous ja rahoitus </span><span
                                        id="t"></span></a></li>
                            <li><a href="haku.php?category=Vähittäis-%20ja%20tukkukauppa%20"><span>Vähittäis- ja
                                        tukkukauppa </span><span id="u"></span></a></li>
                            <li><a href="haku.php?category=Muu%20tehtäväalue%20"><span>Muu tehtäväalue </span><span
                                        id="v"></span></a></li>
                            <li><a href="haku.php?category=Markkinointi%20ja%20viestintä%20"><span>Markkinointi ja
                                        viestintä </span><span id="w"></span></a></li>


                        </div>



                        <br>
                    </div>
                </div>

                <div style="margin-top:20px" class="card bg-secondary shadow border-0">
                    <div class="card-header bg-white pb-2">
                        <h3 class="text-left mt-2">Työsuhteen muoto</h3>
                        <div class="div">
                            <li><a href="haku.php?ala=%20Vakituinen%20"><span>Vakituinen </span><span id="x"></span></a>
                            </li>
                            <li><a href="haku.php?ala=%20Määräaikainen%20"><span>Määräaikainen </span><span
                                        id="y"></span></a></li>
                            <li><a href="haku.php?ala=%20Kokopäiväinen%20"><span>Kokopäiväinen </span><span
                                        id="z"></span></a></li>
                            <li><a href="haku.php?ala=%20Osa-aikainen%20"><span>Osa-aikainen </span><span
                                        id="aa"></span></a></li>
                            <li><a href="haku.php?ala=%20Tuntityö%20"><span>Tuntityö </span><span id="bb"></span></a></li>
                            <li><a href="haku.php?ala=%20Kesätyö%20"><span>Kesätyö </span><span id="cc"></span></a></li>
                            <li><a href="haku.php?ala=%20Harjoittelu%20"><span>Harjoittelu </span><span id="dd"></span></a>
                            </li>

                        </div>
                        <br>
                    </div>
                </div>

                <div style="margin-top:20px" class="card bg-secondary shadow border-0">
                    <div class="card-header bg-white pb-2">
                        <h3 class="text-left mt-2">Sijainti</h3>
                        <div class="div">
                            <li><a href="haku.php?citys=%20Pirkanmaa%20"><span>Pirkanmaa </span><span id="ee"></span></a>
                            </li>
                            <li><a href="haku.php?citys=%20Alajärvi%20"><span>Alajärvi </span><span id="ff"></span></a></li>
                            <li><a href="haku.php?citys=%20Etelä-Pohjanmaa%20"><span>Etelä-Pohjanmaa </span><span
                                        id="gg"></span></a></li>
                            <li><a href="haku.php?citys=%20Uusimaa%20"><span>Uusimaa </span><span id="hh"></span></a></li>
                            <li><a href="haku.php?citys=%20Varsinais-Suomi%20"><span>Varsinais-Suomi </span><span
                                        id="ii"></span></a></li>
                            <li><a href="haku.php?citys=%20Satakunta%20"><span>Satakunta </span><span id="jj"></span></a>
                            </li>
                            <li><a href="haku.php?citys=%20Päijät-Häme%20"><span>Päijät-Häme </span><span
                                        id="kk"></span></a></li>
                            <li><a href="haku.php?citys=%20Pohjois-Savo%20"><span>Pohjois-Savo </span><span
                                        id="ll"></span></a></li>
                            <li><a href="haku.php?citys=%20Pohjois-Pohjanmaa%20"><span>Pohjois-Pohjanmaa </span><span
                                        id="mm"></span></a></li>
                            <li><a href="haku.php?citys=%20Pohjois-Karjala%20"><span>Pohjois-Karjala </span><span
                                        id="nn"></span></a></li>
                            <li><a href="haku.php?citys=%20Pohjanmaa%20"><span>Pohjanmaa </span><span id="oo"></span></a>
                            </li>
                            <li><a href="haku.php?citys=%20Pirkanmaa%20"><span>Pirkanmaa </span><span id="pp"></span></a>
                            </li>
                            <li><a href="haku.php?citys=%20Lappi%20"><span>Lappi </span><span id="qq"></span></a></li>
                            <li><a href="haku.php?citys=%20Kymenlaakso%20"><span>Kymenlaakso </span><span
                                        id="rr"></span></a></li>
                            <li><a href="haku.php?citys=%20Keski-Suomi%20"><span>Keski-Suomi </span><span
                                        id="ss"></span></a></li>
                            <li><a href="haku.php?citys=%20Keski-Pohjanmaa%20"><span>Keski-Pohjanmaa </span><span
                                        id="tt"></span></a></li>
                            <li><a href="haku.php?citys=%20Kanta-Häme%20"><span>Kanta-Häme </span><span id="uy"></span></a>
                            </li>
                            <li><a href="haku.php?citys=%20Kainuu%20"><span>Kainuu </span><span id="vv"></span></a></li>
                            <li><a href="haku.php?citys=%20Etelä-Savo%20"><span>Etelä-Savo </span><span id="ww"></span></a>
                            </li>
                            <li><a href="haku.php?citys=%20Etelä-Pohjanmaa%20"><span>Etelä-Pohjanmaa </span><span
                                        id="xx"></span></a></li>
                            <li><a href="haku.php?citys=%20Etelä-Karjala%20"><span>Etelä-Karjala </span><span
                                        id="yy"></span></a></li>
                            <li><a href="haku.php?citys=%20Ahvenanmaa%20"><span>Ahvenanmaa </span><span id="zz"></span></a>
                            </li>
                        </div>
                        <br>
                    </div>
                </div>
                <div style="margin-top:20px" class="card bg-secondary shadow border-0">
                    <div class="card-header bg-white pb-2">
                        <h3 class="text-left mt-2">Yritys</h3>
                        <div class="div">
                            <b><a>Rajaa hakua</a></b>
                        </div>
                        <br>
                    </div>
                </div>







            </div>
        </div>



        <!-- Modal -->
        <div class="modal fade" id="Modaliii" tabindex="-1" role="dialog" aria-labelledby="Modaliii" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button onclick="closethissh()" type="button" class="close" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="php">
                            <!-- <p id="idis"></p> -->
                            <p id="kuvauss"></p>
                            <p id="url"></p>
                            <span>Milloin Jätetty: <span id="milloins"></span></span>
                            <br>
                            <span id="budjettis"></span>
                        </form>
                    </div>
                    <div class="modal-footer"><b>
                            <a onclick="closethissh()" type="button" data-dismiss="modal">Sulje</a></b>
                        <a id="urls" style="color: white" class="btn btn-primari">Ota Yhteyttä</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="haetut"></div>

        <script src="../js/gets.js"></script>


        <script src="../js/dis.js"></script>

        </div>
        <?php 
        include_once('footer.php');
    ?>



        <!-- <script src="../js/important.js"></script> -->