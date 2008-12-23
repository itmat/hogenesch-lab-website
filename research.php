<? 
include 'includes.php';
$title = 'Research Interests';
$curr = 'research';
phead($title);
ptabs($curr);
?>
<div style='padding-top: 30px; '>
  <h3>The big picture</h3>
  <p >
  A recent analysis of Medline and
    Crisp showed that the top 2000 human and mouse genes are disproportionately
    represented in the literature and funded grants
    (<A HREF=http://www.ncbi.nlm.nih.gov/pubmed/17472739>Su
    et al., Genome Biology,
    2007</A>).
    While this trend has resulted in broad and deep knowledge for these key
    regulators and their pathways (e.g. P53, Vegf, NFkB), the social tendency of
    researchers to study previously studied and funded genes has had a negative
    impact on whole genome annotation. The past decade has seen several
    technologies (proteomics, RNA expression dynamics, cell based screening) and
    paradigms (functional genomics, systems biology) begin to shift the pendulum
    from one gene at a time towards whole genome research. Our laboratory is
    developing and utilizing these approaches to study mammalian pathways such as
    the circadian clock. 
  </p>
  <h3>Systems biology: a path to
    the understanding of clock properties</h3>
  <p>
    For the last several years, our
    laboratory has begun to apply systems biology approaches to better understand
    complex mammalian behavior and physiology. Systems biology has been described
    as the antithesis of reductionism, and can be thought of as a simple process:
    identifying the components of a system, determining how those components fit
    together, and developing models that describe the emergent properties of the
    system (e.g. behavior)
    (<A HREF=http://www.ncbi.nlm.nih.gov/pubmed/17463274>Sauer
    et al., Science,
    2007</A>).
    While the reductionist approach has identified many components of biological
    pathways (and determined many key interactions), it has been less successful
    in describing how these interactions culminate in the emergent properties of
    systems. Practically, the process of systems biology can be accomplished by
    perturbing a system, determining the effects of these perturbations in a
    rigorous and broad manner, and incorporating this information in robust
    computational models that both describe the observed results and lead to
    testable predictions on the behavior of the system. Although important inroads
    have been made in realizing these goals in prokaryotes and other model
    systems, a systems level model of a mammalian behavior has remained
    elusive.
  </p>
  <p>
    Why study the clock with systems
    biology approaches? First, the sleep wake cycle and dependent physiology and
    behavior in mammals emerge from interactions of (more) simple cell autonomous
    oscillators, or clocks that run in single cells
    (<A HREF=http://www.ncbi.nlm.nih.gov/pubmed/16987893>Ko
    et al., Hum Mol Genet.,
    2006</A>). These
    rhythms are highly robust and can be studied after perturbation in a
    multi-parametric fashion. For example, rhythms in locomotor activity and
    temperature can be measured in the mouse for months at a time resulting in
    reliable detection of a ten minute difference in period length. These rhythms
    can also be observed in peripheral organs and even in immortalized fibroblasts
    and tumor cell lines
    (<A HREF=http://www.ncbi.nlm.nih.gov/pubmed/9635423>Balsalobre
    et al., Cell,
    1998</A>),
    where they can be easily perturbed with small molecules or by gene dosage
    experiments using over expression or RNA interference. In addition, these
    phenotypes can be measured at the level of the single cell—indeed single cell
    measurements are informing our understanding of how the circadian network
    oscillator regulates behavior and physiology
    (<A HREF=http://www.ncbi.nlm.nih.gov/pubmed/16474406>Sato
    et al., Nature Genetics,
    2006</A>;
    <A HREF=http://www.ncbi.nlm.nih.gov/pubmed/17482552>Liu
    et al., Cell,
    2007</A>).
    But maybe the most important reason we are moving forward with the systems
    biology approach is that reductionist biology fails to explain basic
    properties of the clock such as robustness, temperature compensation, or
    periodicity, which are emergent properties of networks, and not the products
    of single genes. 
  </p>
  <h3>Understanding the function
    of noncoding RNA</h3>
  <p >
    One of the most exciting
    findings of the past decade has been the discovery of novel roles for
    noncoding RNA. These RNAs have been shown to play roles in many if not most
    cellular processes such as transcription, splicing, translation, regulation of
    protein function, And as regulatory sensors of small molecules
    (<A HREF=http://www.ncbi.nlm.nih.gov/pubmed/18369136>Amaral
    et al., Science,
    2008</A>).
    Large-scale cDNA sequencing experiments like those at Riken and tiling array
    experiments on the Affymetrix platform have shown that the majority of the
    genome is transcribed
    (<A HREF=http://www.ncbi.nlm.nih.gov/pubmed/14980218>Cawley
    et al., Cell,
    2004</A>;
    <A HREF=http://www.ncbi.nlm.nih.gov/pubmed/16141072>Carninci
    et al., Science,
    2005</A>).
    Understanding the function of these noncoding RNAs has proven to be a
    challenge. Pioneering work has uncovered the roles of several classes, for
    example, micro-RNAs that regulate both translation and transcription
    (<A HREF=http://www.ncbi.nlm.nih.gov/pubmed/8252621>Lee
    et al., Cell,
    1993</A>;
    <A HREF=http://www.ncbi.nlm.nih.gov/pubmed/11779458>Ambros,
    Cell,
    2004</A>).
    However, determining the cellular roles for these factors at scale has proven
    more difficult. Computational tools have been developed to allow one to
    predict targets of noncoding RNAs such as micro-RNAs. These predictions,
    though, indicate potential regulation, which may occur in a tissue specific
    fashion and may or may not be relevant to cellular function. Our laboratory is
    using cell based screening to pan libraries of short hairpin RNAs and siRNAs
    designed against noncoding RNAs, as well as synthetic micro-RNAs and
    antagomirs to identify functional noncoding RNAs in signal transduction
    pathways (e.g.
    <A HREF=http://www.ncbi.nlm.nih.gov/pubmed/16141075>Willingham
    et al., Science,
    2005</A>).
    These screens are being integrated with other genomic screens as well is
    biochemical and computational approaches to identify those noncoding RNAs that
    play important roles in regulating mammalian biology. 
  </p>
  </div>

<? pfoot(); ?>
