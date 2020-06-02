<!-- example: see https://getbootstrap.com/docs/4.3/examples/album/ -->
<section class="jumbotron text-center">
    <div class="container">
        <p>
            <img id="img-home" src="img/biodaten_logo.jpg" alt="BioDATEN" />
        </p>
        <h1 class="jumbotron-heading">Bioinformatics DATa ENvironment</h1>
        <h2 class="jumbotron-heading">Science Data Center</h1>
    </div>
</section>
<div class="bg-light" style="padding-top: 40px; padding-bottom: 20px;">
    <div class="container">
        <div class="card-deck">
            <?php print \Biodaten\GetPageCards();?>
        </div>
    </div>
</div>