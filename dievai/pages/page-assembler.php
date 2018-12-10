<?php

include_once '/../functions/functions.pageassembler.php';
echo '<link rel="stylesheet" href="css/page-builder.css">';


if ( !defined( "OK" ) ) {
	redirect( 'location: http://' . $_SERVER["HTTP_HOST"] );
}

if(BUTTONS_BLOCK) {
	lentele($lang['admin']['pageassembler'], buttonsMenu(buttons('pageassembler')));
}

if (isset($url['c'])) {
    if ($url['c'] == 'main') {
        $settings = [ 
            "Form" => [
                "action" 	=> "", 
                "method" 	=> "post", 
                "enctype" 	=> "", 
                "id" 		=> "", 
                "class" 	=> "", 
                "name" 		=> "reg"
            ]
        ];
        $formClass = new Form($settings);
        lentele($lang['admin']['pageassembler_add'], $formClass->form());
        ?>

        <div id="page-builder-zone">
        </div>
        <div class="row">
            <div class="dropdown col-lg-12">
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Add New Block
                <span class="caret"></span></button>
                <ul class="dropdown-menu main-dropdown">
                    <li class="dropdown-submenu">
                        <a class="test" tabindex="-1" href="#">Text Blocks<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" class="add-block test" data-href="config/blocks/text_blocks/title-block.html">Title Block </a></li>
                            <li><a tabindex="-1" class="add-block test" data-href="config/blocks/text_blocks/heading-block.html">Heading Block</a></li>
                            <li><a tabindex="-1" class="add-block test" data-href="config/blocks/text_blocks/paragraph-block.html">Paragraph Block</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a class="test" tabindex="-1" href="#">Image Blocks<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" class="add-block test"  data-href="config/blocks/image_blocks/image-block.html">Image Block</a></li>
                            <li><a tabindex="-1" class="add-block test"  data-href="config/blocks/image_blocks/image-description-block.html">Image with Description Block</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a class="test" tabindex="-1" href="#">Button Blocks<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" class="add-block test" data-href="config/blocks/button_blocks/default-button-block.html">Default Button Block</a></li>
                            <li><a tabindex="-1" class="add-block test" data-href="config/blocks/button_blocks/danger-button-block.html">Danger Button Block</a></li>
                            <li><a tabindex="-1" class="add-block test" data-href="config/blocks/button_blocks/button-group-block.html">Button Group Block</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a class="test" tabindex="-1" href="#">Gallery Blocks<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" class="add-block test" data-href="config/blocks/gallery_blocks/simple-gallery-block.html">Simple Gallery Block</a></li>
                            <li><a tabindex="-1" class="add-block test" data-href="config/blocks/gallery_blocks/carousel-gallery-block.html">Carousel Gallery Block</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a class="test" tabindex="-1" href="#">List Blocks<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" class="add-block test" data-href="config/blocks/list_blocks/simple-list-block.html">Simple List Block</a></li>
                            <li><a tabindex="-1" class="add-block test" data-href="config/blocks/list_blocks/menu-list-block.html">Menu List Block</a></li>
                            <li><a tabindex="-1" class="add-block test" data-href="config/blocks/list_blocks/table-block.html">Table Block</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a class="test" tabindex="-1" href="#">Form Blocks<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" class="add-block test" data-href="config/blocks/form_blocks/registration-form-block.html">Registration Form Block</a></li>
                            <li><a tabindex="-1" class="add-block test" data-href="config/blocks/form_blocks/feedback-form-block.html">Feedback Form Block</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <script src="js/blocks.js"></script>
        <script src="../dievai/js/manuimage.js"></script>
    <?php }  
    if ($url['c'] == 'list') {
        $settings = [ 
            "Form" => [
                "action" 	=> "", 
                "method" 	=> "post", 
                "enctype" 	=> "", 
                "id" 		=> "", 
                "class" 	=> "", 
                "name" 		=> "reg"
            ]
            ];
        $formClass = new Form($settings);
        lentele($lang['admin']['pageassembler_list'], $formClass->form());
    }
    if ($url['c'] == 'settings') {
        $settings = [ 
            "Form" => [
                "action" 	=> "", 
                "method" 	=> "post", 
                "enctype" 	=> "", 
                "id" 		=> "", 
                "class" 	=> "", 
                "name" 		=> "reg"
            ]
            ];
        $formClass = new Form($settings);
        lentele($lang['admin']['pageassembler_settings'], $formClass->form());
    }
}


?>