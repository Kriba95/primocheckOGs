const authorQueryString = window.location.search;
//console.log(pollQueryString);


const authorParams = new URLSearchParams(authorQueryString);

if (authorParams.has('content')){

    getAuthorData(authorParams.get('content'));

}

function getAuthorData(content){
    //  console.log(id);// sen datan
      let ajax = new XMLHttpRequest();
      ajax.onload = function(){
          data = JSON.parse(this.responseText);
          showAuthor(data);
  
      }
      ajax.open("GET", "../backend/getAuthor.php?content=" + content);
      ajax.send();
  }
function showAuthor(){
    console.log(data);
    let container = document.querySelector(`[id="container"]`);

    const username = document.createElement('div');
    const nimi = document.createElement('div');
    const sukunimi = document.createElement('div');
    const email = document.createElement('div');


    username.innerHTML = '<p class="username-container" >' + 'Username: ' + data.username + '</p>';
    nimi.innerHTML = '<p class="nimi-container" >' + 'Name: ' + data.nimi + '</p>';
    sukunimi.innerHTML = '<p class="sukunimi-container" >' + 'Surname: ' + data.sukunimi + '</p>';
    email.innerHTML = '<p class="email-container" >' + 'Email: ' + data.email + '</p>';




    container.appendChild(username);
    container.appendChild(nimi);
    container.appendChild(sukunimi);
    container.appendChild(email);

}

container.onmouseover = function() {
    console.log(data.nimi);
    let selector = document.querySelector(`[id="container"]`);
    const div = document.createElement('div');

    let span = document.createElement('span');

    const text = document.createAttribute('style');
    text.value = "color:red";
    span.setAttributeNode(text);


    text.innerHTML = 'Modify';

    selector.appendChild(div);

    div.appendChild(span);






  }