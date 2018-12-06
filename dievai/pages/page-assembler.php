
<?php
include_once '/../functions/functions.pageassembler.php';
echo '<link rel="stylesheet" href="css/page-assembler.css">';

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
                <div class="col-lg-12 crop block-item">
                    <div class='block-edit-bar'>
                        <button type="button" class="btn bg-deep-purple waves-effect">
                            <i class="material-icons">settings</i>
                            <span>SETTINGS</span>
                        </button>
                    </div>
                    <img src="https://motionarray-portfolio.imgix.net/preview-83721-73b2ffab8d22cad99c5c66f9b51b4993-high.jpg" class="img-fluid max-width"  alt="Snow">
                    <H1 class="top-left">Welcome to Page Assembler</h1>
                    <p class="left-centered">Mauris dui enim, commodo at hendrerit a, pulvinar ut felis. Aliquam eu est ut nisi tincidunt facilisis. Phasellus porttitor vehicula eros, eget fermentum ex consequat vel. Nam fermentum, tortor quis congue maximus, magna dui mollis enim, vel efficitur ligula magna in urna. In interdum ipsum sit amet commodo lobortis. Aliquam erat volutpat. Morbi vitae nisi quis urna semper bibendum. Aenean hendrerit vel mi sit amet fringilla. Nunc convallis dui sed ultrices rhoncus. Vestibulum ac pulvinar erat. Proin dignissim ultricies metus eu luctus. Vivamus in bibendum quam. Aenean non fermentum nisi, a ultrices nisl. Sed sit amet tincidunt est. Nulla sit amet nibh turpis. Curabitur a finibus enim, a volutpat justo.</p>
                    <button type="submit" class ="bottom-right">BUTTON</button>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-lg-8 crop block-item">
                    <div class='block-edit-bar'>
                        <button type="button" class="btn bg-deep-purple waves-effect">
                            <i class="material-icons">settings</i>
                            <span>SETTINGS</span>
                        </button>
                    </div>
                    <img src="https://image.shutterstock.com/z/stock-vector-colorful-geometric-background-fluid-shapes-composition-eps-vector-1033073062.jpg" class="img-fluid max-width"  alt="Snow">
                </div>
                <div class="col-lg-4 text-justify pt-4 block-item">
                    <div class='block-edit-bar'>
                        <button type="button" class="btn bg-deep-purple waves-effect">
                            <i class="material-icons">settings</i>
                            <span>SETTINGS</span>
                        </button>
                    </div>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat sit amet magna in dignissim. Pellentesque consectetur vestibulum metus, blandit posuere ligula sollicitudin non. Suspendisse eu pharetra sem. Nunc non dapibus enim. Vivamus tincidunt nunc augue, blandit auctor nulla consequat nec. Pellentesque et urna elementum nunc suscipit tristique. Sed vel diam a quam pellentesque consectetur. Curabitur varius aliquam lectus vitae dignissim. Nulla ut justo rutrum, posuere nunc ac, hendrerit libero. Nullam vehicula libero pulvinar malesuada rhoncus. In maximus velit aliquet tortor auctor, vitae posuere urna vehicula.</span>
                </div>
            </div>
            <div class="row-fluid">
                <div class="col-lg-2 crop block-item">
                    <div class='block-edit-bar'>
                        <button type="button" class="btn bg-deep-purple waves-effect">
                            <i class="material-icons">settings</i>
                            <span>SETTINGS</span>
                        </button>
                    </div>
                    <img src="https://image.shutterstock.com/z/stock-vector-colorful-geometric-background-fluid-shapes-composition-eps-vector-1033073062.jpg" class="img-fluid max-width"  alt="Snow">
                </div>
                <div class="col-lg-2 crop block-item">
                    <div class='block-edit-bar'>
                        <button type="button" class="btn bg-deep-purple waves-effect">
                            <i class="material-icons">settings</i>
                            <span>SETTINGS</span>
                        </button>
                    </div>
                    <img src="https://image.shutterstock.com/z/stock-vector-colorful-geometric-background-fluid-shapes-composition-eps-vector-1033073062.jpg" class="img-fluid max-width"  alt="Snow">
                </div>
                <div class="col-lg-2 crop block-item">
                    <div class='block-edit-bar'>
                        <button type="button" class="btn bg-deep-purple waves-effect">
                            <i class="material-icons">settings</i>
                            <span>SETTINGS</span>
                        </button>
                    </div>
                    <img src="https://image.shutterstock.com/z/stock-vector-colorful-geometric-background-fluid-shapes-composition-eps-vector-1033073062.jpg" class="img-fluid max-width"  alt="Snow">
                </div>
                <div class="col-lg-2 crop block-item">
                    <div class='block-edit-bar'>
                        <button type="button" class="btn bg-deep-purple waves-effect">
                            <i class="material-icons">settings</i>
                            <span>SETTINGS</span>
                        </button>
                    </div>
                    <img src="https://image.shutterstock.com/z/stock-vector-colorful-geometric-background-fluid-shapes-composition-eps-vector-1033073062.jpg" class="img-fluid max-width"  alt="Snow">
                </div>
                <div class="col-lg-2 crop block-item">
                    <div class='block-edit-bar'>
                        <button type="button" class="btn bg-deep-purple waves-effect">
                            <i class="material-icons">settings</i>
                            <span>SETTINGS</span>
                        </button>
                    </div>
                    <img src="https://image.shutterstock.com/z/stock-vector-colorful-geometric-background-fluid-shapes-composition-eps-vector-1033073062.jpg" class="img-fluid max-width"  alt="Snow">
                </div>
                <div class="col-lg-2 crop block-item">
                    <div class='block-edit-bar'>
                        <button type="button" class="btn bg-deep-purple waves-effect">
                            <i class="material-icons">settings</i>
                            <span>SETTINGS</span>
                        </button>
                    </div>
                    <img src="https://image.shutterstock.com/z/stock-vector-colorful-geometric-background-fluid-shapes-composition-eps-vector-1033073062.jpg" class="img-fluid max-width"  alt="Snow">
                </div>
            </div>
        </div>
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