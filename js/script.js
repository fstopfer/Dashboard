//default page load
(function fetchTable(){
    
    var xhr = new XMLHttpRequest();
    
    xhr.onreadystatechange = function(){
        
        if(this.readyState == 4 && this.status == 200){
            //console.log("ok");
            var tableView = document.querySelector('.insert');
            tableView.innerHTML = this.responseText;
            
            //adds event lisetner to the default page load
            function repeat(){    
            
                var actions = document.querySelectorAll('.table a');

                for(var z = 0; z < actions.length; z++){

                    var actionLink = actions[z];

                    actionLink.addEventListener('click', performAction);
                }

                function performAction(e){

                    var tableClass = e.currentTarget.className;
                    var action = e.currentTarget.innerHTML;
                    var id = e.currentTarget.id;

                    var xhr = new XMLHttpRequest();

                    xhr.onreadystatechange = function(){

                        if(this.readyState == 4 && this.status == 200){
                            var actionView = document.querySelector('.insert');
                            actionView.innerHTML = this.responseText;
                        
                            repeat();
                            
                        }
                    };

                    xhr.open('GET', 'controller/getaction.php?table=' + tableClass + '&action=' + action + '&id=' + id, true);
                    xhr.send();
                };
            };
            
            repeat();
        }
    };
    
    xhr.open('GET', 'controller/gettable.php?table=Products', true);
    xhr.send();
})();


//toggle between tables
var links = document.querySelectorAll('#tables a');

for(var i = 0; i < links.length; i++){

	var link = links[i];

	link.addEventListener('click', fetchTable);
}

function fetchTable(e){
    
    var table = e.currentTarget.innerHTML;
    
    var xhr = new XMLHttpRequest();
    
    xhr.onreadystatechange = function(){
        
        if(this.readyState == 4 && this.status == 200){
            var tableView = document.querySelector('.insert');
            tableView.innerHTML = this.responseText;
            
            //adds event listener to the inserted table
            function repeat(){    
                
                var actions = document.querySelectorAll('.table a');

                for(var z = 0; z < actions.length; z++){

                    var actionLink = actions[z];

                    actionLink.addEventListener('click', performAction);
                }

                function performAction(e){

                    var tableClass = e.currentTarget.className;
                    var action = e.currentTarget.innerHTML;
                    var id = e.currentTarget.id;

                    var xhr = new XMLHttpRequest();

                    xhr.onreadystatechange = function(){

                        if(this.readyState == 4 && this.status == 200){
                            var actionView = document.querySelector('.insert');
                            actionView.innerHTML = this.responseText;
                            
                            repeat();
                        }
                    };

                    xhr.open('GET', 'controller/getaction.php?table=' + tableClass + '&action=' + action + '&id=' + id, true);
                    xhr.send();
                };
            };
            
            repeat(); 
        }
    };
    
    xhr.open('GET', 'controller/gettable.php?table=' + table, true);
    xhr.send();
}

// if any of the add/edit forms on the page get submitted
function submitForm(){
    
    var form = document.querySelector('.forms');
    var formId = form.id;
    var formData = new FormData(form);
    formData.append("formAction", formId);
    
    var xhr = new XMLHttpRequest();
    
    xhr.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){
            var actionView = document.querySelector('.insert');
            actionView.innerHTML = this.responseText;
            
            //adds event listener to the inserted table
            function repeat(){    
                
                var actions = document.querySelectorAll('.table a');

                for(var z = 0; z < actions.length; z++){

                    var actionLink = actions[z];

                    actionLink.addEventListener('click', performAction);
                }

                function performAction(e){

                    var tableClass = e.currentTarget.className;
                    var action = e.currentTarget.innerHTML;
                    var id = e.currentTarget.id;

                    var xhr = new XMLHttpRequest();

                    xhr.onreadystatechange = function(){

                        if(this.readyState == 4 && this.status == 200){
                            var actionView = document.querySelector('.insert');
                            actionView.innerHTML = this.responseText;
                            
                            repeat();
                        }
                    };

                    xhr.open('GET', 'controller/getaction.php?table=' + tableClass + '&action=' + action + '&id=' + id, true);
                    xhr.send();
                };
            };
            
            repeat();
        }
    };
    
    xhr.open('POST', 'controller/submitform.php', true);
    xhr.send(formData);
}