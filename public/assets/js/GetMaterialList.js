import QuerySelectorList from "./QuerySelectorList.js";

let selector = new QuerySelectorList;

export default class GetMaterialList{
          
     constructor(){}

     getMaterialList = async () => {
          try {
               const response = await axios.post(
                    "http://localhost/Easycrudsymphony/includes/actionTaskForm.php",{NameCustom: selector.NameCustom.value});
                     let data = response.data;            
                     if (data === 'Aucune matériel ajouter pour ce client') {
                         selector.Equipment.innerHTML = '<option> Aucune matériel ajouter pour ce client</option>';
                    } else {
                         let options = data.reduce(function(acc,option){
                              return acc +'<option value=" '+option.value+' " > '+option.value+'</option>'
                         },'')
                         selector.Equipment.innerHTML = '<option value="0">Choix materiel</option>' + options;
                         selector.Equipment.insertBefore(selector.Equipment.firstElementChild , selector.Equipment.firstChild)
                         selector.Equipment.selectedIndex = 0;                
                    }           
                    selector.Equipment.style.display = null;
          } catch (error) {console.error(error);}
      }
}

