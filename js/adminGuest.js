window.addEventListener('load', getsKomment);

document.forms['guest'].addEventListener('submit', giveKomment);
document.getElementById('guestUl').addEventListener('click', openKomment);


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

    let guestData = { //data-voteid="??"
        datasets: [{
            data: []
        }],
        labels: []
    };

    kommentData.forEach(komment => {

        guestData.labels.push(komment.name); //data-voteid="??"


        
            const newDeleteBtn = document.createElement('button');
            newDeleteBtn.classList.add('btn-danger');

            newDeleteBtn.dataset.action = 'poista';

            const deleteText = document.createTextNode('Delete');
            newDeleteBtn.appendChild(deleteText);
            newDeleteBtn.setAttribute('style', 'float: right; margin-top: -4px;');


        const newLi = document.createElement('li');
        newLi.classList.add('list-group-item-dark');
        newLi.dataset.kommentid = komment.id;
       // newLi.setAttribute('style', 'padding-top: 7px; padding-bottom: 7px; border-block-color: black; background: #006eff57; margin-bottom: 5px; margin-top: 5px; padding-right: 6px; font-size: 20px; padding-left: 10px;');
        const liText = document.createTextNode(komment.viesti);
        newLi.appendChild(liText);
        ul.appendChild(newLi);
        newLi.appendChild(newDeleteBtn);

    });
}


function openKomment(event){



    console.log(event.target.dataset);
    const action = event.target.dataset.action;
    
    if (action == 'poista'){
        let pollId = event.target.parentElement.dataset.kommentid;

        poistaPoll(pollId);
        return;

    }  
    window.location.href = "vote.php?id=" + event.target.dataset.voteid;
}

function poistaPoll(id){
    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        dataM = JSON.parse(this.responseText);
        console.log(dataM);
        let liToDelete = document.querySelector(`[data-kommentid="${id}"]`);
        let parent = liToDelete.parentElement;
        parent.removeChild(liToDelete);
    }
    ajax.open("GET", "../backend/guestDel.php?id=" + id);
    ajax.send();
}
