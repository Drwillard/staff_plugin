# staff_plugin
Simple WP plugin to display staff members

<ol>
<li>
Add opening and closing staff sections. All staff sections and members must appear within these tags. This tag takes no parameters.
    <pre>[staff] .... [/staff]</pre>
</li>
<li>
Add a section heading with staff_section blocks:
    <pre>[staff_section title=""] ...  [/staff_section]</pre>
<p>
<strong>Parameters</strong><br>
<strong>title</strong> -- this is the section title that will print for each section</p>
</li>

<li>
Each staff member gets a sepereate staff_member block:
    <pre>[staff_member title="" name="" link=""]IMAGE GOES HERE[/staff_member]</pre>
    <p>
    <strong>Parameters</strong><br>
    <strong>title</strong> -- prints job title<br>
    <strong>name</strong> -- staff person's name<br>
    <strong>link</strong> -- target link when staff member is clicked<br>
    An image may be placed between the opening and closing sections. If no image is provided, a placeholder will be used
    </p>
</li>
</ol>

<pre>
[staff]

  [staff_section title="Executive Staff"]
  
    [staff_member title="CEO of Awesomeness" name="Joe Momma" link="http://www.google.com"][/staff_member]
    [staff_member title="CFO of Nerdy Numbers" name="Candy Apple" link="http://www.google.com"][/staff_member]

  [/staff_section]
  
  [staff_section title="Grunt Staff"]
  
    [staff_member title="Guy at Counter" name="Ben Dover" link="http://www.google.com"][/staff_member]
    [staff_member title="Matron of Honor" name="Bye Felicia" link="http://www.math.com"][/staff_member]  
  
  [/staff_section]
  
[/staff]
</pre>
