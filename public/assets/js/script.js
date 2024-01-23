import QuerySelectorList from "./QuerySelectorList.js";
import GetMaterialList from "./GetMaterialList.js";
import GetResponsable from "./GetResponsable.js";
import GetResponsableList from "./GetResponsableList.js";
import Pagination from "./Pagination.js";
import Modal from "./Modal.js";

let getMaterialList = new GetMaterialList();
let getResponsable = new GetResponsable();
let getResponsableList = new GetResponsableList();
let selector = new QuerySelectorList;
let pagination = new Pagination(12,4);
let Modals = new Modal();

let modalClick = document.querySelector('#clickModal')


if (modalClick != null) {
     modalClick.addEventListener(
          "click",
          Modals.initElements,
          false
     );
}

//GetMaterialList
if (selector.NameCustom != null) {
     selector.NameCustom.addEventListener(
          "change",
          getMaterialList.getMaterialList,
          false
     );
}
//GetMaterialList

//GetResponsable
if (selector.Equipment != null) {
     selector.Equipment.addEventListener("change", getResponsable.getResponsable, false);
}
//GetResponsable

//GetResponsableList
if (selector.NameCustomGRList != null) {
     selector.NameCustomGRList.addEventListener(
          "change",
          getResponsableList.getResponsableList,
          false
     );
}
if (selector.clickFormGRlist != null) {
     selector.clickFormGRlist.addEventListener("change", getResponsableList.setResponsable, false);
}
//GetResponsableList

/* //Pagination for ViewTask
window.addEventListener("load", () => {
     if (selector.prevButton != null && selector.nextButton != null) {
          paginationViewTask.getPaginationNumbers();
          paginationViewTask.setCurrentPage(1);

          selector.prevButton.addEventListener("click", () => {
               paginationViewTask.setCurrentPage(paginationViewTask.currentPage - 1);
          });
          selector.nextButton.addEventListener("click", () => {
               paginationViewTask.setCurrentPage(paginationViewTask.currentPage + 1);
          });

          document.querySelectorAll(".pagination-number").forEach((button) => {
               const pageIndex = Number(button.getAttribute("page-index"));

               if (pageIndex) {
                    button.addEventListener("click", () => {
                         paginationViewTask.setCurrentPage(pageIndex);
                    });
               }
          });
     }
});
//Pagination for ViewTask */

//Pagination for ViewTaskMaterial
window.addEventListener("load", () => {
     if (selector.prevButton != null && selector.nextButton != null) {
          pagination.getPaginationNumbers();
          pagination.setCurrentPage(1);

          selector.prevButton.addEventListener("click", () => {
               pagination.setCurrentPage(pagination.currentPage - 1);
          });
          selector.nextButton.addEventListener("click", () => {
               pagination.setCurrentPage(pagination.currentPage + 1);
          });

          document.querySelectorAll(".pagination-number").forEach((button) => {
               const pageIndex = Number(button.getAttribute("page-index"));

               if (pageIndex) {
                    button.addEventListener("click", () => {
                         pagination.setCurrentPage(pageIndex);
                    });
               }
          });
     }
});
//Pagination for ViewTaskMaterial