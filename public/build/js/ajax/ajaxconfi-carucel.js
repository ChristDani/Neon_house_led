    
    //Evento Click carrucel Evento
    var imgCar="img1";

    function AsesoriaEv(){
        var imagen=document.getElementById("imgCarrusEvento1");
        var imagen2=document.getElementById("imgCarrusEvento2");
        var imagen3=document.getElementById("imgCarrusEvento3");

        if (imgCar=="img1") {
            imagen.src="/build/img/landingPage/lp-evento/e1.jpg";
            
            imagen2.src="/build/img/landingPage/lp-evento/e2.jpg";

            imagen3.src="/build/img/landingPage/lp-evento/e3.jpg";
            
            imgCar="img2";
            
        } else if(imgCar=="img2"){
            imagen.src="/build/img/landingPage/lp-evento/e4.jpg";

            imagen2.src="/build/img/landingPage/lp-evento/e5.jpg";

            imagen3.src="/build/img/landingPage/lp-evento/e6.jpg";

            imgCar="img3";

        } else {
            imagen.src="/build/img/landingPage/lp-evento/e4.jpg";

            imagen2.src="/build/img/landingPage/lp-evento/e3.jpg";

            imagen3.src="/build/img/landingPage/lp-evento/e5.jpg";

            imgCar="img1";
        } 
    }
    
    
    //Evento Click carrucel Hogar 
    var clickHogar="img1";
    
    function AsesoriaHog(){
        var imagen=document.getElementById("imgCarrusHogar1");
        var imagen2=document.getElementById("imgCarrusHogar2");
        var imagen3=document.getElementById("imgCarrusHogar3");
        

        if (clickHogar=="img1") {
            imagen.src="/build/img/landingPage/lp-hogar/h1.jpg";
            
            imagen2.src="/build/img/landingPage/lp-hogar/h2.jpg";

            imagen3.src="/build/img/landingPage/lp-hogar/h3.jpg";
            
            clickHogar="img2";
            
        } else if(clickHogar=="img2"){
            imagen.src="/build/img/landingPage/lp-hogar/h4.jpg";

            imagen2.src="/build/img/landingPage/lp-hogar/h5.jpg";

            imagen3.src="/build/img/landingPage/lp-hogar/h6.jpg";

            clickHogar="img3";

        } else {
            imagen.src="/build/img/landingPage/lp-hogar/h2.jpg";

            imagen2.src="/build/img/landingPage/lp-hogar/h4.jpg";

            imagen3.src="/build/img/landingPage/lp-hogar/h1.jpg";

            clickHogar="img1";
        } 
    }
   

    //Evento Click carrucel Negocio
    var clickNegocio="img1";

    function AsesoriaNeg(){      
        var imagen=document.getElementById("imgCarrusNegocio1");
        var imagen2=document.getElementById("imgCarrusNegocio2");
        var imagen3=document.getElementById("imgCarrusNegocio3");

        if (clickNegocio=="img1") {
            imagen.src="/build/img/landingPage/lp-negocio/n1.jpg";
            
            imagen2.src="/build/img/landingPage/lp-negocio/n2.jpg";

            imagen3.src="/build/img/landingPage/lp-negocio/n3.jpg";
            
            clickNegocio="img2";
        } else if(clickNegocio=="img2"){
            imagen.src="/build/img/landingPage/lp-negocio/n4.jpg";

            imagen2.src="/build/img/landingPage/lp-negocio/n5.jpg";

            imagen3.src="/build/img/landingPage/lp-negocio/n6.jpg";

            clickNegocio="img3";

        } else {
            imagen.src="/build/img/landingPage/lp-negocio/n4.jpg";

            imagen2.src="/build/img/landingPage/lp-negocio/n3.jpg";

            imagen3.src="/build/img/landingPage/lp-negocio/n2.jpg";

            clickNegocio="img1";
        } 
    }

    //Evento Click carrucel Negocio
    var clickLetrero="img1";

    function AsesoriaLet(){      
        var imagen=document.getElementById("imgCarrusLetrero1");
        var imagen2=document.getElementById("imgCarrusLetrero2");
        var imagen3=document.getElementById("imgCarrusLetrero3");

        if (clickNegocio=="img1") {
            imagen.src="/build/img/landingPage/lp-letrero/l1.webp";
            
            imagen2.src="/build/img/landingPage/lp-letrero/l2.webp";

            imagen3.src="/build/img/landingPage/lp-letrero/l3.webp";
            
            clickNegocio="img2";
        } else if(clickNegocio=="img2"){
            imagen.src="/build/img/landingPage/lp-letrero/l4.webp";

            imagen2.src="/build/img/landingPage/lp-letrero/l5.webp";

            imagen3.src="/build/img/landingPage/lp-letrero/l6.webp";

            clickNegocio="img3";

        } else {
            imagen.src="/build/img/landingPage/lp-letrero/l4.webp";

            imagen2.src="/build/img/landingPage/lp-letrero/l3.webp";

            imagen3.src="/build/img/landingPage/lp-letrero/l2.webp";

            clickNegocio="img1";
        } 
    }
    
    // Swift de los formularios 
    // caputra de data Evento
    
    function capturaDataEvento() {
        var nombre=document.getElementById("nombre").value;
        var apellidos=document.getElementById("apellidos").value;
        var correo=document.getElementById("correo").value;
        var telefono=document.getElementById("telefono").value;
        
        /*if (nombre=="" || apellidos=="" || correo=="" || telefono=="") {
            swal('Error','Datos por completar','error');
            console.log("error a mostrar");
        } else {
            swal('Listo!','Datos enviados correctamente','success');
            console.log("entrando a mostrar");
        }*/

        //Cierre del modal despues del guardado de datos
        var $modalCat = $('#modalCatalogo');
        $modalCat.modal('hide');
        
    }
    
    // caputra de data Hogar

    function capturaDataHogar() {
        var nombre=document.getElementById("nombre").value;
        var apellidos=document.getElementById("apellidos").value;
        var correo=document.getElementById("correo").value;
        var telefono=document.getElementById("telefono").value;
        
        /*if (nombre=="" || apellidos=="" || correo=="" || telefono=="") {
            swal('Error','Datos por completar','error');
            console.log("error a mostrar");
        } else {
            swal('Listo!','Datos enviados correctamente','success');
            console.log("entrando a mostrar");
        }*/

        //Cierre del modal despues del guardado de datos
        var $modalCat = $('#modalCatalogo');
        $modalCat.modal('hide');

    }

    // caputra de data Negocio

    function capturaDataNegocio() {
        var nombre=document.getElementById("nombre").value;
        var apellidos=document.getElementById("apellidos").value;
        var correo=document.getElementById("correo").value;
        var telefono=document.getElementById("telefono").value;
        
        /*if (nombre=="" || apellidos=="" || correo=="" || telefono=="") {
            swal('Error','Datos por completar','error');
            console.log("error a mostrar");
        } else {
            swal('Listo!','Datos enviados correctamente','success');
            console.log("entrando a mostrar");
        }*/

        //Cierre del modal despues del guardado de datos
        var $modalCat = $('#modalCatalogo');
        $modalCat.modal('hide');
        
    }

    // caputra de data Letrero

    function capturaDataLetrero() {
        var nombre=document.getElementById("nombre").value;
        var apellidos=document.getElementById("apellidos").value;
        var correo=document.getElementById("correo").value;
        var telefono=document.getElementById("telefono").value;
        
        /*if (nombre=="" || apellidos=="" || correo=="" || telefono=="") {
            swal('Error','Datos por completar','error');
            console.log("error a mostrar");
        } else {
            swal('Listo!','Datos enviados correctamente','success');
            console.log("entrando a mostrar");
        }*/

        //Cierre del modal despues del guardado de datos
        var $modalCat = $('#modalCatalogo');
        $modalCat.modal('hide');        
        
    }

    
    function Evento() {
        AsesoriaEv() 
        // cambiarEvento();
        capturaDataEvento();
    }

    function Hogar() {
        AsesoriaHog()
        // cambiarHogar();
        capturaDataHogar();
    }

    function Negocio() {
        AsesoriaNeg()
        // cambiarNegocio();
        capturaDataNegocio();
    }

    function Letrero() {
        AsesoriaLet()
        // cambiarLetrero();
        capturaDataLetrero();
    }

    
 /*Mostrar Catalogo Imgs */

    function verCatalogoH(){
        document.getElementById('Catalogo').style.display = 'block';
        AsesoriaHog();
        capturaDataHogar();
    }
    

    function verCatalogoE(){
        document.getElementById('Catalogo').style.display = 'block';
        AsesoriaEv() 
        capturaDataEvento();
    }


    function verCatalogoN(){
        document.getElementById('Catalogo').style.display = 'block';
        AsesoriaNeg()
        capturaDataNegocio();
    }


    function verCatalogoL(){
        document.getElementById('Catalogo').style.display = 'block';
        AsesoriaLet()
        capturaDataLetrero();
    }

// Fin Mostrar Catalogo



    