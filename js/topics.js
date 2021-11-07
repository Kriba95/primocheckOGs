window.addEventListener('load', getPollData);
document.getElementById('votesUl').addEventListener('click', openPoll);



let data = null;



function getPollData(){
  //  console.log(id);// sen datan
    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        data = JSON.parse(this.responseText);
        showPost(data);
        callData(data);
        changePage(data);
        numPages(data);
    

    }
    ajax.open("GET", "../backend/postGet.php");
    ajax.send();



} //lähettää sen getPolliin.php




var current_page = 1;
var records_per_page = 3;
function callData(){
    var objJson = data;

}

 // Can be obtained from another source, such as your data variable

function prevPage()
{
    if (current_page > 1) {
        current_page--;
        changePage(current_page);
    }
}

function nextPage()
{
    if (current_page < numPages()) {
        current_page++;
        changePage(current_page);
    }
}
    
function changePage(page)
{
    var btn_next = document.getElementById("btn_next");
    var btn_prev = document.getElementById("btn_prev");
    var listing_table = document.getElementById("listingTable");
    var page_span = document.getElementById("page");
 
    // Validate page
    if (page < 1) page = 1;
    if (page > numPages()) page = numPages();

    listing_table.innerHTML = "";

    for (var i = (page-1) * records_per_page; i < (page * records_per_page) && i < page.length; i++) {
        listing_table.innerHTML += page[i].title + "<br>";
    }
    page_span.innerHTML = page + "/" + numPages();

    if (page == 1) {
        btn_prev.style.visibility = "hidden";
    } else {
        btn_prev.style.visibility = "visible";
    }

    if (page == numPages()) {
        btn_next.style.visibility = "hidden";
    } else {
        btn_next.style.visibility = "visible";
    }
}

function numPages(page)
{
    return Math.ceil(page.length / records_per_page);
}

window.onload = function() {
    changePage(1);
};



    
function showPost(data, type = 'current'){
    const ul = document.getElementById("votesUl");
    ul.innerHTML = "";



    const now = new Date();
    //json data
    i = 0;
    data.forEach(data => {

        let id = data.id;
        let title = data.title;
        let author = data.author;
        let contents = data.content;
        let timestamp = data.timestamp;
        let published = data.published;
        let url = data.url;
        i++; 
        
        const newLi = document.createElement('div');
        newLi.classList.add('post');
        newLi.setAttribute("id", 'page'+i);

        newLi.dataset.voteid = url;
       // newLi.setAttribute('style', 'padding-top: 7px; padding-bottom: 7px; border-block-color: black; background: #006eff57; margin-bottom: 5px; margin-top: 5px; padding-right: 6px; font-size: 20px; padding-left: 10px;');


        const liText = document.createTextNode(title);
        newLi.appendChild(liText);
        
        ul.appendChild(newLi)

    

    
    
    

        
    });
    










}

function openPoll(event){
    console.log(event.target.dataset.voteid);
    window.location.href = "posts.php?content=" + event.target.dataset.voteid;
}




