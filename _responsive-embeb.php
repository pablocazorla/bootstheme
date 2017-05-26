<p>Allow browsers to determine video or slideshow dimensions based on the width of their containing block by creating an intrinsic ratio that will properly scale on any device.</p>
<p>Rules are directly applied to <code>&lt;iframe&gt;</code>, <code>&lt;embed&gt;</code>, <code>&lt;video&gt;</code>, and <code>&lt;object&gt;</code> elements; optionally use an explicit descendant class <code>.embed-responsive-item</code> when you want to match the styling for other attributes.</p>
<p><strong>Pro-Tip!</strong> You don't need to include <code>frameborder="0"</code> in your <code>&lt;iframe&gt;</code>s as we override that for you.</p>

<div style="max-width: 550px;">
  <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/nug1pMke-y4?ecver=2" allowfullscreen=""></iframe>
  </div>
</div>
<?php  preInit(true); ?>
<!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
  &lt;iframe class="embed-responsive-item" src="..."></iframe>
</div>

<!-- 4:3 aspect ratio -->
<div class="embed-responsive embed-responsive-4by3">
  &lt;iframe class="embed-responsive-item" src="..."></iframe>
</div>
<?php  preEnd(); ?>