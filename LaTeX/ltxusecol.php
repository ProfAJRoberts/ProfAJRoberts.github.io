<?php
$title="LaTeX: Use colour";
$thisfile=__FILE__;
include "header.php";
include "menuside.php";
?>

<h1 align=center>Use colour with discretion</h1>
 
<div class="newspaper">

<h2>Primary and basic colours</h2>

Enable colour by putting into the preamble <tt>\usepackage{xcolor}</tt>. 
<p>
The following, along with black and white, are the core colours. 
They are switched in by the command <tt>\color{name}</tt>: the scope is delimited by braces or by the current environment. 
<ul> 
<li> <em>Primary colours</em>
<li><font color="#FF0000"><b>red</b></font> 
<li><font color="#00FF00"><b>green</b></font>  
<li><font color="#0000FF"><b>blue</b></font>  
<li><font color="#00FFFF"><b>cyan</b></font>  
<li><font color="#FFFF00"><b>yellow</b></font>  
<li><font color="#FF00FF"><b>magenta</b></font> 
<li><em>Other colours</em>
<li><font color="#bf7f3f"><b>brown</b></font> 
<li><font color="#3f3f3f"><b>darkgray</b></font> 
<li><font color="#7f7f7f"><b>gray</b></font> 
<li><font color="#bfbfbf"><b>lightgray</b></font> 
<li><font color="#bfff00"><b>lime</b></font> 
<li><font color="#7f7f00"><b>olive</b></font> 
<li><font color="#ff7f00"><b>orange</b></font> 
<li><font color="#ffbfbf"><b>pink</b></font> 
<li><font color="#bf003f"><b>purple</b></font> 
<li><font color="#007f7f"><b>teal</b></font> 
<li><font color="#7f007f"><b>violet</b></font> 
</ul><p>

