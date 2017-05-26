<div class="demo-table">
  <div class="demo-row demo-padd">
    <div class="demo-col-1">Inline</div>
    <div class="demo-col-2">For example, <code>&lt;section&gt;</code> should be wrapped as inline.</div>
  </div>
  <div class="demo-row demo-padd">
    <div class="demo-col-1">User input</div>
    <div class="demo-col-2">To switch directories, type
      <kbd>cd</kbd> followed by the name of the directory.
      <br> To edit settings, press
      <kbd>
        <kbd>ctrl</kbd> +
        <kbd>,</kbd>
      </kbd>
    </div>
  </div>
  <div class="demo-row demo-padd">
    <div class="demo-col-1">Basic block (pre tag)</div>
    <div class="demo-col-2"><pre>&lt;p&gt;Sample text here...&lt;/p&gt;</pre></div>
  </div>
  <div class="demo-row demo-padd">
    <div class="demo-col-1">
      Variables
    </div>
    <div class="demo-col-2">
      <var>y</var> =
      <var>m</var>
      <var>x</var> +
      <var>b</var>
    </div>
  </div>
  <div class="demo-row demo-padd">
    <div class="demo-col-1">
      Sample output
    </div>
    <div class="demo-col-2">
      <samp>This text is meant to be treated as sample output from a computer program.</samp>
    </div>
  </div>
</div>
<?php  preInit(); ?>
Inline:
For example, <code>&lt;section&gt;</code> should be wrapped as inline.

User input:
To switch directories, type <kbd>cd</kbd> followed by the name of the directory.<br>
To edit settings, press <kbd><kbd>ctrl</kbd> + <kbd>,</kbd></kbd>

Basic block (pre tag):
&lt;pre&gt;&lt;p&gt;Sample text here...&lt;/p&gt;&lt;/pre&gt;

Variables:
<var>y</var> = <var>m</var><var>x</var> + <var>b</var>

Sample output:
<samp>This text is meant to be treated as sample output from a computer program.</samp>
<?php  preEnd(); ?>