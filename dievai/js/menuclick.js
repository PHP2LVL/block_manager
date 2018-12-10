var button = document.querySelectorAll("button.btn.bg-deep-purple.waves-effect");

for(var i = 0; i < button.length; i++){
    button[i].addEventListener('click', function(){
        // alert("button was clicked");
        var div = document.createElement('div');
        div.className = 'insert-rows';
        div.appendChild(div);
    });
}gi