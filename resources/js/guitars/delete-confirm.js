const deleteFormElements=document.querySelectorAll("form.guitar-destroyer");
deleteFormElements.forEach((formElement)=>{
    formElement.addEventListener("submit", function(event){
        event.preventDefault();
        const userChoice =window.confirm(`Vuoi davvero cancellare questa ${this.getAttribute("custom-data-name")} dal DB? Guarda che fai piangere il Rock!`);
        if(userChoice===true){
            this.submit();
        }
    });
});