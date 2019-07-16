function post(){
    
    jQuery.post('/php/sendmail.php',
        function(data){
            console.log(data);
        });
}