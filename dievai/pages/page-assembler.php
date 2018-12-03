
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
    if ($url['c'] == 'seo') {
        if (isset($_POST) && !empty($_POST) && isset($_POST['Konfiguracija'])) {
            $q = [];
            $q[] = "INSERT INTO `" . LENTELES_PRIESAGA . "nustatymai` (`val`,`key`) VALUES (" . escape( $_POST['Pavadinimas'] ) . ",'Puslapio pavadinimas')  ON DUPLICATE KEY UPDATE `val`=" . escape( $_POST['Pavadinimas'] ) . "";
            $q[] = "INSERT INTO `" . LENTELES_PRIESAGA . "nustatymai` (`val`,`key`) VALUES (" . escape( $_POST['metaPavadinimas'] ) . ",'Meta pavadinimas')  ON DUPLICATE KEY UPDATE `val`=" . escape( $_POST['metaPavadinimas'] ) . "";
            $q[] = "INSERT INTO `" . LENTELES_PRIESAGA . "nustatymai` (`val`,`key`) VALUES (" . escape( $_POST['metaAprasymas'] ) . ",'Meta aprasymas')  ON DUPLICATE KEY UPDATE `val`=" . escape( $_POST['metaAprasymas'] ) . "";
            $q[] = "INSERT INTO `" . LENTELES_PRIESAGA . "nustatymai` (`val`,`key`) VALUES (" . escape( $_POST['metaKeywords'] ) . ",'Meta Keywords')  ON DUPLICATE KEY UPDATE `val`=" . escape( $_POST['metaKeywords'] ) . "";
            $q[] = "INSERT INTO `" . LENTELES_PRIESAGA . "nustatymai` (`val`,`key`) VALUES (" . escape( $_POST['F_urls'] ) . ",'F_urls')  ON DUPLICATE KEY UPDATE `val`=" . escape( $_POST['F_urls'] );
            foreach ($q as $sql) {
                mysql_query($sql);
            }
            delete_cache( "SELECT id, reg_data, gim_data, login_data, nick, vardas, levelis, pavarde FROM `" . LENTELES_PRIESAGA . "users` WHERE levelis=1 OR levelis=2" );
            
            redirect(
                url("?id," . $url['id'] . ";a," . $url['a'] . ";c," . $url['c']),
                "header",
                [
                    'type'      => 'success',
                    'message'   => $lang['admin']['configuration_updated']
                ]
            );

        }
        $settings = [
            "Form" => [
                "action"    => "", 
                "method"    => "post", 
                "enctype"   => "", 
                "id"        => "", 
                "class"     => "", 
                "name"      => "reg"
            ],
            $lang['admin']['title']  => [
                "type"  => "text", 
                "value" => input( $pageConfig['Pavadinimas'] ), 
                "name"  => "Pavadinimas"
            ],
            $lang['admin']['metaTitle']  => [
                "type"  => "text", 
                "value" => input( $pageConfig['metaTitle'] ), 
                "name"  => "metaPavadinimas"
            ],
            $lang['admin']['metaDescription']  => [
                "type"  => "text", 
                "value" => input( $pageConfig['metaDescription'] ), 
                "name"  => "metaAprasymas"
            ],
            $lang['admin']['metaKeywords']  => [
                "type"  => "text", 
                "value" => input( $pageConfig['metaKeywords'] ), 
                "name"  => "metaKeywords"
            ],
            
            "Friendly url:"             => [
                "type"      => "select", 
                "value"     =>  [
                    '/'=> '/', 
                    ';'=> ';', 
                    '0'=> $lang['admin']['off']
                ], 
                "selected"  => $pageConfig['F_urls'], 
                "name"      => "F_urls"
            ],
            ""                                     => [
                "type"      => "submit", 
                "name"      => "Konfiguracija", 
                "value"     => $lang['admin']['save'], 
                'form_line' => 'form-not-line',
            ]
        ];
        $formClass = new Form($settings);
        lentele($lang['admin']['configuration_seo'], $formClass->form());

    }
    if ($url['c'] == 'main') {
        $settings = [ 
            "Form" => [
                "action" 	=> "", 
                "method" 	=> "post", 
                "enctype" 	=> "", 
                "id" 		=> "", 
                "class" 	=> "", 
                "name" 		=> "reg"
            ],
            $lang['admin']['email']           => [
                "type"  => "text", 
                "value" => input($conf['Pastas']), 
                "name"  => "Pastas"
            ],
            ""                                     => [
                "type"      => "submit", 
                "name"      => "Konfiguracija", 
                "value"     => $lang['admin']['save'], 
                'form_line' => 'form-not-line',
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
            <div class="row">
                <div class="col-lg-12 crop">
                    <img src="https://motionarray-portfolio.imgix.net/preview-83721-73b2ffab8d22cad99c5c66f9b51b4993-high.jpg" class="img-fluid max-width"  alt="Snow">
                    <H1 class="top-left">Welcome to Page Assembler</h1>
                    <p class="left-centered">Mauris dui enim, commodo at hendrerit a, pulvinar ut felis. Aliquam eu est ut nisi tincidunt facilisis. Phasellus porttitor vehicula eros, eget fermentum ex consequat vel. Nam fermentum, tortor quis congue maximus, magna dui mollis enim, vel efficitur ligula magna in urna. In interdum ipsum sit amet commodo lobortis. Aliquam erat volutpat. Morbi vitae nisi quis urna semper bibendum. Aenean hendrerit vel mi sit amet fringilla. Nunc convallis dui sed ultrices rhoncus. Vestibulum ac pulvinar erat. Proin dignissim ultricies metus eu luctus. Vivamus in bibendum quam. Aenean non fermentum nisi, a ultrices nisl. Sed sit amet tincidunt est. Nulla sit amet nibh turpis. Curabitur a finibus enim, a volutpat justo.</p>
                    <button type="submit" class ="bottom-right">BUTTON</button>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-lg-8 crop">
                    <img src="https://image.shutterstock.com/z/stock-vector-colorful-geometric-background-fluid-shapes-composition-eps-vector-1033073062.jpg" class="img-fluid max-width"  alt="Snow">
                </div>
                <div class="col-lg-4 text-justify pt-4">
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat sit amet magna in dignissim. Pellentesque consectetur vestibulum metus, blandit posuere ligula sollicitudin non. Suspendisse eu pharetra sem. Nunc non dapibus enim. Vivamus tincidunt nunc augue, blandit auctor nulla consequat nec. Pellentesque et urna elementum nunc suscipit tristique. Sed vel diam a quam pellentesque consectetur. Curabitur varius aliquam lectus vitae dignissim. Nulla ut justo rutrum, posuere nunc ac, hendrerit libero. Nullam vehicula libero pulvinar malesuada rhoncus. In maximus velit aliquet tortor auctor, vitae posuere urna vehicula.</span>
                </div>
            </div>
            <div class="row-fluid">
                <div class="col-lg-2 crop">
                    <img src="https://image.shutterstock.com/z/stock-vector-colorful-geometric-background-fluid-shapes-composition-eps-vector-1033073062.jpg" class="img-fluid max-width"  alt="Snow">
                </div>
                <div class="col-lg-2 crop">
                    <img src="https://image.shutterstock.com/z/stock-vector-colorful-geometric-background-fluid-shapes-composition-eps-vector-1033073062.jpg" class="img-fluid max-width"  alt="Snow">
                </div>
                <div class="col-lg-2 crop">
                    <img src="https://image.shutterstock.com/z/stock-vector-colorful-geometric-background-fluid-shapes-composition-eps-vector-1033073062.jpg" class="img-fluid max-width"  alt="Snow">
                </div>
                <div class="col-lg-2 crop">
                    <img src="https://image.shutterstock.com/z/stock-vector-colorful-geometric-background-fluid-shapes-composition-eps-vector-1033073062.jpg" class="img-fluid max-width"  alt="Snow">
                </div>
                <div class="col-lg-2 crop">
                    <img src="https://image.shutterstock.com/z/stock-vector-colorful-geometric-background-fluid-shapes-composition-eps-vector-1033073062.jpg" class="img-fluid max-width"  alt="Snow">
                </div>
                <div class="col-lg-2 crop">
                    <img src="https://image.shutterstock.com/z/stock-vector-colorful-geometric-background-fluid-shapes-composition-eps-vector-1033073062.jpg" class="img-fluid max-width"  alt="Snow">
                </div>
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