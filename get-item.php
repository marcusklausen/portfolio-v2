<?php require_once('connect.php');?>

<?php $result = $conn->query($get_single_portfolio_item);?>

<div class="modal-container" id="container">




        


        <?php while($row = $result->fetch_assoc()) {     
            
            $img_type = $row['case_img_type'];
    
    switch ($img_type) {
        case "img":
            $content_to_place = '<img src="img/' . $row['case_img_path'] . '.png" alt="" srcset="">';
            break;
        case "video":
            $content_to_place = '<video src="img/' . $row['case_img_path'] . '.mkv" alt="" srcset="" autoplay muted loop>';
    }
    ?>
            
            <div class="flex-between">

                <div>
                    <h1><?php echo($row['case_title']);?></h1>
                    <span><?php echo($row['case_subtitle']);?></span>
                </div>
                <a href="#" class="close-modal" id="close-modal">
                    <img src="css/assets/close.svg" alt="luk vindue">
                </a>
            </div>

        


            <div class="content">
                    <div>
                        <h2></h2>
                        <div class="work-description">
                            <?php echo($row['case_text']);?>
                        </div>
                        <div class="buttons">
                    <button class="cta">
                        <img src="css/assets/mail-icon.svg" alt="">Send mig en mail</button>
                    <button><img src="css/assets/file-icon.svg" alt="">Hent CV</button>

</div>

                    </div>
                    <div class="img-wrapper">
                        <?php echo($content_to_place); ?>
                    </div>
                <!--<img src="img/<?php echo($row['case_id']);?>.png" class="full-size" alt="">-->
            
            </div>


            

        </div>


        

<?php } ?>