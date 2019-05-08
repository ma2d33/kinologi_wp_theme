<section class="kinologi-section second-section">
    <div class="row" id="sec_two_boxrow">
        <div class="col-7 kin-light-gray left-box kin-left-shadow"></div>
        <div class="col-5 kin-dark-blue rigt-box "></div>
        
        <!-- get images -->
        <?php 
            $textbox1_image = esc_attr(get_option('textbox1_image'));;
            ($textbox1_image != null) ? : $textbox1_image = get_template_directory_uri() .'/content/img/pet-insurance.png';
            $textbox2_image = esc_attr(get_option('textbox2_image'));
            ($textbox2_image != null) ? : $textbox2_image = get_template_directory_uri() .'/content/img/cvalification.png';
            $textbox3_image = esc_attr(get_option('textbox3_image'));
            ($textbox3_image != null) ? : $textbox3_image = get_template_directory_uri() .'/content/img/awward.icon.png';
         ?>

        <div class="kin-text-flex-container">
                <div class="kin-text-flex-item">
                    <?php
                        echo '<div class="textbox-img" style="background-image: url('.$textbox1_image.')"></div>';
                    ?>
                    <div class="textbox-text">
                        <h3>Качество</h3>
                        <p>Все наши собаки сертифицированы по поиску взрывчатых веществ Экспертно-консультационным Советом </p>
                    </div>
                </div>
                <div class="kin-text-flex-item">
                    <?php
                        echo '<div class="textbox-img" style="background-image: url('.$textbox2_image.')"></div>';
                    ?>
                    <div class="textbox-text">
                        <h3>Качество</h3>
                        <p>Все наши собаки сертифицированы по поиску взрывчатых веществ Экспертно-консультационным Советом </p>
                    </div>
                </div>
                <div class="kin-text-flex-item">
                    <?php
                        echo '<div class="textbox-img" style="background-image: url('.$textbox3_image.')"></div>';
                    ?>
                    <div class="textbox-text">
                        <h3>Качество</h3>
                        <p>Все наши собаки сертифицированы по поиску взрывчатых веществ Экспертно-консультационным Советом </p>
                    </div>
                </div>
        </div><!--.kin-text-flex-container-->

    </div>
</section>