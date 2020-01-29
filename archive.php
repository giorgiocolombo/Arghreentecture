<?php include "header.php"?>
<h1> <br>
<br>
<br>
<br>
<br> Archivio</h1>

<style>
    .container_article_archive{
    display: grid;
    margin: 4rem auto;
    grid-template-columns: repeat(50, 1fr);
    grid-template-rows: repeat(50, 1fr);
    max-width: 600px;
    max-height: 550px;
    }
    .container_article_archive .text_card{
        grid-column: 5/47;
        grid-row: 15/51;
    }
    .container_article_archive .text_card_p{
        height: 150px
    }
    .container_article_archive .pic_card_container{
        grid-column: 5/47;
        grid-row: 3/15;
    }
    .container_article_archive .green_card{
        grid-column: 5/47;
        grid-row: 1/30;
    }
    .container_article_archive .pink_card{
        grid-column: 5/9;
        grid-row: 47/51;
        z-index:6;
    }


    .container_gallery_archive{
    display: grid;
    margin: 4rem auto;
    grid-template-columns: repeat(50, 1fr);
    grid-template-rows: repeat(50, 1fr);
    max-width: 600px;
    max-height: 550px;
    }
    .container_gallery_archive .text_card{
        grid-column: 5/47;
        grid-row: 26/51;
    }
    .container_gallery_archive .text_card_p{
        height: 60px
    }
    .container_gallery_archive .pic_card_container{
        grid-column: 5/47;
        grid-row: 18/27;
    }
    .container_gallery_archive .green_card{
        grid-column: 5/47;
        grid-row: 9/18;
    }
    .container_gallery_archive .pink_card{
        grid-column: 5/47;
        grid-row: 1/9;
    }
</style>

<div style="display:grid; grid-template-columns: 1fr 1fr; max-width: 1600px; margin: auto">

<div class="container_article_archive" data-aos="fade-up" data-aos-duration="600">
                <div class="text_card">
                    <div class="tags">
                        <p>Autore</p>
                    </div>
                    <h2>Titolo articolo di Spazi Sostenibili</h2>
                    <p class="text_card_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit modi expedita quod aut, nihil iste, hic quidem laborum nesciunt nemo nisi totam omnis, animi aspernatur dolorem ex. Aperiam, accusamus aliquid. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil adipisci quam fuga architecto soluta, velit quaerat libero nostrum hic vero perspiciatis labore doloribus aut doloremque quod, vitae dolore saepe aliquid.</p>
                    <div class="interaction">
                        <a href="articolo.php" class="button_article">Continua a leggere</a>
                    </div>
                </div>
                <div class="pic_card_container">
                    <img class="pic_card" src="img-samples/photo-1579189880841-43ddba8d8efd.jpg">
                </div>
                <div class="green_card"></div>
                <div class="pink_card"></div>
            </div>


            <div class="container_gallery_archive" data-aos="fade-up" data-aos-duration="600">
                <div class="text_card">
                    <div class="tags">
                        <p>Autore</p>
                    </div>
                    <h2>Titolo gallery di Spazi Sostenibili</h2>
                    <p class="text_card_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit modi expedita quod aut, nihil iste, hic quidem laborum nesciunt nemo nisi totam omnis, animi aspernatur dolorem ex. Aperiam, accusamus aliquid. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil adipisci quam fuga architecto soluta, velit quaerat libero nostrum hic vero perspiciatis labore doloribus aut doloremque quod, vitae dolore saepe aliquid.</p>
                    <div class="interaction">
                        <a href="gallery.php" class="button_article">Guarda la gallery</a>
                    </div>
                </div>
                <div class="pic_card_container">
                    <img class="pic_card" src="img-samples/photo-1579126999978-eac334843123.jpg">
                </div>
                <div class="green_card">
                    <img class="pic_card" src="img-samples/photo-1579160855213-a6e60979eecf.jpg">
                </div>
                <div class="pink_card">
                    <img class="pic_card" src="img-samples/photo-1579164618222-dfb28558a476.jpg">
                </div>
            </div>

</div>
<?php include "footer.php"?>