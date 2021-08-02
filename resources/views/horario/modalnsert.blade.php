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
          <h5 class="modal-title" id="exampleModalLabel">Agregar Horario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!-- Body -->
        <div class="modal-body">
            <form class="form-gruop" action={{route('horarios.store')}} method="POST" >
                @csrf
                <label class="form-label">Nombre</label>
                <input type="text" name="txt-nombre" id="" class="form-control">
                <br>
                <select class="form-select" aria-label="Default select example" name="txt-area" value="">
                  <option value="Psicologico">Psicologico</option>
                  <option value="Medico Dental">Medico Dental</option>
                  <option value="Medico Nutricional">Medico Nutricional</option>
                  <option value="Medico General">Medico General</option>
                </select>
                <br>
                <label >Dias Disponibles</label>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Lunes" name="flexCheckDefault[]">
                  <label class="form-check-label" for="flexCheckDefault">
                    Lunes
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Martes" name="flexCheckDefault[]">
                  <label class="form-check-label" for="flexCheckDefault">
                    Martes
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Miercoles" name="flexCheckDefault[]">
                  <label class="form-check-label" for="flexCheckDefault">
                    Miercoles
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Jueves" name="flexCheckDefault[]">
                  <label class="form-check-label" for="flexCheckDefault">
                    Jueves
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Viernes" name="flexCheckDefault[]">
                  <label class="form-check-label" for="flexCheckDefault">
                    Viernes
                  </label>
                </div>
                <label for="">Horas Disponibles</label>
                <div class="row">
                  <div class="col">
                    <input type="time" name="txt-inicio" id="">
                    <input type="time" name="txt-fin" id="">
                  </div>
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