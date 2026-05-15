function mayor(){
    var endpoint = 2
    var mayor = 0
    fetch(endpoint)
    .then(function(response){
        return response;
    })
    .then(function(data){
        for (let i;  i<length(data.cantidad);i++){
            if (i>mayor){
                mayor+=i
            }
        }
    })
}