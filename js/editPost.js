// get url
const postQueryString = window.location.search;
const postParams = new URLSearchParams(postQueryString);
    if (postParams.has('content')){
        getPostData(postParams.get('content'));
    } let content = postQueryString;

document.getElementById('approved').addEventListener('approved', modifyOne);
document.getElementById('sendt').addEventListener('submit', modifyPost);
document.querySelector('fieldset').addEventListener('click', getFieldsetClick); // hakee lomakkeen

function modifyOne(){
    let eventListner = document.addEventListener(approved.value);
    console.log(eventListner);
}

function getPostData(content){
   // console.log(id);
    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        data = JSON.parse(this.responseText);
      //  console.log(data);
        populatePostForm(data);
        showPost(data);

    }    
    ajax.open("GET", "../backend/getPost.php?content=" + content);
    ajax.send();
}

function populatePostForm(data){ // täyttää lomakkeet
    document.forms['editPost']['published'].value = data.published;
    document.forms['editPost']['approved'].value = data.clientPublished;
    document.forms['editPost']['title'].value = data.title;
    document.forms['editPost']['reason'].value = data.reasonBan;
}

function showPost(data){
    let id = data.id;
    let title = data.title;
    let author = data.author;
    let content = data.content;
    let timestamp = data.timestamp;
    let published = data.published;
    let url = data.url;
    let reason = data.reasonBan;


    // timestamp conventer
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
    // timestamp convertend


    
    document.getElementById('author').innerHTML = author;
    document.getElementById('approved').innerHTML = data.clientPublished;
    document.getElementById('published').innerHTML = published;
    document.getElementById('timestamp').innerHTML = formattedTime;
    document.getElementById('reason').innerHTML = reason;

    if (published == '0'){
        let no = 'No';
        document.getElementById('published').innerHTML = no;

    } else {
        let yes = 'Yes';
        document.getElementById('published').innerHTML = yes;

    };
    
    if (data.clientPublished == '0'){
        let no = 'Hold';
        document.getElementById('approved').innerHTML = no;

    } else {
        let yes = 'Publish';
        document.getElementById('approved').innerHTML = yes;

    }
}

function modifyPost(){ // Muokkaa
    let postData = {};
    postData.id = document.forms['editPost']['id'].value;
    postData.published = document.forms['editPost']['published'].value;
    postData.clientPublished = document.forms['editPost']['approved'].value;
    postData.reasonBan = document.forms['editPost']['reason'].value;


    postData.title = document.forms['editPost']['title'].value;
    postData.content = document.forms['editPost']['summernote'].value;
    postData.url = data.url;

    console.log('save changes');

    // kerää postdata

    if (postData.clientPublished == 2) {
        postData.id = document.forms['editPost']['id'].value;
        postData.published = document.forms['editPost']['published'].value;
        postData.clientPublished = document.forms['editPost']['approved'].value;
    
    
        postData.title = document.forms['editPost']['title'].value;
        postData.content = document.forms['editPost']['summernote'].value;
        postData.url = data.url;
    

        if (document.querySelector(`[id="reasons"]`)) {
            postData.reasonBan = document.querySelector(`[id="reasons"]`).value;

                
                

            let ajax = new XMLHttpRequest();
            ajax.onload = function(){
                let postData = JSON.parse(this.responseText);
                //console.log(data);
                if (postData.hasOwnProperty('succesc')){
                    window.location.href = "index.php?type=success&msg=Post edited";
                } else
                showMessage('error', data.error);
            }
            ajax.open("POST", "../backend/modifyPostA.php", true);
            ajax.setRequestHeader("Content-Type", "application/json");
            ajax.send(JSON.stringify(postData));


        } else {
            let postData = {};
            postData.id = document.forms['editPost']['id'].value;
            postData.published = document.forms['editPost']['published'].value;
            postData.clientPublished = document.forms['editPost']['approved'].value;
            postData.reasonBan = document.forms['editPost']['reason'].value;
        
        
            postData.title = document.forms['editPost']['title'].value;
            postData.content = document.forms['editPost']['summernote'].value;
            postData.url = data.url;
        

            newDiv = document.querySelector(`[id="backUp"]`);
            const input = document.createElement('input');
            const inputType = document.createAttribute('type');
            inputType.value = "text";
            input.setAttributeNode(inputType);
            const inputStyle = document.createAttribute('style');
            inputStyle.value = 'width: 100%';
            input.setAttributeNode(inputStyle);
            
            const inputId = document.createAttribute('id');
            inputId.value = 'reasons';
            input.setAttributeNode(inputId);

            const span = document.createElement('span');
            span.innerHTML = '<b>Reason for Ban: </b>';


            newDiv.appendChild(span);
            newDiv.appendChild(input);
            document.forms['editPost']['reasons'].value = data.reasonBan;



        
        }

    } else if (postData.clientPublished == 3 && postData.published == 0) {
        let errMsg = document.querySelector(`[id="reason"]`);

        let errMsgStyle = document.createAttribute('style');
        errMsgStyle.value = 'color: red';
        
        errMsg.setAttributeNode(errMsgStyle);

        errMsg.innerHTML = 'It is not possible to select "Accept" and not to publish at same time!';
        console.log('illegal movement');
        return;
    }
    
    else {
        let ajax = new XMLHttpRequest();
        ajax.onload = function(){
            let data = JSON.parse(this.responseText);
            //console.log(data);
            if (data.hasOwnProperty('succesc')){
                window.location.href = "index.php?type=success&msg=Post edited";
            } else
            showMessage('error', data.error);
        }
        ajax.open("POST", "../backend/modifyPostA.php", true);
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
