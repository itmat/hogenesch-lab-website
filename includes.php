<?php

function phead($title="Home") {
   header("Content-Type content=\"text/html; charset=ISO-8859-1\"");
   print <<<EOF
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head><meta name="keywords" content="circadian, transcription, cell based screening, systems biology, John Hogenesch, Hogenesch, John B Hogenesch, DNA arrays, oligonucleotide arrays, affymetrix arrays, gene atlas, geneatlas, symatlas, cbs, cDNA overexpression,  cDNA, siRNA, siRNA knockdown, genomics, functional genomics, upenn, pennsylvania, pharmacology, penn genomics institute, pgi, genomics and computational biology, gcb, rora, clock, bmal1, bmal, mop3, cryptochrome, cry, cry1, cry2" />
  <link href="style.css" media="screen" rel="Stylesheet" type="text/css" />
  <link rel="Shortcut Icon" href="favicon.ico" />
  <title>Hogenesch Lab : $title </title>
  </head>
  
  <body bgcolor="white">
  <div class='container'>
    <div id='logo' class='logo'> 
     <a href='http://bioinf.itmat.upenn.edu/hogeneschlab'><img src="images/banner.jpg" alt="Hogenesch Lab" /> </a> 
    </div>
EOF
;
}

function ptabs($curr="home") { 
  print "<div id=\"tabs\" >\n\t<ul>";
  $tabs =  array(
    0 => array('name' => 'home', 'label' => "Main", 'link' => "index.php"),
    1 => array('name' => 'members', 'label' => "Members", 'link' => "members.php"),
    2 => array('name' => 'research', 'label' => "Research Interests", 'link' => "research.php"),
    3 => array('name' => 'pubs', 'label' => "Publications", 'link' => "pubs.php"),
    4 => array('name' => 'resources', 'label' => "Resources", 'link' => "resources.php"),
    5 => array('name' => 'links', 'label' => "Links", 'link'=> "links.php"),
    );
  foreach(array_keys($tabs) as $i ) {
        print "\t\t<li>\n\t\t<a href=\"";
        print $tabs[$i]['link'] ;
        print "\"><span>";
        print $tabs[$i]['label'] ;
        print "</span></a>\n\t</li>\n";
    }
  print "\t</ul>\n</div>  <div class='space'><img src='images/spacer.gif' width='36' height='36' alt='Spacer' /></div>
  \n";
}

function pfoot() { 
  print <<<EOF
    <div class="footer">
      <a href="http://www.upenn.edu">University of Pennsylvania</a> |
    	<a href="http://www.med.upenn.edu">School of Medicine</a> | 
    	<a href="http://www.med.upenn.edu/pharm">Department of Pharmacology</a> 
    </div>
    </div>
<script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
    var pageTracker = _gat._getTracker("UA-1980172-1");
    pageTracker._initData();
    pageTracker._trackPageview();
    </script>
    </body>
    </html>

EOF
;

}
?>
