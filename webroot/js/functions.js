// Seta o menu lateral que esta ativo dependento da controller e acao executada
function setMenuAtivo(controller, action){
    var menuAtual = $(".treeview." + controller);
    menuAtual.addClass("active");
    if(action == "add"){
      menuAtual.find(".add").addClass("active");
    }
    else{
      menuAtual.find(".visualizar").addClass("active");
    }
}
