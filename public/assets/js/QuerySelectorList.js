export default class QuerySelectorList{

    //selecteur pour la pagination
    paginationNumbers = document.getElementById("pagination-numbers");
    listItems = document.querySelectorAll(".paginated-list");
    nextButton = document.getElementById("next-button");
    prevButton = document.getElementById("prev-button");
    //selecteur pour la pagination

    //GetMaterialList AND GetResponsable
     Equipment = document.querySelector("#Equipment");
     NameCustom = document.querySelector("#NameCustomer");
    //GetMaterialList AND GetResponsable

    //GetResponsable
    messageBox2 = document.querySelector('#message2');
    //GetResponsable
    
    //GetResponsableList
    NameCustomGRList = document.querySelector("#NameCustom");
    messageBoxGRList = document.querySelector("#message");
    insertRemoveGRlist = document.querySelector("#remove");
    clickFormGRlist = document.querySelector("#form");
    //GetResponsableList 
  }