<?php

/*******w******** 
    
    Name:Samanpreet Kaur
    Date:19TH May 2024
    Description:My goal for this assignment is to build a dynamic image gallery using the Unsplash Image Source service. 
    I Have used  a PHP data-structure to store the configuration parameters for my gallery.  
 

****************/

$config = [
    'gallery_name' => 'Samans Gallery',
    'unsplash_categories' => ['Nature','Vibe','Food','Focus','Work','Animals'],
    'local_images' => [
        ['filename' => 'img1.jpg', 'photographer' => ['name' => 'Luca Bravo', 'url' => 'https://unsplash.com/@lucabravo']],
        ['filename' => 'img2.jpg', 'photographer' => ['name' => 'Damian Ochrymowchiz', 'url' => 'https://unsplash.com/@damian_ochrymowicz']],
        ['filename' => 'img3.jpg', 'photographer' => ['name' => 'Sebastian Huber', 'url' => 'https://unsplash.com/@sebastianhuber']],
        ['filename' => 'img4.jpg', 'photographer' => ['name' => 'Eberhard Grossgastier', 'url' => 'https://unsplash.com/@eberhardgross']]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title><?= $config['gallery_name']; ?></title>
</head>
<body>
    <!-- Remember that alternative syntax is good and html inside php is bad -->
    <h1><?php echo $config['gallery_name']; ?></h1>
    
    <div class="gallery">
    <?php for ($i = 0; $i < count($config['unsplash_categories']); $i++): ?>
        <h2><?php echo $config['unsplash_categories'][$i]; ?></h2>
        <img src="https://source.unsplash.com/300x200/?<?php echo $config['unsplash_categories'][$i]; ?>" alt="<?php echo $config['unsplash_categories'][$i]; ?> image">
    <?php endfor; ?>
</div>

<div class="gallery2">
    <h1><?php echo count($config['local_images']); ?> Large Images</h1>
    <?php for ($i = 0; $i < count($config['local_images']); $i++): ?>
        <div class="local-image">
            <a href="<?php echo $config['local_images'][$i]['photographer']['url']; ?>" target="_blank">
                <img src="images/<?php echo $config['local_images'][$i]['filename']; ?>" alt="<?php echo $config['local_images'][$i]['filename']; ?>">
                <h3><?php echo $config['local_images'][$i]['photographer']['name']; ?></h3>
            </a>
        </div>
    <?php endfor; ?>
</div>
</body>
</html>