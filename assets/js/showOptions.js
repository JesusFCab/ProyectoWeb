a = 0;
function showOptions(){
        a++;

        var div = document.createElement('div');
        div.setAttribute('class', 'form-inline');
            div.innerHTML = '<div style="clear:both" class="jugador_'+a+' col-md-offset-1 col-md-6"><label for="demo-priority-low">Jugador '+a+'</label><input class="form-control" name="Njugador_'+a+'" placeholder="Nombre de Jugador" type="text"/></div><div class="jugador_'+a+' col-md-2""><input class="form-control" name="njugador_'+a+'" placeholder="Numero de Jugador" type="text"/></div>';
            document.getElementById('jugadores').appendChild(div);document.getElementById('jugadores').appendChild(div);
}

function showntOptions(){
        a--;

        var div = document.createElement('div');
        div.setAttribute('class', 'form-inline');
            div.innerHTML = '<div style="clear:both" class="jugador_'+a+' col-md-offset-1 col-md-6"><input class="form-control" name="Njugador_'+a+'" placeholder="Nombre de Jugador" type="text"/></div><div class="jugador_'+a+' col-md-2""><input class="form-control" name="njugador_'+a+'" placeholder="Numero de Jugador" type="text"/></div>';
            document.getElementById('jugadores').appendChild(div);document.getElementById('jugadores').appendChild(div);
}