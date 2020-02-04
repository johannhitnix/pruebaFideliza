$(document).ready(function () {
    var cundinamarca = ['Elija uno', 'Bogota', 'Chia', 'Cajica', 'Zipaquira', 'La Calera'];
    var boyaca = ['Elija uno', 'Tunja', 'Duitama', 'Sogamoso', 'Chiquinquira', 'Raquira'];
   
    $("#departamento").change(function () { 
        let str = "";
        $("#departamento option:selected").each(function(){
            str += $(this).text();
            cambio(str);
        });
    });
    
    function cambio(txt){
        let sel = $("#ciudad");
        sel.empty();

        if(txt == "Cundinamarca"){            
            for (let i = 0; i < cundinamarca.length; i++) {
                $("#ciudad").append(`<option>${cundinamarca[i]}</option>`);                
            }
        }
        if(txt == "Boyaca"){
            for (let i = 0; i < boyaca.length; i++) {
                $("#ciudad").append(`<option>${boyaca[i]}</option>`);
            }    
        }
      }
});