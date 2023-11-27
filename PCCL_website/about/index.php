<head>
    <link rel="icon" type="image/png" sizes="32x32" href="https://www.thesgc.org/sites/default/files/favicons/favicon-32x32.png">
    <title>PCCL | Pan-Canadian Chemical Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.2/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/ccl.css">

    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script type="text/javascript" language="javascript" src="https://jsme-editor.github.io/dist/jsme/jsme.nocache.js"></script>
</head>

<body>

<?php $path = $_SERVER['DOCUMENT_ROOT']; include_once($path."/header.html"); ?>

<h1 class="text-center" style="font-variant: small-caps;">About the project</h1>
<p></p>
<div class="container border border-dark-subtle container-ccl" style="font-size:14px;width:70%">
    <p></p>
    <p align="justify">&emsp;Early-stage drug discovery is a complex and costly process that relies on high-throughput screening of hundreds of thousands or millions of molecules to identify chemical starting points for a given protein target. Over the past 20 years, virtual screening has proven to be a feasible and effective alternative to experimental high-throughput screening and benefits from recent advancements in computational power and deep learning methods<sup>1</sup>. Large combinatorial databases of several billion compounds are now available for virtual screening, based on traditional chemical reactions used by commercial vendors<sup>2</sup>. Novel types of molecules, requiring novel chemical reactions, will enable the discovery of drugs for the next generation of protein targets.</p>
    <p align="justify">&emsp;To explore uncharted chemical spaces using innovative chemistry that could have a significant impact on drug discovery, we propose the Pan-Canadian Chemical Library where chemical reactions developed in Canadian universities are transformed into hundreds of billions of highly diverse, but drug-like virtual molecules ready for virtual screening.</p>
    <p align="justify">&emsp;As part of a pilot study to evaluate the feasibility and effectiveness of the project, we converted five chemical reactions developed in the labs of Dr. Rob Batey at University of Toronto and Dr. Tabitha Wood at University of Winnipeg into over 100 billion drug-like molecules chemically accessible in one to three steps using commercial building blocks, including 179 million that we estimate can be synthesized quickly at low cost.<p>
    <p align="justify">&emsp;Our goal is build a network of chemists, computational chemists, AI experts and biochemists to expand the library, screen it virtually and discover novel inhibitors for challenging targets.</p>
    <p align="justify">&emsp;On this website in active development, you can explore the ≈125 million cheap enumerated compounds following Lipinski's rule of five and Veber's rule: Molecular weight ≤ 500 Da ; cLogP ≤ 5 ; HB acceptors ≤ 10 ; HB donors ≤ 5 ; Rotatable bonds ≤ 10 ; TPSA ≤ 140 Å².</p>
    <p class="text-end"><b>Corentin BEDART, PhD, PharmD</b></p>
    
    <hr/>
    <p align="justify">&emsp;This work was funded by University of Toronto's Data Sciences Institute Catalyst Grant. More information on <a href="https://datasciences.utoronto.ca/catalyst-grant/" target="_blank" class="text-reset">https://datasciences.utoronto.ca/catalyst-grant/</a></p>
    <hr/>

    <ol style="font-size:12px;">
        <li align="justify">Baum ZJ, Yu X, Ayala PY, Zhao Y, Watkins SP, Zhou Q. Artificial Intelligence in chemistry: Current trends and future directions. Journal of Chemical Information and Modeling. 2021;61(7):3197–212.</li>
        <li align="justify">Hoffmann T, Gastreich M. The Next Level in Chemical Space Navigation: Going far beyond enumerable compound libraries. Drug Discovery Today. 2019;24(5):1148–56.</li>
    </ol>

</div>

</body>
