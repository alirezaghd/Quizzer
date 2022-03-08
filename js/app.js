
function add_answers(){

  var answer_Att;
  var new_input = document.createElement("INPUT");
  new_input.setAttribute("type", "text");
  for (let i = 0; i < 6; i++){
      answer_Att = "answer" + [i]

  }
  new_input.setAttribute("name", answer_Att);

  new_input.className = "form-control mt-2"


  document.getElementById("add").appendChild(new_input);

}