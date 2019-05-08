<section class="kinologi-section first-section">
    <div class="row sec-one-boxrow">
        <div class="col-7 kin-light-gray left-box kin-left-shadow" id="sec_one_l_box">
                <p class="kinologi-slogan">
                    <?php 
                        $slogan = esc_attr( get_option('slogan'));  
                        $defoult = 'Кинологический центр Регул групп';
                        ($slogan != null) ? : $slogan = $defoult;
                        echo $slogan;
                     ?>
                </p>
                <h1>
                    <?php 
                        $title = esc_attr( get_option('title'));  
                        $defoult = 'Полный спектр <br /> кинологических услуг';
                        ($title != null) ? : $title = $defoult;
                        echo $title;
                     ?>
                </h1>
        </div>
        <div class="col-5 kin-dark-blue rigt-box"></div>
    </div>
</section>