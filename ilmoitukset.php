<?php 
    include_once('header.php');

?>


<div id="trigga" class="container erikoinen">

    <?php
    // Database connection
    include_once 'ware/DatabaseConnection.php';
    $database = new DatabaseConnection();
    $db = $database->openConnection();

    $perPage = 10;

    // Calculate Total pages
    $stmt = $db->query('SELECT count(*) FROM dbdata');
    $total_results = $stmt->fetchColumn();
    $total_pages = ceil($total_results / $perPage);

    // Current page
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $starting_limit = ($page - 1) * $perPage;

    $seuraava = $page;

    // Query to fetch users
    $query = "SELECT * FROM dbdata ORDER BY id DESC LIMIT $starting_limit,$perPage";

    // Fetch all users for current page
    $db->query("SET CHARACTER SET utf8");
    $users = $db->query($query)->fetchAll();



?>

<section>
    <br>
    <br>
    <nav style="overflow: auto;" aria-label="pagination">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href='?page=<?php 
            
            if ($seuraava === "1") {
                echo "1"; 

            } else
            echo $seuraava - 1; 
            
            ?>'>Edellinen</a></li>
            <?php for ($page = 1; $page <= $total_pages ; $page++):?>
            <li class="page-item">
                <a href=' <?php echo "?page=$page"; ?>' class="page-link"><?php  echo $page; ?></a>
            </li>
            <?php endfor; ?>
            <li class="page-item"><a class="page-link" href='?page=<?php echo $seuraava + 1; ?>'>Seuraava</a></li>
        </ul>
    </nav>
</section>


<section>
    <?php foreach ($users as $key => $user): ?>
    <div style="margin-bottom: 20px; margin-top: 20px;" class="card bg-secondary shadow border-0">
        <div class="card-header bg-white pb-2">
            <div style="margin-right: auto;" class="col-">
                <b><a style="font-size:20px; color: #333;" class="post_title" href="posts.php?content=noindex.yet">
                        <?PHP echo $user["otsikkos"] ?>
                    </a></b>
                <br>
                <span>
                    <?PHP echo $user["budjettis"] ?>
                </span>
                <span style="float: right">
                    <?PHP echo $user["milloins"]; ?>
                </span>
            </div>
            <hr style="margin-top: 1rem; margin-bottom: 1rem;">
            <p class="post_content">
                <?PHP if ($user["kuvauss"]) 
                    $in = $user["kuvauss"];
                    $inside = $user["id"];
                    $out   = strlen($in) > 70 ? substr($in,0,500)."... <a class='success' href='#' data-descid='${inside}' data-toggle='modal' data-target='#hintaModal' id='linkster'>Katso lisää<a><span id='magic' style='display: none;'>$in</span> " : $in;
                    echo $out; 
                ?>
            </p>
            <hr>
            <div>
                <div class="bg-white">
                </div>
                <div style="justify-content: space-between; margin: auto;" class="row">
                    <span style="float:left;">
                        <div class="d-flex flex-row fs-12">
                            <div class="like p-2 cursor"><i class="fa fa-thumbs-up"></i><span
                                    style="font-size: 13px;" class="ml-1">Tykkää</span>
                            </div>
                            <div class="like p-2 cursor"><i class="fa fa-comment"></i><span style="font-size: 13px;"
                                    class="ml-1">Kommentoi</span>
                            </div>
                            <div class="like p-2 cursor"><i class="fa fa-share"></i><span style="font-size: 13px;"
                                    class="ml-1">Jaa</span>
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


<section>
    <?php endforeach; ?>
    <nav style="overflow: auto;" aria-label="pagination">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href='?page=<?php            
            if ($seuraava === "1") {
                echo "1";
            } else
            echo $seuraava - 1; 

            ?>'>Edellinen</a></li>
            <?php for ($page = 1; $page <= $total_pages ; $page++):?>
            <li class="page-item">
                <a href=' <?php echo "?page=$page"; ?>' class="page-link"><?php  echo $page; ?></a>
            </li>
            <?php endfor; ?>
            <li class="page-item"><a class="page-link" href='?page=<?php echo $seuraava + 1; ?>'>Seuraava</a></li>
        </ul>
    </nav>
