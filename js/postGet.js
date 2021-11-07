const pollQueryString = window.location.search;
//console.log(pollQueryString);


const pollParams = new URLSearchParams(pollQueryString);

if (pollParams.has('content')){

    getPollData(pollParams.get('content'));

}





function getPollData(content){
  //  console.log(id);// sen datan
    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        data = JSON.parse(this.responseText);
        showPost(data);

    }
    ajax.open("GET", "../backend/getPost.php?content=" + content);
    ajax.send();
} //lähettää sen getPolliin.php



function showPost(data){
    let id = data.id;
    let title = data.title;
    let author = data.author;
    let content = data.content;
    let timestamp = data.timestamp;
    let published = data.published;
    let url = data.url;



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





    document.querySelector('h1').innerHTML = title;
    
    document.getElementById('author').innerHTML = author;

    document.getElementById('content').innerHTML = content;
    document.getElementById('published').innerHTML = published;
    document.getElementById('timestamp').innerHTML = formattedTime;

    if (published == '0'){
        let no = 'No';
        document.getElementById('published').innerHTML = no;

    } else {
        let yes = 'Yes';
        document.getElementById('published').innerHTML = yes;

    } 



   




    data['vaihtoehdot'].forEach(vaihtoehto => {

        const newLi = document.createElement('p');
        newLi.classList.add('list-group-item');
        newLi.dataset.vaihtoehtoid = vaihtoehto.id;

        newLi.setAttribute('style', 'cursor: pointer; padding-top: 7px; padding-bottom: 7px; border-block-color: black; background-color: #333; color: #fff; margin-bottom: 5px; margin-top: 5px; padding-right: 6px; font-size: 20px; padding-left: 10px;');

        
        const newButton = document.createElement('button');
        newButton.classList.add('btn-primary');
        newButton.setAttribute('style', 'float: right; margin-top: -4px;');
        

        newButton.dataset.vaihtoehtoid = vaihtoehto.id;

       


       


        const liText = document.createTextNode(vaihtoehto.name);
        const buttonText = document.createTextNode("Äänestä");


        newLi.appendChild(liText);
        newButton.appendChild(buttonText);

        newLi.appendChild(newButton);
        ul.appendChild(newLi);

    });
} 