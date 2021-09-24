<?php include 'partials/header.php'; ?>

<!-- headers -->
<header class="headers">
    <img src="slike/blog1.webp" alt="">
</header>

<section class="intro py container">
    <h1>Blog</h1>
    <p>Fažana, mjesto polaska u otkrivanju…. </p>
</section>

<!-- blog -->
<section class="blog container">
    <article>
        <div class="post">
            <div class="featureditems">
                <img src="slike/blog1.webp" alt="">
            </div>
            <div class="text">
                <h4>Pješačenje</h4>
                <div class="meta"> 5.08.2021 | <a href="">Admin</a></div>
                <p>Pješačenjem možete na najbolji mogući način doživjeti....</p>
                <a href="blog1.php" class="btn">Vise &gt;</a>
            </div>
        </div>
    
        <div class="post">
            <div class="featureditems">
                <img src="slike/blog2.webp" alt="">
            </div>
            <div class="text">
                <h4>Bicikliranje</h4>
                <div class="meta"> 15.08.2021 | <a href="">Admin</a></div>
                <p>Dozivite fazanu biciklirajuci....</p>
                <a href="blog2.php" class="btn">Vise &gt;</a>
            </div>
        </div>
  
        <div class="post">
            <div class="featureditems">
                <img src="slike/blog3.webp" alt="">
            </div>
            <div class="text">
                <h4>Dragulji starogradske jezgre</h4>
                <div class="meta"> 5.08.2021 | <a href="">Admin</a></div>
                <p>Pješačenjem možete na najbolji mogući način doživjeti....</p>
                <a class="btn"  href="blog3.php">Vise &gt;</a>
            </div>
        </div>
    </article>
    <aside>
     <?php include 'partials/sidebar.php'?>
    </aside>
</section>

<?php include 'partials/footer.php'?>