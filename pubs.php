<? 
include 'includes.php';
$title = 'Publications';
$curr = 'pubs';
phead($title);
ptabs($curr);
?>

<div style="padding-top: 30px;">
<h2> Publications <a 
href='http://www.ncbi.nlm.nih.gov/sites/entrez?Db=pubmed&Cmd=DetailsSearch&Term=hogenesch+j%5BAuthor%5D' 
> (PubMed) </a> </h2>

<iframe 
src='http://www.ncbi.nlm.nih.gov/sites/entrez?Db=pubmed&Cmd=DetailsSearch&Term=hogenesch+j%5BAuthor%5D' 
width="100%" height=500 />

</div>
<? pfoot(); ?>
