<x-layout>
    <div class="row ps-xxl-5 ps-xl-5 ps-lg-5 m-0">
        <div class="col-xl-7">
            <form action="{{ route('contacto.post') }}" method="POST">
                @csrf
                <div class="row m-0">
                    <h1 class="text-primary col-12">Eres cliente?</h1>
                    <p class="text-white">Ahorrate la llamada y rellena la ficha, obtendras una informacion detallada
                    de la hora en la que te visitará el técnico</p>
                    <div class="col-xl-5 col-9">
                        <label for="id_Nombre" class="form-label">Nombre:</label>
                        <input type="text" name="Nombre" class="form-control" placeholder="Ingrese su nombre completo" autofocus maxlength="50" required id="id_Nombre">
                    </div>
                    <div class="col-xl-5 col-7 pt-xxl-0 pt-xl-0 pt-lg-0 pt-2">
                        <label for="id_Email" class="form-label">Email:</label>
                        <input type="text" name="Email" class="form-control" placeholder="example@gmail.com" maxlength="100" id="id_Email">
                    </div>
                </div>
                <div class="row m-0 pt-xxl-3 pt-xl-3 pt-lg-3 pt-2">
                    <div class="col-xl-3 col-5">
                        <label for="id_Telefono" class="form-label">Teléfono:</label>
                        <input type="text" name="Telefono" class="form-control" placeholder="630000000" maxlength="9" id="id_Telefono">
                    </div>
                    <div class="col-xl-4 col-5">
                        <label for="id_Motivo" class="form-label">Motivo:</label>
                        <select name="Motivo" class="form-control" required id="id_Motivo">
                            <option value="" selected>---------</option>
                            <option value="1">Instalacion nueva</option>
                            <option value="2">Renovacion de instalacion</option>
                            <option value="3">Mantenimiento</option>
                            <option value="4">Emergencia</option>
                            <option value="5">Reclamos</option>
                            <option value="6">Otro</option>
                        </select>
                    </div>
                    <div class="col-xl-3 col-6 pt-xxl-0 pt-xl-0 pt-lg-0 pt-2">
                        <label for="id_Disponibilidad" class="form-label">Disponibilidad:</label>
                        <input type="text" name="Disponibilidad" class="form-control" placeholder="de 00:00 a 00:00" maxlength="18" required id="id_Disponibilidad">
                    </div>
                </div>

                <div class="row m-0 pt-xxl-3 pt-xl-3 pt-lg-3 pt-2">
                    <div class="col-xl-8">
                        <label for="id_Comentario" class="form-label">Comentario:</label>
                        <textarea name="Comentario" cols="40" rows="3" class="form-control" placeholder="Describa la situacion (si es necesario)" maxlength="240" id="id_Comentario"></textarea>
                    </div>
                </div>
                <div class="row pt-xl-3 pt-3 ps-xl-4 px-4 pe-xl-11">
                    <button class="btn btn-primary p-1"><b>Enviar</b></button>
                </div>
            </form>
            @if(session('info'))
                <script>alert("{{ session('info') }}")</script>
            @endif
        </div>

        <div class="col-xl-4 bg-secondary bg-opacity-50">
            <h1 class="text-primary">Contáctanos</h1>

        </div>
    </div>
</x-layout>
