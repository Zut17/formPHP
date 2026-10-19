const btnAddNote = document.getElementById("btnAddNote");
const noteContainer = document.querySelector(".noteContainer");

btnAddNote.addEventListener("click", function () {

  
  const textarea = document.createElement("textarea");

  textarea.name = "note";
  textarea.rows = 4;
  textarea.maxLength = 200;
  textarea.placeholder = "Écrivez votre note...";

  noteContainer.appendChild(textarea);
});