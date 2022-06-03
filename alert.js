            // var title = document.getElementById("contentTitle").value;
   // var author = document.getElementById("authorInput").value;
     // var titleHeading = document.createElement('h3');
   // titleHeading.innerHTML = title;
   // displayList.append(titleHeading);
      // var elAuthor = document.createElement('i');
   // elAuthor.innerHTML = author;
   // displayContent.append(elAuthor);

function upload() {
   
   var paragraph = document.getElementById("newAlert").value;
   var listContainer = document.getElementById('post');
   var displayList = document.createElement('li');
   displayList.classList.add('postStyling');
   listContainer.append(displayList);

   var displayContent = document.createElement('div');
   displayContent.classList.add('content');
   displayList.append(displayContent);

   var imageDisplay=document.createElement('div');
   imageDisplay.classList.add('imgDivStyle');
   displayContent.append(imageDisplay);
   var image = document.createElement('img');
   image.src = 'notification icon.jpg';
   image.classList.add('imageStyling');
   imageDisplay.append(image);

   // var dateSpan= document.getElementById("datetime").value;
   // displayContent.append(dateSpan);

   var elPara = document.createElement('p');
   elPara.classList.add('paragraphStyle');
   elPara.innerHTML = paragraph;
   displayContent.append(elPara);

  

   var deleteBtn=document.createElement('button');
   deleteBtn.innerHTML = "Delete";
   deleteBtn.type = "button";
   deleteBtn.classList.add('uploadedbtn');
   displayContent.append(deleteBtn);
   deleteBtn.addEventListener('click', deleteBtn);
   function deleteBtn() {
      listContainer.removeChild(displayList);
      var delAnchor=document.createElement('a');
      delAnchor.href="delete.php?deleteid='.$post_id.'";
   }


   // view on separate page 
   //each time user clicks on view more button paragraph must be sent to view page
   
  

   var getbtn = document.createElement('button');
   getbtn.innerHTML=">>>";
   getbtn.type="button";
   getbtn.classList.add("getbtn");
   displayList.append(getbtn);
   var displayAnchor=document.createElement('a');
      displayAnchor.href="Viewpost.html";
      displayAnchor.title="view";
      displayAnchor.classList.add("anchorStyle");
    
      
   getbtn.addEventListener('click', viewpost);
   function viewpost() {
      location.href=`Viewpost.html?post=${paragraph}`;
   //    var displayPara=document.getElementById("viewPost").innerHTML= postPara;
   //    var postPara = document.createElement('p');
   // postPara.classList.add('paragraphStyle');
   // postPara.innerHTML = paragraph;
   // displayPara.append(postPara);
   
   //    var clu=document.getElementById("commentsUl");
   //    var cli=document.createElement('li');
   // clu.append(cli);
      
   }

   paragraph.value = '';
  
   clearEls();
  
}


var button = document.getElementById('upload');
button.addEventListener('click', upload);

var buttonCancel = document.getElementById('cancel');
buttonCancel.addEventListener('click', clearEls);
function clearEls() {
   var paragraph = document.getElementById("newAlert");
   paragraph.value = '';
}