<h2>Use such colours consistently</h2>
<ul><li>
Use black body text as any other text colour badly affects reader's comprehension <a href="http://ajet.org.au/index.php/ AJET/article/view/2286">(Priestly, 1991)</a>.
</li><li>
Use a style file to implement colours consistently --- see <tt><a href="mystyle.sty">mystyle.sty</a></tt> for example. 
</li><li>
In graphics use colours that have a more-or-less uniform 'intensity' (chroma), such as the <a href="http://ethanschoonover.com/solarized">solarized colours</a> (implemented as a colormap for Matlab/Octave in <a href="solarized.m">solarized.m</a>), or such as the default in post-2016 versions of Matlab.
</uli></ul>

 
<h2>Sixty-six more colours</h2>
Make the following 66 more colours available using  
<tt>\usepackage[dvipsnames]{xcolor}</tt> 
(thanks to Wikipedia for this table).
<p>
<table>
<tr>
<th>Name</th>
<th>Color</th>
<th>&#160;</th>
<th>Name</th>
<th>Color</th>
</tr>
<tr>
<td><b>Apricot</b></td>
<td bgcolor="#FBB982">&#160;</td>
<td>&#160;</td>
<td><b>Aquamarine</b></td>
<td bgcolor="#00B5BE">&#160;</td>
</tr>
<tr>
<td><b>Bittersweet</b></td>
<td bgcolor="#C04F17">&#160;</td>
<td>&#160;</td>
<td><b>Black</b></td>
<td bgcolor="#221E1F">&#160;</td>
</tr>
<tr>
<td><b>Blue</b></td>
<td bgcolor="#2D2F92">&#160;</td>
<td>&#160;</td>
<td><b>BlueGreen</b></td>
<td bgcolor="#00B3B8">&#160;</td>
</tr>
<tr>
<td><b>BlueViolet</b></td>
<td bgcolor="#473992">&#160;</td>
<td>&#160;</td>
<td><b>BrickRed</b></td>
<td bgcolor="#B6321C">&#160;</td>
</tr>
<tr>
<td><b>Brown</b></td>
<td bgcolor="#792500">&#160;</td>
<td>&#160;</td>
<td><b>BurntOrange</b></td>
<td bgcolor="#F7921D">&#160;</td>
</tr>
<tr>
<td><b>CadetBlue</b></td>
<td bgcolor="#74729A">&#160;</td>
<td>&#160;</td>
<td><b>CarnationPink</b></td>
<td bgcolor="#F282B4">&#160;</td>
</tr>
<tr>
<td><b>Cerulean</b></td>
<td bgcolor="#00A2E3">&#160;</td>
<td>&#160;</td>
<td><b>CornflowerBlue</b></td>
<td bgcolor="#41B0E4">&#160;</td>
</tr>
<tr>
<td><b>Cyan</b></td>
<td bgcolor="#00AEEF">&#160;</td>
<td>&#160;</td>
<td><b>Dandelion</b></td>
<td bgcolor="#FDBC42">&#160;</td>
</tr>
<tr>
<td><b>DarkOrchid</b></td>
<td bgcolor="#A4538A">&#160;</td>
<td>&#160;</td>
<td><b>Emerald</b></td>
<td bgcolor="#00A99D">&#160;</td>
</tr>
<tr>
<td><b>ForestGreen</b></td>
<td bgcolor="#009B55">&#160;</td>
<td>&#160;</td>
<td><b>Fuchsia</b></td>
<td bgcolor="#8C368C">&#160;</td>
</tr>
<tr>
<td><b>Goldenrod</b></td>
<td bgcolor="#FFDF42">&#160;</td>
<td>&#160;</td>
<td><b>Gray</b></td>
<td bgcolor="#949698">&#160;</td>
</tr>
<tr>
<td><b>Green</b></td>
<td bgcolor="#00A64F">&#160;</td>
<td>&#160;</td>
<td><b>GreenYellow</b></td>
<td bgcolor="#DFE674">&#160;</td>
</tr>
<tr>
<td><b>JungleGreen</b></td>
<td bgcolor="#00A99A">&#160;</td>
<td>&#160;</td>
<td><b>Lavender</b></td>
<td bgcolor="#F49EC4">&#160;</td>
</tr>
<tr>
<td><b>LimeGreen</b></td>
<td bgcolor="#8DC73E">&#160;</td>
<td>&#160;</td>
<td><b>Magenta</b></td>
<td bgcolor="#EC008C">&#160;</td>
</tr>
<tr>
<td><b>Mahogany</b></td>
<td bgcolor="#A9341F">&#160;</td>
<td>&#160;</td>
<td><b>Maroon</b></td>
<td bgcolor="#AF3235">&#160;</td>
</tr>
<tr>
<td><b>Melon</b></td>
<td bgcolor="#F89E7B">&#160;</td>
<td>&#160;</td>
<td><b>MidnightBlue</b></td>
<td bgcolor="#006795">&#160;</td>
</tr>
<tr>
<td><b>Mulberry</b></td>
<td bgcolor="#A93C93">&#160;</td>
<td>&#160;</td>
<td><b>NavyBlue</b></td>
<td bgcolor="#006EB8">&#160;</td>
</tr>
<tr>
<td><b>OliveGreen</b></td>
<td bgcolor="#3C8031">&#160;</td>
<td>&#160;</td>
<td><b>Orange</b></td>
<td bgcolor="#F58137">&#160;</td>
</tr>
<tr>
<td><b>OrangeRed</b></td>
<td bgcolor="#ED135A">&#160;</td>
<td>&#160;</td>
<td><b>Orchid</b></td>
<td bgcolor="#AF72B0">&#160;</td>
</tr>
<tr>
<td><b>Peach</b></td>
<td bgcolor="#F7965A">&#160;</td>
<td>&#160;</td>
<td><b>Periwinkle</b></td>
<td bgcolor="#7977B8">&#160;</td>
</tr>
<tr>
<td><b>PineGreen</b></td>
<td bgcolor="#008B72">&#160;</td>
<td>&#160;</td>
<td><b>Plum</b></td>
<td bgcolor="#92268F">&#160;</td>
</tr>
<tr>
<td><b>ProcessBlue</b></td>
<td bgcolor="#00B0F0">&#160;</td>
<td>&#160;</td>
<td><b>Purple</b></td>
<td bgcolor="#99479B">&#160;</td>
</tr>
<tr>
<td><b>RawSienna</b></td>
<td bgcolor="#974006">&#160;</td>
<td>&#160;</td>
<td><b>Red</b></td>
<td bgcolor="#ED1B23">&#160;</td>
</tr>
<tr>
<td><b>RedOrange</b></td>
<td bgcolor="#F26035">&#160;</td>
<td>&#160;</td>
<td><b>RedViolet</b></td>
<td bgcolor="#A1246B">&#160;</td>
</tr>
<tr>
<td><b>Rhodamine</b></td>
<td bgcolor="#EF559F">&#160;</td>
<td>&#160;</td>
<td><b>RoyalBlue</b></td>
<td bgcolor="#0071BC">&#160;</td>
</tr>
<tr>
<td><b>RoyalPurple</b></td>
<td bgcolor="#613F99">&#160;</td>
<td>&#160;</td>
<td><b>RubineRed</b></td>
<td bgcolor="#ED017D">&#160;</td>
</tr>
<tr>
<td><b>Salmon</b></td>
<td bgcolor="#F69289">&#160;</td>
<td>&#160;</td>
<td><b>SeaGreen</b></td>
<td bgcolor="#3FBC9D">&#160;</td>
</tr>
<tr>
<td><b>Sepia</b></td>
<td bgcolor="#671800">&#160;</td>
<td>&#160;</td>
<td><b>SkyBlue</b></td>
<td bgcolor="#46C5DD">&#160;</td>
</tr>
<tr>
<td><b>SpringGreen</b></td>
<td bgcolor="#C6DC67">&#160;</td>
<td>&#160;</td>
<td><b>Tan</b></td>
<td bgcolor="#DA9D76">&#160;</td>
</tr>
<tr>
<td><b>TealBlue</b></td>
<td bgcolor="#00AEB3">&#160;</td>
<td>&#160;</td>
<td><b>Thistle</b></td>
<td bgcolor="#D883B7">&#160;</td>
</tr>
<tr>
<td><b>Turquoise</b></td>
<td bgcolor="#00B4CE">&#160;</td>
<td>&#160;</td>
<td><b>Violet</b></td>
<td bgcolor="#58429B">&#160;</td>
</tr>
<tr>
<td><b>VioletRed</b></td>
<td bgcolor="#EF58A0">&#160;</td>
<td>&#160;</td>
<td><b>White</b></td>
<td bgcolor="">&#160;</td>
</tr>
<tr>
<td><b>WildStrawberry</b></td>
<td bgcolor="#EE2967">&#160;</td>
<td>&#160;</td>
<td><b>Yellow</b></td>
<td bgcolor="#FFF200">&#160;</td>
</tr>
<tr>
<td><b>YellowGreen</b></td>
<td bgcolor="#98CC70">&#160;</td>
<td>&#160;</td>
<td><b>YellowOrange</b></td>
<td bgcolor="#FAA21A">&#160;</td>
</tr>
</table>

<p>
 

</div>

<?php 
include "footer.php";
?>