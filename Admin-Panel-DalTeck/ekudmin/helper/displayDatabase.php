<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<section class="section-pad">
        <div class="container">
            <div class="section-header">
                <h3>Security Resource Center</h3>
                <p>Stay on top of emerging website security threats with our DIY guides, skill-building email course, and our security insights blog.</p>
            </div>
            <div class="row">
            <?php
                $Query = "SELECT * FROM  WHERE status = 1";
                $Result = mysqli_query($conn, $Query);
                if ($Result->num_rows > 0) {            
                    while($row = mysqli_fetch_array($Result))
                    {
            ?> 
                <div class="col-lg-4">
                    <div class="service-box d-flex flex-column red-shadow">
                        <img src="<?php echo $row['image'];?>" alt="Image Not Found">
                        <div class="service-box-content">
                            <h4><?php echo $row['title'];?></h4>
                            <p><?php echo $row['shortdescription'];?></p>
                        </div>
                        <div class="learn-btn mt-auto">
                            <a href="<?php echo $row['url'];?>" target="_blank" class="btn">Learn More</a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                }
                else
                {
                    echo "No Result Found";
                }
            ?>	
            </div>
        </div>
    </section>
    
</body>
</html>
