
function add_answers(){


  var new_input = document.createElement("INPUT");
  new_input.setAttribute("type", "text");

  new_input.setAttribute("name", "answer");

  new_input.className = "form-control mt-2"


  document.getElementById("add").appendChild(new_input);

}