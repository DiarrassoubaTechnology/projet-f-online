<!-- Modal -->
<div class="modal fade" id="generalconditionsModalLong" tabindex="-1" role="dialog" aria-labelledby="generalconditionsModalLongTitle" aria-hidden="true">
  <div class="modal-dialog .modal-condition" role="document">
    <div class="modal-content">
      <div class="modal-header text-center border-0 pb-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body modal-body-condition">
        <div class="row border-bottom bg-white mb-3 shadow-sm p-2">
          <div class="text-center">
            <img class="generalconditions-logo me-auto img-fluid" src="{{asset('assets/logo/nzconseils.png')}}" alt="nzconseils" srcset="{{asset('assets/logo/nzconseils.png')}}">
          </div>
          <div class="heading-text text-center">
            <h5 class="modal-title" id="generalconditionsModalLongTitle">Conditions Générales d'Utilisation</h5>
          </div>
        </div>

        <h2 class="title-condition">CGU</h2>
        @for ($i=1; $i<10; $i++)
          
        <h4 class="title-s-condition">DÉFINITIONS</h4>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, et. Ducimus quasi iusto, accusantium beatae inventore alias, 
          ullam sit fuga quae nisi debitis facere maiores maxime iure consequatur adipisci fugiat! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, et. Ducimus quasi iusto, accusantium beatae inventore alias, 
            ullam sit fuga quae nisi debitis facere maiores maxime iure consequatur adipisci fugiat!</p>
                
        @endfor
      </div>
    </div>
  </div>
</div>