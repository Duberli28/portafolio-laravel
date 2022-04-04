<!--/* -------------------------------------------------------------------------- */
/*                            SLIDE ROTATIVO FONDO                            */
/* -------------------------------------------------------------------------- */-->

<div id="slides" class="fondo">
    <ul class="slides-container">
    
        <li>
            <img src="{{ url('/') }}/img/bannerLogin/1.jpg" alt="">
            <div class="espacio"></div>
        </li>

        <li>
            <img src="{{ url('/') }}/img/bannerLogin/2.jpg" alt="">
            <div class="espacio"></div>
        </li>

        <li>
            <img src="{{ url('/') }}/img/bannerLogin/3.jpg" alt="">
            <div class="espacio"></div>
        </li> 
                
    </ul>

    
      
</div>

<div class="card-img-overlay">

    <div class="container">
       

        <div class="row d-flex justify-content-center centrar">

            @include('paginas/login/login')
            @include('paginas/login/texto-login')


        </div>
    </div>
</div>
