
# primocheckOGs
primocheck.site On työpaikka hakukone, joka hakee dataa automaattisesti TE-toimiston sivuilta. 

Sovellus verkkosivut ovat lähes tulkoon puhdasta PHP koodia, koska huomasin että Hakukoneet (Google) ei lue scriptejä, (tai ehkä jopa lukeekin mutta riippuu onko verkkosivut äskettäin luotu) joten näkyvyys heikkenee.

Jos sovellus on PHP koodia hakukoneet pystyy helpommin lukea sisältöä ja näin saa paremman näkyvyyden. 



Tiedon keruu onnistuu Python koodin avulla. Koska Te toimiston sivut ovat luultavasti tehty käyttäen ReactJS, niin BeatifulSoup lib ei pääse lukemaan sitä, joten käytin Selenium Lib, Eli python avaa  Chromen Automaatio tilaan ja näin se pääsee lukemaan Javascript sisältöä. 

Datankeruun jälkeen Python automaatisesti avaa SSH yhteyden MYSQL tietokantaan ja lisää sisällön sinne automaattisesti. Ja näin käyttäjän ei tarvitse tehdä yhtään mitään. 

Python koodini tekee muutakin kun hakee dataa, Se myös tunnistaa Suomen kaupungit ja lisää ne Maakunnittain, esim jos työpaikka ilmoitus/mainos sijaitsee Mikkelissä, Python lisää makunnakksi Etelä-savo, hyvin hyvin yksinkertaisesti, 

            if(city_names == "Mikkeli"):
                area_name = "Etelä-Savo" 
näin,  Käytin Wikipedian https://fi.wikipedia.org/wiki/Luettelo_Suomen_kaupungeista Luettola, ja liitin kaupungit Exceliin.
vähän niinkuin näin  if(city_names == " ????? "):%%%&&& area_name = " ?????? "
Seuraavaksi hyödynsin Notepad++ ja korvasin %%% merkit /n ja /r näin koodi muuttui =
if(city_names == "Mikkeli"
&&&area_name = "Etelä-Savo"

Seuraavaksi &&& merkit muutin "tabiksi" ja koodi lopulta muuttui 
if(city_names == "Mikkeli"):
           area_name = "Etelä-Savo" 

Näin yksinkertaiseti Python ymmärtää koodin ja kaikki toimii.  Python koodia tuli lopulta noin 600 riviä. 

Ja tietenkin jos Kaupunkia/kylää ei ole luettelossa area_name muuttuu  "muu" ja koodi ei mene rikki. 


Sivut ovat siis vielä Beta, ja Primocheck ei ole lopullinen Nimi :DDD
Korjattavaa löytyy älyttömästi ja Multi SQL query osoittaitu hyvin hyvin hankalaksi, koska Hakukoneeni etsii monesta taulusta ja monella sanalla. Mutta se toimii Täydellisesti atm. 




