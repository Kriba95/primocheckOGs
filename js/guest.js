window.addEventListener('load', getsKomment);

document.forms['guest'].addEventListener('submit', giveKomment);



function getsKomment() {
    console.log('haetaankommentteja')
    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        kommentData = JSON.parse(this.responseText);
        //console.log(kommentData);
        showKomments(kommentData);
 
    }

    ajax.open("GET", "../backend/guestGet.php");
    ajax.send();

}

function giveKomment(e){
    e.preventDefault();
    const viesti = document.forms['guest']['viesti'].value;

    let guestData = `viesti=${viesti}`; //&username=${username}

    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        const guestData = JSON.parse(this.responseText);

        if (guestData.hasOwnProperty('onnistui')){
            location.reload();
        } else {

        }
    }
    ajax.open('POST', '../backend/guestinsert.php', true);
    
    //    ajax.setRequestHeader("Content-type: application/json;charset=utf-8");
    ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    ajax.send(guestData);

}

function showKomments(kommentData){
 
    const ul = document.getElementById("guestUl");
    ul.innerHTML = "";


    kommentData.forEach(komment => {
        const newLi = document.createElement('li');
        newLi.classList.add('list-group-item-dark');
        newLi.dataset.voteid = komment.id;
       // newLi.setAttribute('style', 'padding-top: 7px; padding-bottom: 7px; border-block-color: black; background: #006eff57; margin-bottom: 5px; margin-top: 5px; padding-right: 6px; font-size: 20px; padding-left: 10px;');
        const liText = document.createTextNode(komment.viesti);
        newLi.appendChild(liText);
        ul.appendChild(newLi)
    });
}