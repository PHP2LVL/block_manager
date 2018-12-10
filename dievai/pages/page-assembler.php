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
                <!-- 
                    ZONA BLOKŲ DĖLIOJIMUI 
                    IR PUSLAPIO KONSTRAVIMUI
                -->
                <!-- <div class="manu-image-area">img</div> -->
                <div class="row">
                    <div class="col-lg-12 crop">
                        <img src="https://motionarray-portfolio.imgix.net/preview-83721-73b2ffab8d22cad99c5c66f9b51b4993-high.jpg" class="img-fluid max-width"  alt="Snow">
                        <H1 class="top-left">Welcome to Page Assembler</h1>
                        <p class="left-centered">Mauris dui enim, commodo at hendrerit a, pulvinar ut felis. Aliquam eu est ut nisi tincidunt facilisis. Phasellus porttitor vehicula eros, eget fermentum ex consequat vel. Nam fermentum, tortor quis congue maximus, magna dui mollis enim, vel efficitur ligula magna in urna. In interdum ipsum sit amet commodo lobortis. Aliquam erat volutpat. Morbi vitae nisi quis urna semper bibendum. Aenean hendrerit vel mi sit amet fringilla. Nunc convallis dui sed ultrices rhoncus. Vestibulum ac pulvinar erat. Proin dignissim ultricies metus eu luctus. Vivamus in bibendum quam. Aenean non fermentum nisi, a ultrices nisl. Sed sit amet tincidunt est. Nulla sit amet nibh turpis. Curabitur a finibus enim, a volutpat justo.</p>
                        <button type="submit" class ="bottom-right">BUTTON</button>
                    </div>
                </div>
            </div>
            <div class="row d-flex holder" id='1'> <!-- PARENT BLOCK-->
                <div class="col-lg-8 crop"  onclick="addClassBox(this)" id='556'>
                    <div class="row d-flex" id = '222'> 
                        <div class="col-lg-4 text-justify pt-4">
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat sit amet magna in dignissim. Pellentesque consectetur vestibulum metus, blandit posuere ligula sollicitudin non. Suspendisse eu pharetra sem. Nunc non dapibus enim. Vivamus tincidunt nunc augue, blandit auctor nulla consequat nec. Pellentesque et urna elementum nunc suscipit tristique. Sed vel diam a quam pellentesque consectetur. Curabitur varius aliquam lectus vitae dignissim. Nulla ut justo rutrum, posuere nunc ac, hendrerit libero. Nullam vehicula libero pulvinar malesuada rhoncus. In maximus velit aliquet tortor auctor, vitae posuere urna vehicula.</span>
                        </div>
                        <div class="col-lg-4 text-justify pt-4">
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat sit amet magna in dignissim. Pellentesque consectetur vestibulum metus, blandit posuere ligula sollicitudin non. Suspendisse eu pharetra sem. Nunc non dapibus enim. Vivamus tincidunt nunc augue, blandit auctor nulla consequat nec. Pellentesque et urna elementum nunc suscipit tristique. Sed vel diam a quam pellentesque consectetur. Curabitur varius aliquam lectus vitae dignissim. Nulla ut justo rutrum, posuere nunc ac, hendrerit libero. Nullam vehicula libero pulvinar malesuada rhoncus. In maximus velit aliquet tortor auctor, vitae posuere urna vehicula.</span>
                        </div>
                        <div class="col-lg-4 text-justify pt-4">
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat sit amet magna in dignissim. Pellentesque consectetur vestibulum metus, blandit posuere ligula sollicitudin non. Suspendisse eu pharetra sem. Nunc non dapibus enim. Vivamus tincidunt nunc augue, blandit auctor nulla consequat nec. Pellentesque et urna elementum nunc suscipit tristique. Sed vel diam a quam pellentesque consectetur. Curabitur varius aliquam lectus vitae dignissim. Nulla ut justo rutrum, posuere nunc ac, hendrerit libero. Nullam vehicula libero pulvinar malesuada rhoncus. In maximus velit aliquet tortor auctor, vitae posuere urna vehicula.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4"  onclick="addClassBox(this)" id='546'>
                    <img src="https://motionarray-portfolio.imgix.net/preview-83721-73b2ffab8d22cad99c5c66f9b51b4993-high.jpg" class="max-plotis"  alt="Snow">                  
                </div>
            </div>

            <div class="row d-flex holder" id='3'>
                <div class="col-lg-8 crop"  onclick="addClassBox(this)" id='557' >
                    <div class="row d-flex" draggable="true" id = '223'>  <!-- PARENT BLOCK-->
                        <div class="col-lg-4 text-justify pt-4">
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat sit amet magna in dignissim. Pellentesque consectetur vestibulum metus, blandit posuere ligula sollicitudin non. Suspendisse eu pharetra sem. Nunc non dapibus enim. Vivamus tincidunt nunc augue, blandit auctor nulla consequat nec. Pellentesque et urna elementum nunc suscipit tristique. Sed vel diam a quam pellentesque consectetur. Curabitur varius aliquam lectus vitae dignissim. Nulla ut justo rutrum, posuere nunc ac, hendrerit libero. Nullam vehicula libero pulvinar malesuada rhoncus. In maximus velit aliquet tortor auctor, vitae posuere urna vehicula.</span>
                        </div>
                        <div class="col-lg-4 text-justify pt-4">
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat sit amet magna in dignissim. Pellentesque consectetur vestibulum metus, blandit posuere ligula sollicitudin non. Suspendisse eu pharetra sem. Nunc non dapibus enim. Vivamus tincidunt nunc augue, blandit auctor nulla consequat nec. Pellentesque et urna elementum nunc suscipit tristique. Sed vel diam a quam pellentesque consectetur. Curabitur varius aliquam lectus vitae dignissim. Nulla ut justo rutrum, posuere nunc ac, hendrerit libero. Nullam vehicula libero pulvinar malesuada rhoncus. In maximus velit aliquet tortor auctor, vitae posuere urna vehicula.</span>
                        </div>
                        <div class="col-lg-4 text-justify pt-4">
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat sit amet magna in dignissim. Pellentesque consectetur vestibulum metus, blandit posuere ligula sollicitudin non. Suspendisse eu pharetra sem. Nunc non dapibus enim. Vivamus tincidunt nunc augue, blandit auctor nulla consequat nec. Pellentesque et urna elementum nunc suscipit tristique. Sed vel diam a quam pellentesque consectetur. Curabitur varius aliquam lectus vitae dignissim. Nulla ut justo rutrum, posuere nunc ac, hendrerit libero. Nullam vehicula libero pulvinar malesuada rhoncus. In maximus velit aliquet tortor auctor, vitae posuere urna vehicula.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-justify pt-4" onclick="addClassBox(this)" id='558' >
                    <span id = '242'> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat sit amet magna in dignissim. Pellentesque consectetur vestibulum metus, blandit posuere ligula sollicitudin non. Suspendisse eu pharetra sem. Nunc non dapibus enim. Vivamus tincidunt nunc augue, blandit auctor nulla consequat nec. Pellentesque et urna elementum nunc suscipit tristique. Sed vel diam a quam pellentesque consectetur. Curabitur varius aliquam lectus vitae dignissim. Nulla ut justo rutrum, posuere nunc ac, hendrerit libero. Nullam vehicula libero pulvinar malesuada rhoncus. In maximus velit aliquet tortor auctor, vitae posuere urna vehicula.</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="dropdown col-lg-12">
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Add New Block
                <span class="caret"></span></button>
                <?php $categoriesDir = 'config/blocks/'; ?>
                <?php $categories = array_diff(scandir($categoriesDir), array('..', '.')); ?>
                <ul class="dropdown-menu main-dropdown">
                    <?php foreach ($categories as $category): ?>
                        <?php echo '<li class="dropdown-submenu">'?>
                            <?php echo '<a class="test" tabindex="-1" href="#">'.$category.'<span class="caret"></span></a>'?>
                            <?php echo '<ul class="dropdown-menu">' ?>
                                <?php $blocksDir = 'config/blocks/'.$category; ?>
                                <?php $blocks = array_diff(scandir($blocksDir), array('..', '.')); ?>
                                <?php foreach ($blocks as $block): ?>
                                <?php echo '<li><a tabindex="-1" class="add-block test" data-href="config/blocks/'.$category.'/'.$block.'">'.substr($block,0,-5).'</a></li>' ?>
                                <?php endforeach; ?>
                            <?php echo '</ul>'; ?>
                        <?php echo '</li>' ?>
                    <?php endforeach; ?>
                </ul>
            
            <!-- 
            ZONA BLOKŲ DĖLIOJIMUI 
            IR PUSLAPIO KONSTRAVIMUI
            -->
         
            <?php 
        $path = '..\extensions\page_assembler\elements\text\2-1-text.json';
        $content = json_decode(file_get_contents($path));
        $data =  $content->data;
        var_dump($data);
        ?>
        </div>
        <script src="js/blocks.js"></script>
        <script src="../dievai/js/manuimage.js"></script>

       
        <div class="col-lg-12">
            <input type="hidden" name='indexID' id ="indexID" value="1">
            <input type="hidden" name='parentIdInde' id ="parentIdInde" value="1">
            <button type ="submit" name="submit" onclick="saugoti()">Saugoti</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Launch demo modal </button>
        </div>
        
        <script type="text/javascript" src="js/page-assembler.js"></script>
            </div>
        </div>
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
        pageAssemblerDBexist('pa_page_settings');
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
    //Section for editing page settings
    if ($url['c'] == 'settings' && isset($url['p'])){
        var_dump($_GET);
        echo $url['p'];
    }
}


?>