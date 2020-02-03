<?php get_header(); ?>

<section class="multi_step_form " style="padding-top:200px; padding-bottom: 200px;">
  <div class="container padding-event"2>
    <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) ); ?>
  </div>
</section>
   <!-- <h2 style="color:black;     padding-top: 160px;">Datos Personales</h2> -->
          <!-- <h6>We will send you a SMS. Input the code to verify.</h6> -->
          <!-- <div class="form-row">
            <div class="form-group col-lg-6 col-sm-6 col-sm-6">
              <input type="text" id="" class="form-control" placeholder="Nombre y Apellido">
            </div>
            <div class="form-group col-lg-6 col-sm-6">
              <input type="text" class="form-control" placeholder="Cedula/Rif">
            </div>
            <div class="form-group col-lg-6 col-sm-6">
              <input type="text" class="form-control" placeholder="Nombre de la Empresa">
            </div>
            <div class="form-group col-lg-6 col-sm-6">
              <input type="mail" class="form-control" placeholder="Correo Electrónico">
            </div>
            <div class="form-group col-lg-6 col-sm-6">
              <input type="tel" class="form-control" placeholder="Teléfono">
            </div>
            <div class="form-group col-lg-6 col-sm-6">
              <input type="text" class="form-control" placeholder="Fecha del Evento" onfocus="(this.type='date')"
                onblur="(this.type='text')">
            </div>
          </div>
           <h2 style="color:black;     padding-top: 160px;">Datos del Evento</h2>
          <!-- <h6>We will send you a SMS. Input the code to verify.</h6> -->
          <!-- <div class="form-row">
            <div class="form-group col-lg-6 col-sm-6">
              <input type="text" id="" class="form-control" placeholder="Fecha de Inicio" , onfocus="(this.type='date')"
                onblur="(this.type='text')">
            </div>
            <div class="form-group col-lg-6 col-sm-6">
              <input type="text" id="" class="form-control" placeholder="Fecha de Fin" , onfocus="(this.type='date')"
                onblur="(this.type='text')">
            </div>
            <div class="form-group col-lg-6 col-sm-6">
              <input type="text" class="form-control" placeholder="Motivo/Colores">
            </div>
            <div class="form-group col-lg-6 col-sm-6">
              <input type="text" class="form-control" placeholder="Tipo de Evento">
            </div>
            <div class="form-group col-lg-6 col-sm-6">
              <input type="number" class="form-control" placeholder="Cantidad de Personas">
            </div>
            <div class="form-group col-lg-6 col-sm-6">
              <select class="product_select">
                <option data-display="Hora de Inicio">Hora de Inicio</option>
                <option>2. Choose A Question</option>
                <option>3. Choose A Question</option>
              </select>
            </div>
            <div class="form-group col-lg-6 col-sm-6">
              <select class="product_select">
                <option data-display="Hora de Inicio">Hora de Fin</option>
                <option>2. Choose A Question</option>
                <option>3. Choose A Question</option>
              </select>
            </div>
            <div class="form-group col-lg-6 col-sm-6">
              <select class="product_select">
                <option data-display="Seleccione un salón">Seleccione un salón</option>
                <option>2. Choose A Question</option>
                <option>3. Choose A Question</option>
              </select>
            </div>
            <div class="form-group col-lg-12">
              <textarea name="" placeholder="Descripción del Evento" id="" cols="30" rows="10"></textarea>
            </div>
          </div>
          <button type="button" class="btn-general btn-red previous_button">Back</button>
          <button type="button" class="next btn-general btn-red">Continue</button>
        </fieldset>
        <fieldset>
           <h2 style="color:black;     padding-top: 160px;">Bebida/Comida</h2>
          <div class="form-row">
            <div class="form-flex col-lg-6 col-sm-6">
              <div class="form-group ">
                <input id="check-1" name="categories-8" type="checkbox" value="#"></input>
                <label for="check-1">Pasapalos fríos
                </label>
                <input id="check-2" name="categories-8" type="checkbox" value="#"></input>
                <label for="check-2">Pasapalos calientes</label>
                <input id="check-3" name="categories-8" type="checkbox" value="#"></input>
                <label for="check-3">Menú plateado</label>
                <input id="check-4" name="categories-8" type="checkbox" value="#"></input>
                <label for="check-4">Estaciones temáticas</label>
                <input id="check-5" name="categories-8" type="checkbox" value="#"></input>
                <label for="check-5">Tipo buffe</label>
                <input id="check-6" name="categories-8" type="checkbox" value="#"></input>
                <label for="check-6">Coffe Break matutino</label>
                <input id="check-7" name="categories-8" type="checkbox" value="#"></input>
                <label for="check-7">Coffe Break vespertino</label>
              </div>
            </div>
            <div class="col-lg-6 form-flex col-sm-6">
              <div class="form-group">
                <input id="check-8" name="categories-8" type="checkbox" value="#"></input>
                <label for="check-8">Mesa de quesos
                </label>
                <input id="check-9" name="categories-8" type="checkbox" value="#"></input>
                <label for="check-9">Descorche de cocteles</label>
                <input id="check-10" name="categories-8" type="checkbox" value="#"></input>
                <label for="check-10">Descorche de whisky</label>
                <input id="check-11" name="categories-8" type="checkbox" value="#"></input>
                <label for="check-11">Des. Vino/Champagne</label>
                <input id="check-12" name="categories-8" type="checkbox" value="#"></input>
                <label for="check-12">Des. Vodka/Ron</label>
                <input id="check-13" name="categories-8" type="checkbox" value="#"></input>
                <label for="check-13">Barra coctelera</label>
                <input id="check-14" name="categories-8" type="checkbox" value="#"></input>
                <label for="check-14">Ron</label>
              </div>
            </div>
            <div class="col-lg-12 form-flex">
              <h2 style="color:black;     padding-top: 160px;">Decoración del Evento</h2>

            </div>
            <div class="form-group col-lg-3 input-check  col-6 col-md-4">
              <input id="check-15" name="categories-8" type="checkbox" value="#"></input>
              <label class="" for="check-15">
                Arreglos Florales
              </label>
            </div>
            <div class="form-group col-lg-3 input-check  col-6 col-md-4">
              <input id="check-16" name="categories-8" type="checkbox" value="#"></input>
              <label class="" for="check-16">
           
                Sonido
              </label>
            </div>
            <div class="form-group col-lg-3 input-check  col-6 col-md-4">
              <input id="check-17" name="categories-8" type="checkbox" value="#"></input>
              <label class="" for="check-17">
    
                Show de mágia
              </label>
            </div>
            <div class="form-group col-lg-3 input-check  col-6 col-md-4">
              <input id="check-18" name="categories-8" type="checkbox" value="#"></input>
              <label class="" for="check-18">
     
                Dj
              </label>
            </div>
            <div class="form-group col-lg-3 input-check  col-6 col-md-4">
              <input id="check-19" name="categories-8" type="checkbox" value="#"></input>
              <label class="" for="check-19">
          
                Show de baile
              </label>
            </div>
            <div class="form-group col-lg-3 input-check  col-6 col-md-4">
              <input id="check-20" name="categories-8" type="checkbox" value="#"></input>
              <label class="" for="check-20">
    
                Inflables
              </label>
            </div>
            <div class="form-group col-lg-3 input-check  col-6 col-md-4">
              <input id="check-21" name="categories-8" type="checkbox" value="#"></input>
              <label class="" for="check-21">
            
                Grupo musical
              </label>
            </div>
            <div class="form-group col-lg-3 input-check  col-6 col-md-4">
              <input id="check-22" name="categories-8" type="checkbox" value="#"></input>
              <label class="" for="check-22">
  
                Globos
              </label>
            </div>
            <div class="form-group col-lg-3 input-check  col-6 col-md-4">
              <input id="check-23" name="categories-8" type="checkbox" value="#"></input>
              <label class="" for="check-23">
    
                Iluminación
              </label>
            </div>
            <div class="form-group col-lg-3 input-check  col-6 col-md-4">
              <input id="check-24" name="categories-8" type="checkbox" value="#"></input>
              <label class="" for="check-24">
  
                Podium
              </label>
            </div>
            <div class="form-group col-lg-3 input-check  col-6 col-md-4">
              <input id="check-25" name="categories-8" type="checkbox" value="#"></input>
              <label class="" for="check-25">

                Toldo
              </label>
            </div>
            <div class="form-group col-lg-3 input-check  col-6 col-md-4">
              <input id="check-26" name="categories-8" type="checkbox" value="#"></input>
              <label class="" for="check-26">
         
                Hora loca
              </label>
            </div>
          </div>

          <button type="button" class="btn-general btn-red previous previous_button">Back</button>
          <button type="button" class="next btn-general btn-red">Continue</button>
        </fieldset>
        <fieldset>
          <h2 style="color:black;     padding-top: 160px;">Montaje del Evento </h2>
          <div class="row">

            <div class="form-group col-lg-2 input-check  col-6 col-md-4">
              <input id="check-27" name="categories-27" type="checkbox" value="#"></input>
              <label class="" for="check-27">
  
                Banquete
              </label>
            </div>
            <div class="form-group col-lg-2 input-check  col-6 col-md-4">
              <input id="check-28" name="categories-8" type="checkbox" value="#"></input>
              <label class="" for="check-28">
             
                Auditorio
              </label>
            </div>
            <div class="form-group col-lg-2 input-check  col-6 col-md-4">
              <input id="check-30" name="categories-8" type="checkbox" value="#"></input>
              <label class="" for="check-30">
  
                Reunión
              </label>
            </div>
            <div class="form-group col-lg-2 input-check  col-6 col-md-4">
              <input id="check-31" name="categories-8" type="checkbox" value="#"></input>
              <label class="" for="check-31">
                Escuela
              </label>
            </div>
            <div class="form-group col-lg-2 input-check  col-6 col-md-4">
              <input id="check-32" name="categories-8" type="checkbox" value="#"></input>
              <label class="" for="check-32">
               
                Cóctel
              </label>
            </div>
            <div class="form-group col-lg-2 input-check  col-6 col-md-4">
              <input id="check-33" name="categories-8" type="checkbox" value="#"></input>
              <label class="" for="check-33">
     
                Tipo U
              </label>
            </div>
          </div> -->

           <!-- <h2 style="color:black;     padding-top: 160px;">Información Extra</h2> -->
          <!-- <h6>Please update your account with security questions</h6> -->
          <!-- <div class="form-group col-lg-12">
            <textarea name="" id="" cols="30" rows="10" placeholder="Otros Servicios"></textarea>
          </div>
          <div class="form-group col-lg-12">
            <textarea name="" id="" cols="30" rows="10" placeholder="Observaciones"></textarea>
            <div class="form-flex conditones">
              <input id="check-30" name="categories-8" type="checkbox" value="#"></input>
              <label for="check-30">Terminos y condiciones</label>
            </div>
          </div>

          <button type="button" class="btn-general btn-red previous previous_button">Back</button>
          <a href="#" class="btn-general btn-red">Finish</a>
        </fieldset>
      </form>
    </div>
  </section>
  </div> -->
</section> -->
<?php get_footer(); ?>