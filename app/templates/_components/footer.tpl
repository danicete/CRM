       </div> 
    </div> 
  </div>
  <footer>

  </footer>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="{$path.siteRoot}/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <script src="{$path.siteRoot}/js/plugins.js"></script>
  <script src="{$path.siteRoot}/js/script.js"></script>

  {if $jsIncludes|@count > 0}
  {foreach from=$jsIncludes item=js}
  <script src="{$path.siteRoot}/js/{$js}.js"></script>
  {/foreach}
  {/if}

</body>
</html>