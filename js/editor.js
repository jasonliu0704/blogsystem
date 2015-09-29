
//use javascript to prevent empty title
function updateEditorMessage(){
  var p = document.querySelector("#editor-message");
  p.innerHTML = "<p>Changes not saved!</p>";
}

function init(){
  var editorForm = document.querySelector("form#editor");
  var title = document.querySelector("input[name='title']");
  //prevent standard browser treatment of the required attribut
  title.required = true;

  var textarea = document.querySelector("form textarea");
  textarea.addEventListener("keyup", updateEditorMessage, false);
  console.log("succeed\n");

  //add event for user changing entry content and update editor message
  title.addEventListener("keyup", updateEditorMessage, false);
  editor.addEventListener( "submit", checkTitle, false);
  alert("test\n");
}


function checkTitle(event){
  var title = document.querySelector("input[name='titile']");
  var warning = document.querySelector("form #title-warning");
  //if the title is empty
  if(title.vallue === ""){
    //preventDefault-> don't submit the form
    event.preventDefault();
    //display a warning
    warning.innerHTML = "*You must write a title for the entry";
  }
}

document.addEventListener("DOMContextLoaded", init, true);
