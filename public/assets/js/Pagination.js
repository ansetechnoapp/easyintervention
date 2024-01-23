import QuerySelectorList from "./QuerySelectorList.js";

let selector = new QuerySelectorList;

export default class Pagination {

   

     constructor(paginationLimit,lineLimite) {
          this.paginationLimit = paginationLimit;
          this.lineLimite = lineLimite;
          this.TLimit = paginationLimit * lineLimite;
          this.pageCount = Math.ceil(selector.listItems.length / this.TLimit);
          this.currentPage = 1;
     }

     disableButton = (button) => {
          button.classList.add("disabled");
          button.setAttribute("disabled", true);
     };

     enableButton = (button) => {
          button.classList.remove("disabled");
          button.removeAttribute("disabled");
     };

     handlePageButtonsStatus = () => {
          if (this.currentPage === 1) {
               this.disableButton(selector.prevButton);
          } else {
               this.enableButton(selector.prevButton);
          }

          if (this.pageCount === this.currentPage) {
               this.disableButton(selector.nextButton);
          } else {
               this.enableButton(selector.nextButton);
          }
     };

     handleActivePageNumber = () => {
          document.querySelectorAll(".pagination-number").forEach((button) => {
               button.classList.remove("active");
               const pageIndex = Number(button.getAttribute("page-index"));
               if (pageIndex == this.currentPage) {
                    button.classList.add("active");
               }
          });
     };

     appendPageNumber = (index) => {
          const pageNumber = document.createElement("button");
          pageNumber.className = "pagination-number";
          pageNumber.innerHTML = index;
          pageNumber.setAttribute("page-index", index);
          pageNumber.setAttribute("aria-label", "Page " + index);

          selector.paginationNumbers.appendChild(pageNumber);
     };



     getPaginationNumbers = () => {
      if (this.pageCount > 5) {
        for (let i = 1; i <= 5; i++) {
          this.appendPageNumber(i);
     }
          const pageNumberPoint = document.createElement("button");
          pageNumberPoint.className = "pagination-number";
          pageNumberPoint.innerHTML = '...';
          pageNumberPoint.setAttribute("disabled", true);

          selector.paginationNumbers.appendChild(pageNumberPoint);

      } else {
        for (let i = 1; i <= this.pageCount; i++) {
          this.appendPageNumber(i);
     }
      }

     };

     setCurrentPage = (pageNum) => {
          this.currentPage = pageNum;

          this.handleActivePageNumber();
          this.handlePageButtonsStatus();

          const prevRange = (pageNum - 1) * this.TLimit;
          const currRange = pageNum * this.TLimit;

          selector.listItems.forEach((item, index) => {
               item.classList.add("hidden");
               if (index >= prevRange && index < currRange) {
                    item.classList.remove("hidden");
               }
          });
     };
}

