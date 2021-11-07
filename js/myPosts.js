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
    ajax.open("GET", "../backend/myPost.php");
    ajax.send();



} //lähettää sen getPolliin.php




    
function showPost(data, type = 'notPublished'){
    const ul = document.getElementById("votesUl");
    ul.innerHTML = "";
    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        data = JSON.parse(this.responseText);        
        const now = new Date();
        //json data
        i = 0;
        data.forEach(data => {

            let id = data.id;
            let title = data.title;
            let author = data.author;
            let contents = data.content;
            let timestamp = data.timestamp;
            let published = data.clientPublished;
            let url = data.url;
            let yess = 'Yess';
            i++; 
            

        
        
            if (type == 'notPublished') {
                if (data.clientPublished == '0') {

                    const newLi = document.createElement('li');
                    const newPi = document.createElement('span');
                    const newDiv = document.createElement('div');
                    const pubText = document.createElement('span');

                    newDiv.dataset.divid = 'div' + url;


                    newLi.classList.add('list-group-item-dark');
                    newLi.dataset.justid = url;
                    newPi.setAttribute('style', 'color: red');
                    newDiv.setAttribute('style', 'color: white; float: right;');

                    pubText.setAttribute('data-id', url);


                    const liText = document.createTextNode(title);
                    



                    const trolo = document.createElement('a');
                    trolo.dataset.publishedid = url;
                    trolo.setAttribute('style', 'color: green');
                    trolo.innerHTML = ' Yes';

                    const tirili = document.createElement('span');
                    tirili.dataset.publishedid = 'hooceee';
                    tirili.setAttribute('style', 'color: white');
                    tirili.innerHTML = ' | ';



                    const trala = document.createElement('a');
                    trala.dataset.publishedidno = url;
                    trala.setAttribute('style', 'color: red');
                    trala.innerHTML = 'No';

                    pubText.innerHTML = 'Publish? ';

                    newPi.dataset.mindid = url;
                    newPi.innerHTML = 'Not Published | ';

                    newLi.appendChild(newPi);
                    newLi.appendChild(newDiv);

                    newDiv.appendChild(pubText);
                    newDiv.appendChild(trolo);
                    newDiv.appendChild(tirili);
                    newDiv.appendChild(trala);



                    newLi.appendChild(liText);
                    ul.appendChild(newLi)
            
                } else if (data.clientPublished == '2') {

                    const newLi = document.createElement('li');
                    const newPi = document.createElement('span');
                    const newDiv = document.createElement('div');
                    const pubText = document.createElement('span');

                    newDiv.dataset.divid = 'div' + url;


                    newLi.classList.add('list-group-item-dark');
                    newLi.dataset.justid = url;
                    newPi.setAttribute('style', 'color: red');
                    newDiv.setAttribute('style', 'color: white; float: right;');

                    pubText.setAttribute('data-id', url);


                    const liText = document.createTextNode(title);
                    



                    const trolo = document.createElement('a');
                    trolo.dataset.publishedid = url;
                    trolo.setAttribute('style', 'color: green');
                    trolo.innerHTML = ' Yes';

                    const tirili = document.createElement('span');
                    tirili.dataset.publishedid = 'hooceee';
                    tirili.setAttribute('style', 'color: white');
                    tirili.innerHTML = ' | ';



                    const trala = document.createElement('a');
                    trala.dataset.publishedidno = url;
                    trala.setAttribute('style', 'color: red');
                    trala.innerHTML = 'No';

                    pubText.innerHTML = 'Publish? ';

                    newPi.dataset.rejectedid = url;
                    newPi.innerHTML = 'Rejected | ';

                    newLi.appendChild(newPi);
                    newLi.appendChild(newDiv);

                    newDiv.appendChild(pubText);
                    newDiv.appendChild(trolo);
                    newDiv.appendChild(tirili);
                    newDiv.appendChild(trala);



                    newLi.appendChild(liText);
                    ul.appendChild(newLi)        
                }
            }
            //näytä vanhat
            if (type == 'waiting') {
                if (data.clientPublished == 1) {
                    
                    
            
                    const newLi = document.createElement('li');
                    const newPi = document.createElement('span');
                    const newDiv = document.createElement('div');
                    const pubText = document.createElement('span');

                    newDiv.dataset.divid = 'div' + url;


                    newLi.classList.add('list-group-item-dark');
                    newLi.dataset.justid = url;
                    newPi.setAttribute('style', 'color: yellow');
                    newDiv.setAttribute('style', 'color: white; float: right;');

                    pubText.setAttribute('data-id', url);


                    const liText = document.createTextNode(title);
                    



                    const trolo = document.createElement('a');
                    trolo.dataset.publishedid = url;
                    trolo.setAttribute('style', 'color: green');
                    trolo.innerHTML = ' Yes';

                    const tirili = document.createElement('span');
                    tirili.dataset.publishedid = 'hooceee';
                    tirili.setAttribute('style', 'color: white');
                    tirili.innerHTML = ' | ';



                    const trala = document.createElement('a');
                    trala.dataset.publishedidno = url;
                    trala.setAttribute('style', 'color: red');
                    trala.innerHTML = 'No';

                    pubText.innerHTML = 'Publish? ';

                    newPi.dataset.waitid = url;
                    newPi.innerHTML = 'Waiting... | ';

                    newLi.appendChild(newPi);
                    newLi.appendChild(newDiv);

                    newDiv.appendChild(pubText);
                    newDiv.appendChild(trolo);
                    newDiv.appendChild(tirili);
                    newDiv.appendChild(trala);



                    newLi.appendChild(liText);
                    ul.appendChild(newLi)        
        
                }

            }
            if (type == 'published') {
                if (data.published == 1 ) {

                   
                        const newLi = document.createElement('li');
                        const newPi = document.createElement('span');
                        const newDiv = document.createElement('div');
                        const pubText = document.createElement('span');

                        newDiv.dataset.divid = 'div' + url;


                        newLi.classList.add('list-group-item-dark');
                        newLi.dataset.justid = url;
                        newPi.setAttribute('style', 'color: green');
                        newDiv.setAttribute('style', 'color: white; float: right;');

                        pubText.setAttribute('data-id', url);


                        const liText = document.createTextNode(title);
                        



                        const trolo = document.createElement('a');
                        trolo.dataset.publishedid = url;
                        trolo.setAttribute('style', 'color: green');
                        trolo.innerHTML = ' Yes';

                        const tirili = document.createElement('span');
                        tirili.dataset.publishedid = 'hooceee';
                        tirili.setAttribute('style', 'color: white');
                        tirili.innerHTML = ' | ';



                        const trala = document.createElement('a');
                        trala.dataset.publishedidno = url;
                        trala.setAttribute('style', 'color: red');
                        trala.innerHTML = 'No';

                        pubText.innerHTML = 'Publish? ';

                        newPi.dataset.pubid = url;
                        newPi.innerHTML = 'Published | ';

                        newLi.appendChild(newPi);
                        newLi.appendChild(newDiv);

                        newDiv.appendChild(pubText);
                        newDiv.appendChild(trolo);
                        newDiv.appendChild(tirili);
                        newDiv.appendChild(trala);



                        newLi.appendChild(liText);
                        ul.appendChild(newLi)        
                    }
                }

            
            


            
        });
    }
    ajax.open("GET", "../backend/myPost.php");
    ajax.send();
}





