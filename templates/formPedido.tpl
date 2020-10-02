<section class="pedido">
            <form>
                <h2>Pedido</h2>

                <p>
                    <label>Nombre y apellido</label><br>
                    <input class="items-form" type="text" name="Nombre y Apellido" placeholder="Nombre y Apellido">
                </p>
                <p>
                    <label>Dirección</label><br>
                    <input class="items-form" type="text" name="Direccion" placeholder="Dirección">
                </p>
                <p>
                    <label>Teléfono</label><br>
                    <input class="items-form" type="number" name="Telefono" placeholder="Teléfono">
                </p>
                <p> 
                    <label>Email</label><br>
                    <input class="items-form" type="email" name="Email" placeholder="Email">
                </p>
                <p>
                    <label>Tipo de abono</label>
                    <br>
                    Efectivo 
                    <input type="radio" name="pago" id="Efectivo" value="Efectivo">
                    <br>
                    Tarjeta
                    <input type="radio" name="pago" id="Tarjeta" value="Tarjeta">
                    <br>
                    <img src="imagenes/tarjeta.jpg" alt="" srcset="">
                </p>
                <p>
                    <label>Comentario</label><br>
                    <textarea class="items-form" name="Comentario" id="" cols="30" rows="10"></textarea>
                </p>
                <br>

                <div class="contenedor-captcha">
                    <h3>Compruebe el captcha: </h3>
                    <p id="captcha"></p>
                    <p class="info"></p>
                    <input id="input" class="items-form" type="number" placeholder="Escriba el captcha" value="">    
                    <button id="nuevo-captcha" class="items-form" type="button">Generar Captcha</button>
                
                    <button id="verificar" class="items-form" type="button">Verificar Formulario</button>
                    <button class="items-form" type="button">Enviar</button>
                </div>

            </form>

        </section>

    </article>