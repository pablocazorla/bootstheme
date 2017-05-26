<div class="demo-subtitle first">
  Example
</div>
<p>The affix plugin toggles <code>position: fixed;</code> on and off, emulating the effect found with <code>position: sticky;</code>. The subnavigation on the right is a live demo of the affix plugin.</p>
<p>Use the affix plugin via data attributes or manually with your own JavaScript. <b>In both situations, you must provide CSS for the positioning and width of your affixed content.</b></p>
<div class="demo-subtitle">
  Positioning via CSS
</div>
<p>The affix plugin toggles between three classes, each representing a particular state: <code>.affix</code>, <code>.affix-top</code>, and <code>.affix-bottom</code>. You must provide the styles, with the exception of <code>position: fixed;</code> on <code>.affix</code>, for these classes yourself (independent of this plugin) to handle the actual positions.</p>
<p>Here's how the affix plugin works:</p>
<ol> <li>To start, the plugin adds <code>.affix-top</code> to indicate the element is in its top-most position. At this point no CSS positioning is required.</li> <li>Scrolling past the element you want affixed should trigger the actual affixing. This is where <code>.affix</code> replaces <code>.affix-top</code> and sets <code>position: fixed;</code> (provided by Bootstrap's CSS).</li> <li>If a bottom offset is defined, scrolling past it should replace <code>.affix</code> with <code>.affix-bottom</code>. Since offsets are optional, setting one requires you to set the appropriate CSS. In this case, add <code>position: absolute;</code> when necessary. The plugin uses the data attribute or JavaScript option to determine where to position the element from there.</li> </ol>
<p>Follow the above steps to set your CSS for either of the usage options below.</p>
<div class="demo-subtitle">
  Via data attributes
</div>
<p>To easily add affix behavior to any element, just add <code>data-spy="affix"</code> to the element you want to spy on. Use offsets to define when to toggle the pinning of an element.</p>
<?php  preInit(true); ?>
<div data-spy="affix" data-offset-top="60" data-offset-bottom="200">
  ...
</div>
<?php  preEnd(); ?>
<div class="demo-subtitle">
  Via JavaScript
</div>
<?php  preInit(true,'javascript'); ?>
$('#my-affix').affix({
  offset: {
    top: 100,
    bottom: function () {
      return (this.bottom = $('.footer').outerHeight(true))
    }
  }
});
<?php  preEnd(); ?>