 <!-- Modal -->
 @if($errors->any())
      {!! "<script>Swal.fire(
        'Atencion',
        'Rellena Nombre',
        'info'
      )</script>"!!}
      @endif
 <div class="modal fade" id="modalInsert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <!--Header-->
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Imagen</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!-- Body -->
        <div class="modal-body">
            <form class="form-gruop" action={{route('centros.create')}} method="POST" >
                @csrf
                <label class="form-label">Nombre</label>
                <input type="text" name="txt-nombre" id="" class="form-control">
                <label class="form-label">Domiclio</label>
                <input type="text" name="txt-domicilio" id="" class="form-control" value="Desconocido">
                <label class="form-label">Telefono</label>
                <input type="tel" name="txt-telefono" id="" class="form-control">
                <br>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
        <!-- Footer -->
        <div class="modal-footer">

        </div>
      </form>
      </div>
    </div>
  </div>