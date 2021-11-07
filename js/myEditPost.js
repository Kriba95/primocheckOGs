


const pollQueryString = window.location.search;
const pollParams = new URLSearchParams(pollQueryString);

if (pollParams.has('content')){
    getPollData(pollParams.get('content'));
} 
let vaihtoehtoCount = 0;
let toDelete = [];

let content = pollQueryString;

document.getElementById('sendt').addEventListener('submit', modifyPoll);
document.getElementById('author').addEventListener('click', openPost);



document.querySelector('fieldset').addEventListener('click', getFieldsetClick); // hakee lomakkeen


function getPollData(content){
 //   console.log(id);
    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        data = JSON.parse(this.responseText);
      //  console.log(data);
        populatePollForm(data);
        showPost(data);
        authorGet(data);


    }    
    ajax.open("GET", "../backend/myGetPost.php?content=" + content);
    ajax.send();
}

function populatePollForm(data){
    document.forms['editPoll']['published'].value = data.clientPublished;
    document.forms['editPoll']['title'].value = data.title;
   // document.forms['editPoll']['summernote'].value = data.content;
    
    // document.getElementById("summernote").innerHTML="Blah Blah";
   // document.getElementById("messages").innerHTML="Blah Blah";

}

function showPost(data){
    let id = data.id;
    let title = data.title;
    let author = data.author;
    let content = data.content;
    let timestamp = data.timestamp;
    let published = data.clientPublished;
    let url = data.url;
    let reason = data.reasonBan;

    const timeOptions = {
        weekday: 'long',
        month: 'short',
        year: 'numeric',
        day: 'numeric',
        hour: 'numeric',
        minute: 'numeric',
        second: 'numeric'
    },
    intlDate = new Intl.DateTimeFormat(undefined, timeOptions);    
    formattedTime = intlDate.format(new Date(1000 * timestamp));




    //Näköis linkki
    a = document.getElementById('author');
    a.setAttribute("href", "author.php?content=" + author);
    a.innerHTML = author;
    // loppuu tähän

    
    document.getElementById('timestamp').innerHTML = formattedTime;
    document.getElementById('reason').innerHTML = reason;


    if (published == '0'){
        let no = 'No';
        document.getElementById('published').innerHTML = no;

    } else {
        let yes = 'Yes';
        document.getElementById('published').innerHTML = yes;

    };

    if (published == '0'){
        let no = '';
        document.getElementById('approvement').innerHTML = no;

    } else if (data.clientPublished == '0'){
        let no = 'Waiting for approvement';
        document.getElementById('approvement').innerHTML = no;

    } else if (data.clientPublished == '3'){
        let yes = 'Approved and published.';
        document.getElementById('approvement').innerHTML = yes;

    } else if (data.clientPublished == '1'){
        let yes = 'Waiting for approvement';
        document.getElementById('approvement').innerHTML = yes;

    }  else if (data.clientPublished == '2'){
        let yes = 'Rejected';
        document.getElementById('approvement').innerHTML = yes;

    } else if (data.clientPublished >= 3) { 
        let yes = 'Hacker';
        document.getElementById('approvement').innerHTML = yes;
        
    }
} 

function authorGet(){
    document.getElementById('author').onclick = function() {
        var a = document.createElement('a');
        a.target = '_blank';
        a.href = 'https://www.techiedelight.com/';
        a.innerText = 'Techie Delight';
     
        var container = document.getElementById('container');
        container.appendChild(a);
        container.appendChild(document.createElement('br'));
    }
}

//Create optiondiv
function createOptionInputDiv(count, name, id){
    


    const div = document.createElement('div');
    div.classList.add('inputgroup');

    const label = document.createElement('label');

    const forAttribute = document.createAttribute('for');
    const labelText = document.createTextNode(`Äänestysvaihtoehto ${count}`);
    forAttribute.value = `Äänestysvaihtoehto ${count}`;


    label.setAttributeNode(forAttribute);
    label.appendChild(labelText);



    const input = document.createElement('input');

    
    input.classList.add('inputgroup');

    const inputButton = document.createAttribute('type');
    inputButton.value = "button";
    input.setAttributeNode(inputButton);


    const inputType = document.createAttribute('type');
    inputType.value = "text";
    input.setAttributeNode(inputType);

    
    const inputName = document.createAttribute('name');
    inputName.value = `vaihtoehto${count}`;
    input.setAttributeNode(inputName);

    const inputPlaceholder = document.createAttribute('placeholder');
    inputPlaceholder.value = `Äänestysvaihtoehto ${count}`;
    input.setAttributeNode(inputPlaceholder);

    const inputStyle = document.createAttribute('style'); //mun lisäämä
    inputStyle.value = "width: 80%";
    input.setAttributeNode(inputStyle);

    



    
    //Poisto Nappi


    const deleteButton = document.createElement('button');
   


    deleteButton.className = "btn-danger";
    

    const deleteText = document.createTextNode('Poista');
    //const deleteClass = document.createAttribute('id'); //mun lisäämä
    //deleteClass.value = `vahenna ${count}`;
   // deleteButton.setAttributeNode(deleteClass);


    deleteButton.appendChild(deleteText);
    deleteButton.dataset.action = 'delete';
   






    input.dataset.vaihtoehtoid = id;

    input.value = name;






    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(deleteButton); // lisää poisto napin



    return div; 
    


    
    

}


