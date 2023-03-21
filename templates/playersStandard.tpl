{include file="templates/header.tpl"}
{include file="templates/nav.tpl"}
<a href="logout" class="btn btn-warning" > Cerrar sesión</a>
<h1>Jugadores del club 2021</h1>
{include file="templates/playerFinder.tpl"}
<ul class="list-group">
{foreach from=$players item=player}
    <li class="list-group-item">
            {$player->nombre} | {$sports[$player->id_deporte -1]->deporte}
            <a href="viewPlayer/{$player->id}" class="btn btn-info">Ver</a>
    </li>
{/foreach}       
</ul>

