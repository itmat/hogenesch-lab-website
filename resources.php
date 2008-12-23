<? 
include 'includes.php';
$title = 'Resources';
$curr = 'resources';
phead($title);
ptabs($curr);
?>

<div class="content">
  <div class="abstract">
    <a href="http://bioinf.itmat.upenn.edu/circa" >
      <img alt="circadian regulatory elements website"  src="images/circa.png" style="border: 2px solid; width: 250px;"/>
    </a>
  </div>
  <div class="main"> 
   <h3><a href="http://bioinf.itmat.upenn.edu/circa"> Circadian Gene Expression Database</a></h3>
Circadian rhythms drive daily oscillations in many different physiologies, including blood pressure, body temperature and behavior.  In addition, disruptions of the circadian clock contribute to the pathologies of metabolic disorders as well as cardiovascular disease and cancer.  Our lab is interested in the mechanism by which circadian oscillations drive these processes.  We are using microarray analysis in combination with curve-fitting and Fourier-transform based statistical algorithms to search the genome for transcripts which oscillate under circadian control.  We have identified more than 3000 cycling genes in the liver and smaller subsets of rhythmic genes in the pituitary and fibroblasts.  We are currently expanding our initial studies to identify rhythmic transcripts in over 15 different tissue types including the heart, kidneys and brain.  These data sets will be mined using bioinformatic techniques to discover novel circadian regulatory elements, characterize components of the circadian clock, and identify regulatory genes responsible for the physiologies and pathologies associated with circadian rhythms.

  </div>
</div>

<? pfoot(); ?>
