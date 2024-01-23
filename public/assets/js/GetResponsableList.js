import QuerySelectorList from "./QuerySelectorList.js";

let selector = new QuerySelectorList;

export default class GetResponsableList {
     constructor() {}

     getResponsableList = async () => {
          const responsable = document.querySelector("#Responsable");
          if (responsable) {
               responsable.remove();
               try {
                    const response = await axios.post(
                         "http://localhost/Easycrudsymphony/includes/actionMaterial.php",
                         { NameCustom: selector.NameCustomGRList.value }
                    );
                    selector.insertRemoveGRlist.innerHTML = `${response.data}`;
               } catch (error) {
                    console.error(error);
               }
          } else {
               try {
                    const response = await axios.post(
                         "http://localhost/Easycrudsymphony/includes/actionMaterial.php",
                         { NameCustom: selector.NameCustomGRList.value }
                    );
                    selector.messageBoxGRList.innerHTML = `${response.data}`;
               } catch (error) {
                    console.error(error);
               }
          }
     };

     setResponsable = () => {
          const responsable = document.querySelector("#Responsable");

          if (responsable) {
               if (responsable.value === "entrer") {
                    selector.messageBoxGRList.remove();
                    let elt = document.getElementById("remove");
                    elt.innerHTML =
                         '<input type="text" class="css-input" id="Responsable" name="Responsable"  placeholder="Entrez le Responsable." required><br>';
               }
          }
     };
}