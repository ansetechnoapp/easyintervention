const paginatedList = document.querySelectorAll('#paginated-list');
const paginatedListNumber = paginatedList.length;
const paginationLimit = 6;
const pageCount = Math.ceil(paginatedListNumber / paginationLimit);
let currentPage = 1;

const test = document.querySelector('#paginated-list');

    
async function getUser7() {
        try {
             const response = await axios.post("http://localhost/Easycrudsymphony/includes/pagination.php");
                   let data = response.data;
                   let out = "";
   for(let key of data){
      out += `
         <tr>
            <td> ${key.Nom} </td>
            <td> ${key.Equipment} </td>
            <td> ${key.NameCustomer} </td>
            <td> ${key.Subjects} </td>
            <td> ${key.Detail} </td>
            <td> ${key.Observation} </td>
            <td> ${key.Verdicts} </td>
            <td id="show_content${key.Id_task}" onclick="handleClick('#show_content${key.Id_task}')">
            <i class="fa-solid fa-ellipsis-vertical"></i>
            <div class="btn-action" style="display: none">
      `
      if (key.Btn_modif === 'Disable') {
        out +=``
      }else {
        out +=`
        <form data-create-account-form method="POST" class="btn-link-Edit" action="EditTaskForm">
        <input type="hidden" name="Nom" value="${key.Nom}"></input>
        <input type="hidden" name="Equipment" value="${key.Equipment}"></input>
        <input type="hidden" name="NameCustomer" value="${key.NameCustomer}"></input>
        <input type="hidden" name="Subjects" value="${key.Subjects}"></input>
        <input type="hidden" name="Detail" value="${key.Detail}"></input>
        <input type="hidden" name="Observation" value="${key.Observation}"></input>
        <input type="hidden" name="Verdicts" value="${key.Verdicts}"></input>
        <input type="hidden" name="user_id_num" value="${key.user_id_num}"></input>
        <input type="hidden" name="Id_task" value="${key.Id_task}"></input>
        <button type="submit"  class="btn-link-action"> Modifier</button></form >
     `}
      if (key.Btn_Sup  === 'Disable') {  
        out +=``
      } else {
        out +=`<button  class="btn-link-action" href="?user_id_num= ${key.user_id_num} &Id_task= ${key.Id_task} "> Supprimer</button>`
      }
      out +=`</div></td></tr>`;
   }

   for (let i = 1; i <= pageCount; i++) {
            out;
   }
 
   test.innerHTML = out;

        } catch (error) {
             console.error(error);
        }
    }document.addEventListener('DOMContentLoaded',getUser7)

const getPaginationNumbers = () => {
  let nomberInsert = "";
  const pageNumber = document.querySelector('#setlinksnumberbtn');
  for (let i = 1; i <= pageCount; i++) {
  nomberInsert +=`<a href="#">${i}</a>`; 
  }
  pageNumber.innerHTML = nomberInsert;
};

window.addEventListener("load", () => {
  getPaginationNumbers();
  
});