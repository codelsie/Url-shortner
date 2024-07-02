function copy_url(a){
    var btn = document.getElementById("copy");
    var input = document.getElementById("url");
    btn.addEventListener('click', function(){
       navigator.clipboard.writeText(input.value).then(function() {
        alert('copied!');
       })
    })
}

copy_url();