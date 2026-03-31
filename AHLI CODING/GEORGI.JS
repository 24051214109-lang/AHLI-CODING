// const input = document.getElementById("input")
// const button = document.getElementById("button")
// const list = document.getElementById("tasklist")

// button.addEventListener("click", function(){
//     const textValue = input.value;

// const listItem = document.createElement("li");
// listItem.textContent = textValue;

// list.appendChild(listItem);

// });


const submit = document.getElementById("mysubmit")
mysubmit.onclick = function(){
    if(checkbox.checked){
              listsubmit.textContent = "You are must Habbib"
    }else{
              listsubmit.textContent = "You are not Habbib"
    }

    if(checkVisa.checked){
         secondlist.textContent = "You have checked a Visa"
    } else{
          secondlist.textContent = "You haven't checked a Visa yet"
    }
   
}

