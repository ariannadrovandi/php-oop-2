<?php
include __DIR__ . '/../Models/ProductType.php';


$products = [
    new ProductType ('Mangime per cani', 30, 'https://images.eprice.it/nobrand/0/Lightbox/637/301584637/a73e4b2e20023fb53b936c6e4913f208.jpg', new Category('cibo', 'animal-feed') ),
    new ProductType ('Mangime per gatti', 10, 'https://www.pacopetshop.it/11632-thickbox_default/leonardo-pura-carne-di-pollame-cibo-umido-per-gatti.jpg', new Category('cibo', 'animal-feed')) ,
    new ProductType ('Palla per cani', 3, 'https://www.pacopetshop.it/3500-thickbox_default/palla-5-sensi-gioco-per-cani.jpg', new Category('gioco', 'palla')),
    new ProductType ('Gioco per gatti', 10, 'https://www.dmail.it/on/demandware.static/-/Sites-dret-catalog/default/dw2e740ba3/images_dmail/large/509459l_1.jpg', new Category('gioco', 'mouse')),
    new ProductType ('Cuccia per cani', 40, 'https://www.omlet.it/images/cache/512/512/topology-medium-memory-foam-dog-bed-with-grey-microfibre-topper-and-wooden-feet-kit.jpg', new Category('kennel', 'cuccia')),
    new ProductType ('Cuccia per gatti', 20, 'https://i.ebayimg.com/images/g/DJAAAOSwwDdjBNgj/s-l1600.jpg', new Category('kennel', 'cuccia')),
];

?>