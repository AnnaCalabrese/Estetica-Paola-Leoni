<?php
    get_header();
    ?>

 <section class="chisiamo-container">
      <div class="chisiamo-content">
        <h1>chi siamo?</h1>
        <br />
        <p>
          Benvenuto nel centro estetico di Paola Leoni, ad aspettarti troverai
          un ambiente accogliente dove ci prenderemo cura di te. Qui avrai
          l'opportunità di usufruire di trattamenti di bellezza ed estetici
          personalizzati di ultima generazione per viso e corpo. <br />
          Ad accoglierti troverai Paola, estetista da 15 anni, e il suo staff,
          che sapranno soddisfare ogni tua esigenza.
        </p>
      </div>
      <div class="chisiamo-fotostudio" style="background-image: url(<?php echo get_theme_file_uri('/img/studio.jpg')?>;"></div>
      <div class="chisiamo-fotocolleghi" style="background-image: url(<?php echo get_theme_file_uri('/img/colleghi.jpg')?>;"></div>
      <div class="chisiamo-content">
        <p>
          Sono disponibili trattamenti viso e corpo, massaggi, epilazione
          parziale e/o totale, manicure e pedicure sia per lei che per lui.
          <br />
          <br />
          <a href="<?php echo site_url('/servizi')?>"
            ><button class="button btn cta">scopri i nostri servizi</button></a
          >
        </p>
      </div>
    </section>

    <?php
    get_footer();
    ?>
