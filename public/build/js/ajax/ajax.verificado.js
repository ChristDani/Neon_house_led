$(document).ready(function () {
    confirmacion();
  });

  function confirmacion(){
    let email = document.getElementById('email').value;
    let verificado = document.getElementById('verificado').value;
    const datos = {
      email: email,
      verificado: verificado
    };
    $.ajax({
      url: '/configuracion/verificado',
      type: 'GET',
      data: datos,
      success: function(e){
        console.log(e);
        let json = JSON.parse(e);
        if(json.data){
          document.getElementById('contenedor').innerHTML = 
          `         
          <section class="bg-black pt-5 pb-5 text-white">

                <div class="container d-flex justify-content-center">
            
                    <div class="text-center mw-60">
                        <h2>Su cuenta ha sido activada!</h2>
                        <div class="d-flex justify-content-center">
                            <h3>Gracias por verificar su cuenta, puede continuar con sus compras :)</h3>
                        </div>
                    </div>
            
                </div>
            
                </section>
          ` 
        }else{
          document.getElementById('contenedor').innerHTML = 
          `         
          <section class="bg-black pt-5 pb-5 text-white">

            <div class="container d-flex justify-content-center">
        
                <div class="text-center mw-60">
                    <h2>UPS</h2>
                    <div class="d-flex justify-content-center">
                        <h3>Hubo un error en la validacion</h3>
                    </div>
                </div>
        
            </div>
        
            </section>
          ` 
        }
      }
    });
}