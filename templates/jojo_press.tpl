{if $content}{$content}{/if}
{if $press}
{foreach from=$press key=k item=press}<div class="press"> 
{if $press.image}<a href="{if $press.pdf}{$SITEURL}/downloads/presss/{$press.pdf}{else}{$press.weblink}{/if}"><img src="images/w100/presss/{$press.image}" alt="{$press.title}" title="{$press.title}" width="100"  class="float-right" /></a>{/if}
            <h3>{$press.title}</h3> 
            <p class="date">{$press.datefriendly}</p>
            {$press.description}
            {if $press.pdf || $press.weblink}<p class="links">##Full article##: {if $press.pdf}<a  href="{$SITEURL}/downloads/presss/{$press.pdf}">PDF</a>{/if}{if $press.pdf && $press.weblink} | {/if}{if $press.weblink}<a class="link" href="{$press.weblink}">{$press.weblink|truncate:50}</a>{/if}</p>{/if}
          </div>
          <div class="clear"></div>
{/foreach}
{/if}
