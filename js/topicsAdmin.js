window.addEventListener('load', getPollData);
document.getElementById('votesUl').addEventListener('click', openPoll);



let data = null;



function getPollData(){
  //  console.log(id);// sen datan
    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        data = JSON.parse(this.responseText);
        showPost(data);

    }
    ajax.open("GET", "../backend/postGet.php");
    ajax.send();
} //lähettää sen getPolliin.php





    
function showPost(data, type = 'approved'){
    const ul = document.getElementById("votesUl");
    ul.innerHTML = "";



    const now = new Date();
    //json data
    data.forEach(data => {

        let id = data.id;
        let title = data.title;
        let author = data.author;
        let contents = data.content;
        let timestamp = data.timestamp;
        let published = data.published;
        let url = data.url;
        
      
    

    
    
        if (type == 'notPublished') {
          if (data.published == '0' && data.clientPublished == '2') {

                const newLi = document.createElement('li');
                const newPi = document.createElement('span');

                newLi.classList.add('list-group-item-dark');
                newLi.dataset.voteid = url;
                newPi.setAttribute('style', 'color: red');
                const liText = document.createTextNode(title);

                newPi.innerHTML = 'Rejected | ';
                newLi.appendChild(newPi);

                newLi.appendChild(liText);
                ul.appendChild(newLi)
        
            }  else if (data.published == '0' /* && data.clientPublished ==! 2 */ ) { //REJECTED 
                //if it equals but its not

                const newLi = document.createElement('li');
                const newPi = document.createElement('span');

                newLi.classList.add('list-group-item-dark');
                newLi.dataset.voteid = url;
                newPi.setAttribute('style', 'color: red');
                const liText = document.createTextNode(title);

                newPi.innerHTML = 'Not Published | ';
                newLi.appendChild(newPi);

                newLi.appendChild(liText);
                ul.appendChild(newLi)
                ul.appendChild(newLi)
            } 
        }   
        
        if (type == 'rejected') {
            if (data.clientPublished == '2') {

                const newLi = document.createElement('li');
                const newPi = document.createElement('span');

                newLi.classList.add('list-group-item-dark');
                newLi.dataset.voteid = url;
                newPi.setAttribute('style', 'color: red');
                const liText = document.createTextNode(title);

                newPi.innerHTML = 'Rejected | ';
                newLi.appendChild(newPi);

                newLi.appendChild(liText);
                ul.appendChild(newLi)
        
            }
        }


        if (type == 'approved') {
            if (data.clientPublished == '1') {
                const newLi = document.createElement('li');
                const newPi = document.createElement('span');

                newLi.classList.add('list-group-item-dark');
                newLi.dataset.voteid = url;
                newPi.setAttribute('style', 'color: yellow');
                const liText = document.createTextNode(title);

                newPi.innerHTML = 'Waiting... | ';
                newLi.appendChild(newPi);

                newLi.appendChild(liText);
                ul.appendChild(newLi)
    
        
            }
        }

        if (type == 'published') {
            if (data.published == 1) {

                const newLi = document.createElement('li');
                const newPi = document.createElement('span');

                newLi.classList.add('list-group-item-dark');
                newLi.dataset.voteid = url;
                newPi.setAttribute('style', 'color: green');
                const liText = document.createTextNode(title);

                newPi.innerHTML = 'Published | ';
                newLi.appendChild(newPi);

                newLi.appendChild(liText);
                ul.appendChild(newLi)
        
    
            }

        }


        
    });
}

function openPoll(event){
    console.log(event.target.dataset.voteid);
    window.location.href = "postsAdmin.php?content=" + event.target.dataset.voteid;
}