function openPoll(event){
    if (event.target.dataset.justid){
    window.location.href = "myEditPosts.php?content=" + event.target.dataset.justid;
} else if (event.target.dataset.publishedid) {

    if (document.querySelector(`[data-rejectedid="${event.target.dataset.publishedid}"]`)){
        console.log('return');
        return;
        

    } else {

    let postData = {};
    postData.clientPublished = 1;
    postData.url = event.target.dataset.publishedid;

    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        let data = JSON.parse(this.responseText);
        //console.log(data);
        if (data.hasOwnProperty('succesc')){       


            //removes parent elemnt
            let webUrl = data.succesc;
            let liToDelete = document.querySelector(`[data-id="${webUrl}"]`);
            let parent = liToDelete.parentElement;
            parent.removeChild(liToDelete);


            let selectDiv = document.querySelector(`[data-divid="${'div' + webUrl}"]`);
            const newSpPi = document.createElement('span');
            newSpPi.dataset.id = webUrl;
            newSpPi.setAttribute('style', 'margin-right: 5px; float: left; color: white');
            newSpPi.innerHTML = 'Published';
            selectDiv.appendChild(newSpPi);

            // front Span
            console.log('ok');
            
            

            if (document.querySelector(`[data-mindid="${webUrl}"]`)) {
                let spanToDelete = document.querySelector(`[data-mindid="${webUrl}"]`);
                let parents = spanToDelete.parentElement;
                parents.removeChild(spanToDelete);
                console.log('lol');
                newLi.appendChild(newPi);


            } else if (document.querySelector(`[data-waitid="${webUrl}"]`)) {
                let spanToDelete = document.querySelector(`[data-waitid="${webUrl}"]`);
                let parents = spanToDelete.parentElement;
                parents.removeChild(spanToDelete);
                console.log('lol');

            } else if (document.querySelector(`[data-publishedidno="${webUrl}"]`)) {
                if (document.querySelector(`[data-waitid="${webUrl}"]`)) {
                    let spanToDelete = document.querySelector(`[data-waitid="${webUrl}"]`);
                    let parents = spanToDelete.parentElement;
                    parents.removeChild(spanToDelete);
                } else if (document.querySelector(`[data-pubid="${webUrl}"]`)){
                    let spanToDelete = document.querySelector(`[data-pubid="${webUrl}"]`);
                    let parents = spanToDelete.parentElement;
                    parents.removeChild(spanToDelete);
                    console.log('lsol');
                }
            }
            
            

        } else
        showMessage('error', data.error);
    }
    ajax.open("POST", "../backend/modClientPub.php", true);
    ajax.setRequestHeader("Content-Type", "application/json");
    ajax.send(JSON.stringify(postData));

    }

    return;
} else if (event.target.dataset.publishedidno) {
    
    if (document.querySelector(`[data-rejectedid="${event.target.dataset.publishedidno}"]`)){
        console.log('return');
        return;
        

    } else {

    let postData = {};
    postData.clientPublished = 0;
    postData.published = 0;

    postData.url = event.target.dataset.publishedidno;

    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        let data = JSON.parse(this.responseText);
        //console.log(data);
        if (data.hasOwnProperty('succesc')){       


            //removes parent elemnt
            let webUrl = data.succesc;
            let liToDelete = document.querySelector(`[data-id="${webUrl}"]`);
            let parent = liToDelete.parentElement;
            parent.removeChild(liToDelete);


            let selectDiv = document.querySelector(`[data-divid="${'div' + webUrl}"]`);
            const newSpPi = document.createElement('span');
            newSpPi.dataset.id = webUrl;
            newSpPi.setAttribute('style', 'margin-right: 5px; float: left; color: Yellow;');
            newSpPi.innerHTML = 'Not Published';
            selectDiv.appendChild(newSpPi);

          if (document.querySelector(`[data-mindid="${webUrl}"]`)) {
                let spanToDelete = document.querySelector(`[data-mindid="${webUrl}"]`);
                let parents = spanToDelete.parentElement;
                parents.removeChild(spanToDelete);
                console.log('lol');
                
            } else if (document.querySelector(`[data-waitid="${webUrl}"]`)) {
                let spanToDelete = document.querySelector(`[data-waitid="${webUrl}"]`);
                let parents = spanToDelete.parentElement;
                parents.removeChild(spanToDelete);
                console.log('lol');

            } else if (document.querySelector(`[data-publishedidno="${webUrl}"]`)) {
                if (document.querySelector(`[data-waitid="${webUrl}"]`)) {
                    let spanToDelete = document.querySelector(`[data-waitid="${webUrl}"]`);
                    let parents = spanToDelete.parentElement;
                    parents.removeChild(spanToDelete);
                } else if (document.querySelector(`[data-pubid="${webUrl}"]`)){
                    let spanToDelete = document.querySelector(`[data-pubid="${webUrl}"]`);
                    let parents = spanToDelete.parentElement;
                    parents.removeChild(spanToDelete);
                    console.log('lsol');
                }
            }
            



            



        } else
        showMessage('error', data.error);
    }
    ajax.open("POST", "../backend/modClientPub.php", true);
    ajax.setRequestHeader("Content-Type", "application/json");
    ajax.send(JSON.stringify(postData));
    }

   
}

}




