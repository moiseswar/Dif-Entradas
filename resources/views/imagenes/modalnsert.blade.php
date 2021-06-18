 <!-- Modal -->
 @if($errors->any())
      {!! "<script>Swal.fire(
        'Atencion',
        'Rellena todos los campos',
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
            <form class="form-gruop" action={{route('imagenes.store')}} method="POST" enctype="multipart/form-data">
                @csrf
                <label class="form-label">Nombre del Programa</label>
                <input type="text" name="txt-titulo" id="" class="form-control">
                <label class="form-label">Agrega el archivo</label>
                <div class="mb-3">
                    <input type="file" name="file" id="" class="form-control" accept="image/*">
                </div>
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