import QuerySelectorList from "./QuerySelectorList.js";

let selector = new QuerySelectorList;


export default class GetResponsable{
          
     constructor(){}
      
     getResponsable = async () => {
          try {
               const response = await axios.post(
                    "http://localhost/Easycrudsymphony/includes/actionTaskForm2.php",
                    {
                         Equipment: selector.Equipment.value,
                         NameCustom: selector.NameCustom.value
                    });
               selector.messageBox2.innerHTML = `${response.data}`;
          } catch (error) {
               console.error(error);
          }
      }
}

