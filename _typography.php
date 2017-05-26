<div class="demo-table">
  <?php  for($i = 1;$i <= 6; $i++){ ?>
  <div class="demo-row">
    <div class="demo-col-1">
      Header
      <?php echo $i; ?>
    </div>
    <div class="demo-col-2">
      <h<?php echo $i; ?>>Think Different <small>Secondary text</small></h<?php echo $i; ?>>
    </div>
  </div>
  <?php  } ?>
  <div class="demo-row demo-hr">
    <div class="demo-col-1">
      Paragraph
    </div>
    <div class="demo-col-2">
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
    </div>
  </div>
  <div class="demo-row demo-hr">
    <div class="demo-col-1">
      Paragraph 'Lead'
    </div>
    <div class="demo-col-2">
      <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
    </div>
  </div>
  <div class="demo-row demo-hr">
    <div class="demo-col-1">
      Blockquotes
    </div>
    <div class="demo-col-2">
      <blockquote>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
      </blockquote>
    </div>
  </div>

  <div class="demo-row demo-hr">
    <div class="demo-col-1">
      Deleted text
    </div>
    <div class="demo-col-2">
      <del>This line of text is meant to be treated as deleted text.</del>
    </div>
  </div>
  <div class="demo-row demo-hr">
    <div class="demo-col-1">
      Strikethrough text
    </div>
    <div class="demo-col-2">
      <s>This line of text is meant to be treated as no longer accurate.</s>
    </div>
  </div>
  <div class="demo-row demo-hr">
    <div class="demo-col-1">
      Inserted text
    </div>
    <div class="demo-col-2">
      <ins>This line of text is meant to be treated as an addition to the document.</ins>
    </div>
  </div>
  <div class="demo-row demo-hr">
    <div class="demo-col-1">
      Underlined text
    </div>
    <div class="demo-col-2">
      <u>This line of text will render as underlined</u>
    </div>
  </div>
<div class="demo-row demo-hr">
    <div class="demo-col-1">
      Small text
    </div>
    <div class="demo-col-2">
      <small>This line of text is meant to be treated as fine print.</small>
    </div>
  </div>
  <div class="demo-row demo-hr">
    <div class="demo-col-1">
      Bold text
    </div>
    <div class="demo-col-2">
      The following snippet of text is <strong>rendered as bold text</strong>.
    </div>
  </div>
  <div class="demo-row demo-hr">
    <div class="demo-col-1">
      Italics text
    </div>
    <div class="demo-col-2">
      The following snippet of text is <em>rendered as italicized text</em>.
    </div>
  </div>
  <div class="demo-row demo-hr">
    <div class="demo-col-1">
      Abbreviations
    </div>
    <div class="demo-col-2">
      An abbreviation of the word attribute is <abbr title="Text of attribute">attribute</abbr>.
    </div>
  </div>
  <div class="demo-row demo-hr">
    <div class="demo-col-1">
      Addresses
    </div>
    <div class="demo-col-2">
      <address>
        <strong>Twitter, Inc.</strong><br>
        1355 Market Street, Suite 900<br>
        San Francisco, CA 94103<br>
        <abbr title="Phone">P:</abbr> (123) 456-7890
      </address>
      <address>
        <strong>Full Name</strong><br>
        <a href="mailto:#">first.last@example.com</a>
      </address>
    </div>
  </div>
</div>
<?php  preInit(); ?>
<?php  for($i = 1;$i <= 6; $i++){ ?>
<h<?php echo $i; ?>>Think Different <small>Secondary text</small></h<?php echo $i; ?>>
<?php  } ?>

<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>

<p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>

<blockquote>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>

<del>This line of text is meant to be treated as deleted text.</del>

<s>This line of text is meant to be treated as no longer accurate.</s>

<ins>This line of text is meant to be treated as an addition to the document.</ins>

<u>This line of text will render as underlined</u>

<small>This line of text is meant to be treated as fine print.</small>

The following snippet of text is <strong>rendered as bold text</strong>.

The following snippet of text is <em>rendered as italicized text</em>.

An abbreviation of the word attribute is <abbr title="Text of attribute">attribute</abbr>.

<address>
  <strong>Twitter, Inc.</strong><br>
  1355 Market Street, Suite 900<br>
  San Francisco, CA 94103<br>
  <abbr title="Phone">P:</abbr> (123) 456-7890
</address>
<address>
  <strong>Full Name</strong><br>
  <a href="mailto:#">first.last@example.com</a>
</address>
<?php  preEnd(); ?>
