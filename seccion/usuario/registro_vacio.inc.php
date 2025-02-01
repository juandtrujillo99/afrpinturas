<div class="col-12 row center-align valign-wrapper" id="registro-usuarios">
	<div class="col-12 col-md-4">
		<div class="input-field">
			<input type="text" name="nombre" id="nombre" class="validate">
			<label for="nombre">Nombres</label>
		</div>
		<div class="input-field">
			<input type="text" name="apellido" id="apellido" class="validate">
			<label for="apellido">Apellidos</label>
		</div>
		<div class="input-field">
			<input type="email" name="email" id="email" class="validate">
			<label for="email" data-error="wrong" data-success="right">Email</label>
		</div>
		<div class="input-field row">
			<input class="col-9" type="password" name="clave1" id="txtPassword">
			<label for="clave1">Contraseña</label>
			<div class="col-1"></div>
			<button class="col-2 btn" id="show_password" type="button" onclick="mostrarPassword()"><span class="fa fa-eye-slash icon"></span></button>
		</div>	
		<div class="input-field">
			<input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="validate">
			<label for="fecha_nacimiento">Fecha de nacimiento</label>
		</div>	
	</div>



	<div class="col-12 col-md-4">		
		<div class="input-field">
			<select name="pais" id="pais" class="validate">
				<option value="" disabled selected>Selecciona país</option>
				<?php
				for($i=0;$i<count($paises);$i++){
					echo '<option value="'.$paises[$i]['nombre'].'">'.$paises[$i]['nombre'].'</option>';
				}
				?>
			</select>
			<label>País</label>
		</div>
		<div class="input-field">
			<input type="number" name="telefono" id="telefono" class="validate">
			<label for="telefono" data-error="wrong" data-success="right">Teléfono</label>
		</div>
		<div class="input-field">
			<select name="dieta" id="dieta" class="validate">
				<option value="" disabled selected>Selecciona una opción</option>
				<option value="Coche particular">Coche particular</option>
				<option value="Furgoneta">Furgoneta</option>
				<option value="Sin vehiculo">Sin vehiculo</option>
			</select>
			<label>Vehículo</label>
		</div>
		<div class="input-field">
			<select name="objetivo" id="objetivo" class="validate">
				<option value="" disabled selected>Selecciona el Cargo</option>
				<option value="Pintor">Pintor</option>
				<option value="Maestro de obra">Maestro de obra</option>
				<option value="Dept. Contabilidad">Dept. Contabilidad</option>
				<option value="Encargado">Encargado</option>
				<option value="CEO">CEO</option>
			</select>
			<label>Cargo</label>
		</div>

		<div class="input-field" hidden>
			<input type="text" name="altura" id="altura" class="validate">
			<label for="altura">Trabajos verticales</label>
		</div>	
	</div>


	<div class="col-12 col-md-4">		
		<div class="input-field" hidden>
			<input type="number" name="peso" id="peso" class="validate">
			<label for="peso">Años de experiencia</label>
		</div>
		<div class="input-field">
			<select name="lugar_entreno" id="lugar_entreno" class="validate">
				<option value="" disabled selected>Selecciona una opción</option>
				<option value="Si horarios nocturnos">Si</option>
				<option value="No horarios nocturnos">No</option>
			</select>
			<label>Disponible para horarios nocturnos</label>
		</div>
		<div class="input-field">
          <textarea id="restricciones" name="restricciones" class="materialize-textarea"></textarea>
          <label for="restricciones">Biografía</label>
        </div>

		<div class="input-field" hidden>
			<select name="plan" id="plan">
				<option value="" disabled selected>Selecciona el plan</option>
				<option value="nutri-y-suple">Nutrición y suplementación</option>
				<option value="ejercicios">Solo rutina de ejercicios</option>
				<option value="alimentacion">Solo guía de alimentación</option>
				<option value="suplementacion">Solo guía de suplementación</option>
				<option value="basic">Basic</option>
				<option value="standard">Standard</option>
				<option value="advanced">Advanced</option>
				<option value="pro">Pro</option>
			</select>
			<label>Plan</label>
		</div>	

		<div class="input-field" hidden>
			<select name="dias_entreno" id="dias_entreno" >
				<option value="" disabled selected>Selecciona días de entreno</option>
				<option value="3">3 Días</option>
				<option value="5">5 Días</option>
			</select>
			<label>Días de entreno</label>
		</div>	
		<button type="submit" id="boton" class="btn btn-principal-animado" name="enviar">Registrar</button>	
	</div>
</div>