</section>

<section>
    <br>
    <br>
    <div class="card bg-secondary shadow border-0">
        <div class="card-header bg-white pb-2">
            <h3 class="text-left mt-2">Jätä ilmoitus</h3>
            <form name="ilmoitus">
                <fieldset>
                    <div class="div">
                        <span>Otsikko:</span>

                        <input id="sivu" name="sivu8" type="text" class="form-control" placeholder=""
                            aria-label="Username" aria-describedby="basic-addon1" require>
                        <br>
                    </div>
                    <span>Montako sivua:</span>

                    <select aria-label="Recipient's username" aria-describedby="basic-addon2" class="form-control"
                        name="sivu" id="sivu7" type="text">

                        <option value="100">1 sivu | One Page (alk. 100€)</option>
                        <option value="300">3-8 sivua | Basic (alk. 300€)</option>
                        <option value="800">+14 sivua | Multi (alk. 800€)</option>
                        <option value="700">Verkkokauppa | Json Mega (alk. 700€)</option>
                    </select>
                    <span><input name="sivu1" id="sivu1" type="checkbox"> Graaffinen suunnittelu</span> <br><br>
                    
                    <div style="justify-content: space-between;margin: auto;" class="row">
                        <div class="box">
                            <span>Sisällöntuotanto sivumääräsi mukaan</span>
                            <select aria-label="Recipient's username" aria-describedby="basic-addon2"
                                class="form-control" name="sivu2" id="sivu2" type="text" id="qty1">
                                <option>Minulla on jo sisältö</option>
                                <option value="100">1 sivu | One Page (alk. 100€)</option>
                                <option value="300">3-8 sivua | Basic (alk. 300€)</option>
                            </select>
                        </div>
                        <div class="box">
                            <span>Logosuunnittelu</span>
                            <select aria-label="Recipient's username" aria-describedby="basic-addon2"
                                class="form-control" name="sivu3" id="sivu3" type="text" id="qty1">
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
                    <span><input id="sivu5" name="sivu5" type="checkbox"> <b>Premium</b> Graaffinen
                        suunnittelu</span> <br>
                    <span><input id="sivu6" name="sivu6" type="checkbox"> <b>Premium</b> Graaffinen
                        suunnittelu</span> <br>
                    <br>
                    <p>Yhteystiedot</p>
                    <div style="justify-content: space-between;margin: auto;" class="row">
                        <div class="box">
                            <input id="sivu8" name="sivu8" type="text" class="form-control" placeholder="Nimi"
                                aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <br>
                        <br>
                        <div class="box">
                            <input id="sivu9" name="sivu9" type="text" class="form-control" placeholder="Sähköposti"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                    </div>
                    <div class="input-group mb-3">

                    </div>
                    <div class="input-group mb-3">

                    </div>

                    <label for="basic-url">Nykyinen verkkosivu</label>
                    <div class="input-group mb-3">
                        <input id="sivu10" name="sivu10" type="text" class="form-control" placeholder="url"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2">https://esimerkki.fi/</span>
                        </div>
                    </div>

                    <label for="basic-url">Kuvaus</label>
                    <div class="input-group">
                        <textarea id="sivu11" name="sivu11" class="form-control"
                            aria-label="With textarea"></textarea>
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
</section>

    <!-- Modal -->
    <div class="modal fade" id="Modaliii" tabindex="-1" role="dialog" aria-labelledby="Modaliii" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button onclick="closethissh()" type="button" class="close" data-dismiss="modal" aria-label="Close">
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

<script src="js/important.js"></script>

    <?php 
        include_once('footer.php');
    ?>