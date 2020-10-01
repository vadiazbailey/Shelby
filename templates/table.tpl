{include file="header.tpl" }
{include file="cervezas.tpl" }
        <aside  id="descripcion" class="descripcion-cervezas">
            <table>
                <thead>
                    <tr>
                        <th>Cerveza</th>
                        <th>Volumen</th>
                        <th>Graduacion alcoholica</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th></th>
                        

                    </tr>
                </thead>
                {foreach from=$cervezas item=$cerveza}
                    <tr> 
                    <td>{$cerveza->estilo}</td>
                    </tr>
                {/foreach}
                <tbody id="tabla" class="tbody"></tbody>
                

            </table>

            <form class="agregar-producto">
                <label>Agregue el producto que desee</label>
                <p> Tipo de cerveza:
                    <input type="text" id="cervezas">
                </p>

                <p>Snack:
                    <input type="text" id="snack">
                </p>
                <p>
                    Precio:
                    <input type="number" id="precio">
                </p>
                <p>
                    Buscador:
                    <input type="text" id="buscador">
                    <button id="btn-buscar" type="button">Buscar</button>
                </p>
                
                <button id="btn-enviar" type="button">Enviar</button>
                <button id="btn-borrar" type="button">Borrar</button>
                <button id="btn-enviar3" type="button">Enviar x3</button>

         
                
            </form>




            <figure>
                <a href="#menu-cervezas"><img src="imagenes/menu.png" alt=""></a>
            </figure>


        </aside>
    </article>


    {include file="footer.tpl" }