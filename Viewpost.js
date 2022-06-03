//Get Data through url
var url = new URL(window.location.href);
var post = url.searchParams.get("post");
var postPara = document.createElement("p");
// postPara.classList.add("paragraphStyle");
postPara.innerHTML = post;
var displayContent = document.getElementById("viewPost");
displayContent.append(postPara);

console.log("The URL of this page is: " + window.location.href);

var btnCancelPost = document.getElementById('cancelUpdate');
btnCancelPost.addEventListener('click', CancelPost);
function CancelPost(){
    var cPost = document.getElementById("addUpdate");
    cPost.value = '';
}

var btnCancelCom = document.getElementById('cancelCom');
btnCancelCom.addEventListener('click', CancelCom);
function CancelCom(){
    var cancelCom = document.getElementById("addcomment");
    cancelCom.value = '';
}
