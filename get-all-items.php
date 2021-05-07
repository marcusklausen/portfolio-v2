<?php require_once('connect.php'); ?>

<?php $result = $conn->query($get_all_portfolio_items);?>
        

<?php while($row = $result->fetch_assoc()) { ?>







<section class="portfolio">

<div class="portfolio-container">
    <div class="inner transition2">
        <span><?php echo($row['case_subtitle']);?></span>
        <a href="<?php echo($row['case_id']);?>" class="open-work-item">
            <h3><?php echo($row['case_title']);?></h3>
        </a>
        <p><?php echo($row['case_caption']);?></p>
        <ul>
            <li><a href="#">Live site</a></li>
            <li>Se mere</li>
        </ul>
    </div>
</div>

<img src="img/<?php echo($row['case_id']);?>.jpg" alt="" srcset="">

</section>


<?php } ?>