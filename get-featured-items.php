<?php require_once('connect.php'); ?>

<?php $result = $conn->query($get_all_featured_items);?>
        

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






<section class="featured">
            <div class="portfolio-container">
                <div class="inner">
                <span>Fremhævet arbejde</span>
                <a href="<?php echo($row['case_id']);?>" class="open-work-item">
                    <h3><?php echo($row['case_title']);?></h3>
                    </a>
                    
        <p><?php echo($row['case_caption']);?></p>
    </div>
            </div>
        

            
<?php echo($content_to_place); ?>

</section>







<?php } ?>