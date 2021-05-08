<?php require_once('connect.php'); ?>

<?php $result = $conn->query($get_single_portfolio_item); ?>

<div class="modal-container" id="container">







    <?php while ($row = $result->fetch_assoc()) {

        $img_type = $row['case_img_type'];

        switch ($img_type) {
            case "img":
                $content_to_place = '<img src="img/' . $row['case_img_path'] . '.png" alt="" srcset="">';
                break;
            case "video":
                $content_to_place = '<video src="img/' . $row['case_img_path'] . '.mkv" alt="" srcset="" autoplay muted loop>';
        }
    ?>

        <div class="flex-between flex-start">

            <div>
                <h1><?php echo ($row['case_title']); ?></h1>
                <span><?php echo ($row['case_subtitle']); ?></span>
            </div>
            <a href="#" class="close-modal" id="close-modal">
                <img src="css/assets/close.svg" alt="luk vindue">
            </a>
        </div>




        <div class="content">
            <div class="left">
                <h2></h2>
                <div class="work-description">
                    <?php echo ($row['case_text']); ?>
                </div>
                <div class="options">
                    <a href="mailto:hello@marcusklausen.dk" class="button cta">
                        <img src="css/assets/mail-icon-white.svg" alt="">
                        Kontakt mig
                     </a>
                     <?php if ($row['case_url_livesite'] != 0) { ?>
                    <a href="<?php echo ($row['case_url_livesite']); ?>" target="_blank" class="button">
                        <img src="css/assets/pc-icon.svg" alt="">
                        Live site
                     </a>
                     <?php } ?>
                     <?php if ($row['case_url_github'] != 0) { ?>
                    <a href="<?php echo ($row['case_url_github']); ?>" target="_blank" class="button">
                        <img src="css/assets/github-icon.svg" alt="">
                        Github
                    </a>
                    <?php } ?>
                </div>

            </div>
            <div class="img-wrapper">
                <?php echo ($content_to_place); ?>
            </div>
            <!--<img src="img/<?php echo ($row['case_id']); ?>.png" class="full-size" alt="">-->

        </div>




</div>




<?php } ?>