<?php require_once('connect.php');?>

<?php $result = $conn->query($get_single_portfolio_item);?>

<div class="modal-container box-shadox" id="container">

    <main>

        <div class="article spacing">

        


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

                    </div>
                    <div class="img-wrapper">
                        <?php echo($content_to_place); ?>
                    </div>
                <!--<img src="img/<?php echo($row['case_id']);?>.png" class="full-size" alt="">-->
            
            </div>


            

        </div>


        <div class="action">
            <nav>
                <ul>
                <a href="files/Marcus-CV-2021.pdf" class="nav-btn-white-outlined">
                        <li>Hent CV</li>
                    </a>
                    <a href="mailto:hello@marcusklausen.dk" class="filled">
                        <li>Send mig en email</li>
                    </a>
                </ul>
            </nav>
        </div>

        



    </main>

<?php } ?>