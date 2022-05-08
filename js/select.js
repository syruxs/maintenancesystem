$(document).ready(function (){
    //Variables para llamar los select po id
    let $marca = document.getElementById('marca')
    
    function cargarMarca(){
        $.ajax({
            url: 'crearvehiculo.php',
            type: 'GET',
            
            success: function (response){
                const marca =JSON.parse(response);

                let template = '<option class="form-control" selected disable>--Seleccione--</option>'
                
                marca.forEach(marca => {
                    template += `<option class="form-control" value="${marca.codId}">${marca.nomMarca}</option>`;
                })

                $marca.innerHTML = template;
            }
        })
    }

    cargarMarca()
})