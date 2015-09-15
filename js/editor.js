//use javascript to prevent empty title
function init(){
  var editorForm = document.querySelector("form#editor");
  var title = document.querySelector("input[name='title']");
  //prevent standard browser treatment of the required attribut
  title.required = false;
  editor.addEventListener("submit", checkTitle, false);
  console.log("your browser understands DOMContextLoaded");
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