function poista(e){
    e.preventDefault();
    
    if(vaihtoehtoCount <=2) {
        return;
    } else if(vaihtoehtoCount >=2) {
    

    vaihtoehtoCount--;


    const poistaVika = document.querySelector('fieldset').lastElementChild;
    const parentElement = document.querySelector('fieldset');

    parentElement.removeChild(poistaVika);
    
    }
}

function addNewOption(e){
    e.preventDefault();
    
    vaihtoehtoCount++;


    const div = document.createElement('div');
    div.classList.add('inputgroup');

    const label = document.createElement('label');
    const forAttribute = document.createAttribute('for');
    const labelText = document.createTextNode(`Äänestysvaihtoehto ${vaihtoehtoCount}`);
    forAttribute.value = `Äänestysvaihtoehto ${vaihtoehtoCount}`;
    label.setAttributeNode(forAttribute);
    label.appendChild(labelText);



    const input = document.createElement('input');
    
    input.classList.add('inputgroup');


    const inputType = document.createAttribute('type');
    inputType.value = "text";
    input.setAttributeNode(inputType);

    
    const inputName = document.createAttribute('name');
    inputName.value = `vaihtoehto${vaihtoehtoCount}`;
    input.setAttributeNode(inputName);

    const inputPlaceholder = document.createAttribute('placeholder');
    inputPlaceholder.value = `Äänestysvaihtoehto ${vaihtoehtoCount}`;
    input.setAttributeNode(inputPlaceholder);

    const inputStyle = document.createAttribute('style');
    inputStyle.value = "width: 80%";
    input.setAttributeNode(inputStyle);


    //Poisto Nappi
    const deleteButton = document.createElement('button');
    deleteButton.className = "btn-danger";
    

    const deleteText = document.createTextNode('Poista');
    deleteButton.appendChild(deleteText);
    deleteButton.dataset.action = 'delete';


    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(deleteButton); // lisää poisto napin

    
    document.querySelector('fieldset').appendChild(div);

   
    
    

}

function modifyPoll(){
    console.log('save changes');
   
    // kerää polldata
    let postData = {};
    postData.id = document.forms['editPoll']['id'].value;
    postData.clientPublished = document.forms['editPoll']['published'].value;
    postData.title = document.forms['editPoll']['title'].value;
    postData.content = document.forms['editPoll']['summernote'].value;
    postData.url = data.url;

    //Validointi

    if (postData.clientPublished > 1) {
        errorMsg = 'Illegal Action';
        document.getElementById('clientErr').innerHTML = errorMsg;

        return;

    } else {
        let ajax = new XMLHttpRequest();
        ajax.onload = function(){
            let data = JSON.parse(this.responseText);
            //console.log(data);
            if (data.hasOwnProperty('succesc')){
                window.location.href = "index.php?type=success&msg=Poll edited";
            } else
            showMessage('error', data.error);
        }
        ajax.open("POST", "../backend/modifyPost.php", true);
        ajax.setRequestHeader("Content-Type", "application/json");
        ajax.send(JSON.stringify(postData));
    }
}

function getFieldsetClick(e){ //poisto ominaisuus
    e.preventDefault();
    //console.log(e.target)
    let btn = e.target;

    if (btn.dataset.action == 'delete'){
        let div = btn.parentElement;
        let input = div.querySelector('input');
        let fieldset = div.parentElement;
        toDelete.push({id: input.dataset.vaihtoehtoid});
        fieldset.removeChild(div);
    }
}

/* 
document.getElementById('vahenna').addEventListener('click', vahenna);

function vahenna(e){
    e.preventDefault();
    
    if(vaihtoehtoCount <=2) {
        return;
    } else if(vaihtoehtoCount >=2) {
    

    vaihtoehtoCount--;

    const deleteButton = document.createElement('button');
    deleteButton.className = "btn-danger";
    

    const deleteText = document.createTextNode('Poista');
    deleteButton.appendChild(deleteText);
    deleteButton.dataset.action = 'delete';
    div.appendChild(deleteButton); // lisää poisto napin
    
    }
}
*/

function openPost(event){
    window.location.href = "author.php?content=" + data.author;
}