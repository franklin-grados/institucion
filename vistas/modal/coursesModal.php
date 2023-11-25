<!-- MODAL PROPUESTA SIRE -->
<div class="modal fade" id="ModalPropuestaSire" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" style="max-width: 90vw; padding-left: 10px; padding-right: 10px; margin-top: 15px;" >
    <div class="modal-content">

      <div class="modal-header px-1 py-1 text-start">
        <h5 class="modal-title " id="titleCourses">-</h5>
        <button type="button" class="btn-close ms-2" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <ul class="nav nav-tabs " id="myTabs">
          <li class="nav-item">
            <a class="nav-link active puntero" aria-current="page" data-bs-toggle="tab" data-bs-target="#contenido" id="contenidoC">Contenido</a>
          </li>
          <li class="nav-item">
            <a class="nav-link puntero" data-bs-toggle="tab" data-bs-target="#calendario" id="calendarioC" >Calendario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link puntero" data-bs-toggle="tab" data-bs-target="#debates" id="debatesC" >Debates</a>
          </li>
          <li class="nav-item">
            <a class="nav-link puntero" data-bs-toggle="tab" data-bs-target="#calificaciones" id="calificacionesC" >Libro de Calificaciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link puntero" data-bs-toggle="tab" data-bs-target="#grupos" id="gruposC" >Grupos</a>
          </li>
        </ul>

        <div class="tab-content mt-3">
          <!-- Pestaña "contenido" -->
          <div class="tab-pane fade show active" id="contenido">
            <div class=""><i class="fa-solid fa-right-to-bracket conte"></i> <a href="#">Clase en TEAMS con el instructor (202320-CGEU-239-TEC-NRC_91324|001322984)</a></div>

          </div>
          <!-- FIN Pestaña "contenido" -->

          <!-- Pestaña "calendario" -->
          <div class="tab-pane fade" id="calendario">
            

            <div id="container-fluid">
              <h2 id="nombre-mes"></h2>
              <div id="calendario_general"></div>
            </div>
            <!-- <div id="calendario">

            </div> -->

            <button class="btn btn-success" id="anterior">Anterior</button>
            <button class="btn btn-success" id="siguiente">Siguiente</button>

          </div>
          <!-- Pestaña "calendario" -->

          <!-- Pestaña "debates" -->
          <div class="tab-pane fade" id="debates">
            <div class="container"><svg class="" width="30" focusable="false" viewBox="0 0 38 38" role="img" aria-label="Debate"><path fill="currentColor" stroke="transparent" d="M10.8559 3.1395C12.5907 2.4057 14.498 2 16.5 2c.3872 0 .7708.0152 1.1503.045 5.693.4468 10.4639 4.1819 12.4107 9.3099.2218.5844.9486.8204 1.471.4895.3929-.2489.5703-.7475.3988-1.1993C29.7323 4.8541 24.3665.62 17.9462.0625A16.7144 16.7144 0 0016.5 0c-2.8835 0-5.5942.7396-7.9527 2.0395C3.4519 4.8478 0 10.2708 0 16.5c0 2.5214.5662 4.9126 1.5787 7.0516.1447.3056.2984.606.461.901L.0357 31.7347c-.1066.3875.0368.8135.3545 1.0579a.9996.9996 0 00.8682.1734l7.3569-1.9684c.6663.3631 1.465.8622 2.2253.9857.4591.0745.9227-.1807 1.0942-.6325a.999.999 0 00-.1179-.9317c-.4967-.705-1.8381-.9371-2.5663-1.3583a.9999.9999 0 00-.6353-.1253S4.4377 30.045 2.427 30.583l1.6507-5.9989a1 1 0 00-.1011-.7705C2.7204 21.6674 2 19.1693 2 16.5 2 10.4939 5.6517 5.3407 10.856 3.1395zM22 25.5c0 .8284-.6716 1.5-1.5 1.5s-1.5-.6716-1.5-1.5.6716-1.5 1.5-1.5h.0097c.824.0052 1.4903.6748 1.4903 1.5zM26.5 25.5c0 .8284-.6716 1.5-1.5 1.5s-1.5-.6716-1.5-1.5.6716-1.5 1.5-1.5h.0097c.824.0052 1.4903.6748 1.4903 1.5zM31 25.5c0 .8284-.6716 1.5-1.5 1.5s-1.5-.6716-1.5-1.5.6716-1.5 1.5-1.5h.0097c.824.0052 1.4903.6748 1.4903 1.5z"></path><path fill="currentColor" stroke="transparent" fill-rule="evenodd" d="M38 25c0-7.1797-5.8203-13-13-13s-13 5.8203-13 13 5.8203 13 13 13c.1522 0 .3037-.0026.4547-.0078 2.2639-.0779 4.3829-.7354 6.2106-1.8288l4.9995 1.7787c.4081.1453.8775.0025 1.1361-.3432a1.0002 1.0002 0 00.1413-.9341l-1.7788-4.9995c.1458-.2437.2838-.4926.4138-.7463C37.4868 29.1431 38 27.1305 38 25zM27.2169 14.2235C32.2294 15.2492 36 19.6843 36 25c0 2.215-.6537 4.2744-1.7783 5.9993a.9999.9999 0 00-.1045.8814l1.2352 3.4717-3.4717-1.2352a1.0002 1.0002 0 00-.8814.1044C29.2744 35.3463 27.215 36 25 36c-6.0751 0-11-4.9249-11-11s4.9249-11 11-11c.7594 0 1.5008.077 2.2169.2235z" clip-rule="evenodd"></path></svg> <a href="#">Foro de Consultas - FC</a>
              <div class="">Estimado estudiante: En este foro usted podrá realizar todas las consultas que tenga sobre el curso (asistencia, video clase, actividades, etc.). Su tutor las revisará y dará solución a cada una de ellas.</div></div>
            </div>
            

          </div>
          <!-- FIN Pestaña "debates" -->

          <!-- Pestaña "calificaciones" -->
          <div class="tab-pane fade" id="calificaciones">
            <div class="container">
              
            </div>
          </div>
          <!-- FIN Pestaña "calificaciones" -->

          <!-- Pestaña "grupos" -->
          <div class="tab-pane fade" id="grupos">
            <div class="container">
              <div class="text-center"><img src="https://ultra.content.blackboardcdn.com/ultra/static/images/ftue/empty-course-group.svg" role="presentation">
                <p class="" style="font-family: 'Open Sans',sans-serif">Aún no tiene ningún grupo del curso.</p>
                <p class="" style="font-size: 0.875rem; margin-bottom: 0">Cuando el profesor agregue grupos, aparecerán aquí.</p></div>
            </div>

          </div>
          <!-- FIN Pestaña "grupos" -->
        </div>
      </div>

    </div> 
  </div> 
</div> 
<!-- FIN MODAL PROPUESTA SIRE -->