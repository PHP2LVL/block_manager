
<?php

include_once 'functions/functions.pageassembler.php';
echo '<link rel="stylesheet" href="css/page-assembler.css">';

if ( !defined( "OK" ) ) {
	redirect( 'location: http://' . $_SERVER["HTTP_HOST"] );
}

if(BUTTONS_BLOCK) {
	lentele($lang['admin']['pageassembler'], buttonsMenu(buttons('pageassembler')));
}

if (pageAssemblerDBexist("pa_page_settings")){
   //return error notifyMsg           
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


        <div id="page-builder-zone">


        <!-- 
            ZONA BLOKŲ DĖLIOJIMUI 
            IR PUSLAPIO KONSTRAVIMUI
        -->
            <!-- <div class="manu-image-area">img</div> -->
            <div class="row">
                <div class="col-lg-12 crop block-item insert-place">
                    <div class='block-edit-bar'>
                        <button type="button" class="btn bg-deep-purple waves-effect btn btn-primary" data-toggle="modal" data-target="#exampleModal">
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
                        <button type="button" class="btn bg-deep-purple waves-effect btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="material-icons">settings</i>
                            <span>SETTINGS</span>
                        </button>
                    </div>
                <div class="col-lg-8 crop">
                    <div class='block-edit-bar block-item'>
                        <button type="button" class="btn bg-deep-purple waves-effect btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="material-icons">settings</i>
                            <span>SETTINGS</span>
                        </button>
                    </div>
                    <img src="https://image.shutterstock.com/z/stock-vector-colorful-geometric-background-fluid-shapes-composition-eps-vector-1033073062.jpg" class="img-fluid max-width"  alt="Snow">
                </div>
                <div class="col-lg-4 text-justify pt-4">
                    <div class='block-edit-bar block-item'>
                        <button type="button" class="btn bg-deep-purple waves-effect btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="material-icons">settings</i>
                            <span>SETTINGS</span>
                        </button>
                    </div>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat sit amet magna in dignissim. Pellentesque consectetur vestibulum metus, blandit posuere ligula sollicitudin non. Suspendisse eu pharetra sem. Nunc non dapibus enim. Vivamus tincidunt nunc augue, blandit auctor nulla consequat nec. Pellentesque et urna elementum nunc suscipit tristique. Sed vel diam a quam pellentesque consectetur. Curabitur varius aliquam lectus vitae dignissim. Nulla ut justo rutrum, posuere nunc ac, hendrerit libero. Nullam vehicula libero pulvinar malesuada rhoncus. In maximus velit aliquet tortor auctor, vitae posuere urna vehicula.</span>
                </div>
            </div>
            <div class="row-fluid">
                <div class='block-edit-bar block-item'>
                    <button type="button" class="btn bg-deep-purple waves-effect btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="material-icons">settings</i>
                        <span>SETTINGS</span>
                    </button>
                </div>
                <div class="col-lg-2 crop block-item">
                    <div class='block-edit-bar'>
                        <button type="button" class="btn bg-deep-purple waves-effect btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="material-icons">settings</i>
                            <span>SETTINGS</span>
                        </button>
                    </div>
                    <img src="https://image.shutterstock.com/z/stock-vector-colorful-geometric-background-fluid-shapes-composition-eps-vector-1033073062.jpg" class="img-fluid max-width"  alt="Snow">
                </div>
                <div class="col-lg-2 crop block-item">
                    <div class='block-edit-bar'>
                        <button type="button" class="btn bg-deep-purple waves-effect btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="material-icons">settings</i>
                            <span>SETTINGS</span>
                        </button>
                    </div>
                    <img src="https://image.shutterstock.com/z/stock-vector-colorful-geometric-background-fluid-shapes-composition-eps-vector-1033073062.jpg" class="img-fluid max-width"  alt="Snow">
                </div>
                <div class="col-lg-2 crop block-item">
                    <div class='block-edit-bar'>
                        <button type="button" class="btn bg-deep-purple waves-effect btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="material-icons">settings</i>
                            <span>SETTINGS</span>
                        </button>
                    </div>
                    <img src="https://image.shutterstock.com/z/stock-vector-colorful-geometric-background-fluid-shapes-composition-eps-vector-1033073062.jpg" class="img-fluid max-width"  alt="Snow">
                </div>
                <div class="col-lg-2 crop block-item">
                    <div class='block-edit-bar'>
                        <button type="button" class="btn bg-deep-purple waves-effect btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="material-icons">settings</i>
                            <span>SETTINGS</span>
                        </button>
                    </div>
                    <img src="https://image.shutterstock.com/z/stock-vector-colorful-geometric-background-fluid-shapes-composition-eps-vector-1033073062.jpg" class="img-fluid max-width"  alt="Snow">
                </div>
                <div class="col-lg-2 crop block-item">
                    <div class='block-edit-bar'>
                        <button type="button" class="btn bg-deep-purple waves-effect btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="material-icons">settings</i>
                            <span>SETTINGS</span>
                        </button>
                    </div>
                    <img src="https://image.shutterstock.com/z/stock-vector-colorful-geometric-background-fluid-shapes-composition-eps-vector-1033073062.jpg" class="img-fluid max-width"  alt="Snow">
                </div>
                <div class="col-lg-2 crop block-item">
                    <div class='block-edit-bar'>
                        <button type="button" class="btn bg-deep-purple waves-effect btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="material-icons">settings</i>
                            <span>SETTINGS</span>
                        </button>
                    </div>
                    <img src="https://image.shutterstock.com/z/stock-vector-colorful-geometric-background-fluid-shapes-composition-eps-vector-1033073062.jpg" class="img-fluid max-width"  alt="Snow">
                </div>
            </div>
        </div>


<?php

    } 
    if ($url['c'] == 'list') {

    // Page Path    
    $pathArray = explode('/' , $_SERVER['REQUEST_URI']);
        for ($i = 0; $i < (sizeof($pathArray)-1); $i++){
            $out[] = $pathArray[$i];
        }
    $realPath = implode('/', $out); 
                
        echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">';
            echo '<div class="card">';
                echo '<div class="header">';
                    echo '<h2>Puslapių sąrašas';     
                echo '</div>';
                echo '<div class="body clearfix">';
                    echo '<div class="dd nestable-with-handle">';
                        $selectSql = mysql_query1("SELECT *FROM `" . LENTELES_PRIESAGA . "pa_page_settings`");
                        foreach ($selectSql as $irasas){
                            echo '<ol class="dd-list">';
                                echo '<li class="dd-item dd3-item" data-id="1">';
                                    echo '<div class="dd-handle dd3-handle"></div>';
                                    echo '<div class="dd3-content">';
                                        echo '<form method = "post" id="pageListForm">';
                                            echo '<input type="submit" id="edit" value="edit" name="edit"></input>';
                                            echo '<input type="submit" id="delete" value="delete" name="delete"></input>';
                                        echo '</form>';
                                        echo '<a href='.$realPath.'/admin;a,pageAssembler;c,edit;pageid,'.$irasas['page_id'].'>'.$irasas['title'].'</a>';
                                    echo '</div>';
                                echo '</li>';
                            echo '</ol>';
                        }
                    echo '</div>';			
                echo '</div>';
            echo '</div>';
        echo '</div>';
        if (isset($_POST['edit'])) {
            //$irasoAtnaujinimas = mysql_query1("DELETE FROM `" . LENTELES_PRIESAGA . "pa_page_settings` WHERE title='$title'");
        }elseif (isset($_POST['delete'])) {
            $title = $irasas['title'];
            $irasoTrinimas = mysql_query1("DELETE FROM `" . LENTELES_PRIESAGA . "pa_page_settings` WHERE title='$title'");
            

        }




        //$li         = ! empty($data) ? build_menu_admin($data) : '';
        //$pageMenu   = '<div class="dd nestable-with-handle">' . $li . '</div>';
        //if (!empty($sqlPages)) {
            //foreach ($sqlPages as $page) {
                //$page .= '<li class="dd-handle">'

            //}
        //}
        
        //var_dump($row);
        //foreach ($sqlPages as $puslapiai) {
            //echo $puslapiai['pavadinimas'] . "<br/>";
            //echo "<a>" .$puslapiai['pavadinimas']  ."</a>" . "<br/>";
        //}
        //echo "<a href = 'puslapiai/naujienos.php'>"  .$sqlPages[0]['pavadinimas']  ."</a>" ."<br/>";
        //echo "<a href = 'puslapiai/apie.php'>"  .$sqlPages[1]['pavadinimas']  ."</a>" ."" "<br/>";
        //echo "<a href = 'puslapiai/paieska.php'>"  .$sqlPages[2]['pavadinimas']  ."</a>" ."<br/>";
        //echo "<a href = 'puslapiai/kontaktai.php'>"  .$sqlPages[3]['pavadinimas']  ."</a>" ."<br/>";

        /*
        foreach ($sqlPages as $row) {
            $data[$row['parent']][] = $row;
        }
        $li         = ! empty($data) ? build_menu_admin($data) : '';
        $pageMenu   = '<div class="dd nestable-with-handle">' . $li . '</div>';
        $sqlOtherPages = mysql_query1( "SELECT * FROM `" . LENTELES_PRIESAGA . "page` WHERE `show`= 'N' AND `lang` = " . escape( lang() ) . " order by id" );
        $otherPages = '<ol class="dd-list">';
        if (! empty($sqlOtherPages)) {
            foreach ($sqlOtherPages as $otherPage) {
                $otherPages .= '<li class="dd-handle">
                <a href="' . url( '?id,' . $url['id'] . ';a,' . $url['a'] . ';d,' . $otherPage['id'] ) . '" onClick="return confirm(\'' . $lang['system']['delete_confirm'] . '\')">
                <img src="' . ROOT . 'images/icons/cross.png" title="' . $lang['admin']['delete'] . '" />
                </a>
                <a href="' . url( '?id,' . $url['id'] . ';a,' . $url['a'] . ';r,' . $otherPage['id'] ) . '" >
                <img src="' . ROOT . 'images/icons/wrench.png" title="' . $lang['admin']['edit'] . '" />
                </a>
                <a href="' . url( '?id,' . $url['id'] . ';a,' . $url['a'] . ';e,' . $otherPage['id'] ) . '">
                <img src="' . ROOT . 'images/icons/pencil.png" title="' . $lang['admin']['page_text'] . '"/>
                </a>
                ' . $otherPage['pavadinimas'] . '
                </li>';
            }   
        }
        $otherPages .= '</ol>';
        */
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
        

        if (isset($_POST) && !empty($_POST) && isset($_POST['Konfiguracija'])) {
            $lang = lang();
            $title =  escape($_POST['Pavadinimas']);
            $metaTitle = escape($_POST['metaPavadinimas']);
            $metaDescription =  escape($_POST['metaAprasymas']);
            $metaKeywords = escape($_POST['metaKeywords']);
            $friendlyUrl = escape($_POST['F_urls']);
            $statusID = escape($_POST['rodymas']);
            
           

            $insertQuery = mysql_query1("INSERT INTO `" . LENTELES_PRIESAGA . "pa_page_settings`
            (`title`,`meta_title`,`meta_desc`,`meta_keywords`,`status_id`,`friendly_url`) 
            VALUES (" . $title . "," . $metaTitle ."," . $metaDescription . "," . $metaKeywords ."," . $statusID ."," . $friendlyUrl .")");

            $sql = mysql_query1("UPDATE `" . LENTELES_PRIESAGA . "pa_page_settings` SET page_id=id");
            $sql = mysql_query1("UPDATE `" . LENTELES_PRIESAGA . "pa_page_settings` SET lang='$lang'");

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
                "name"      => "reg"
            ],
            $lang['admin']['title']  => [
                "type"  => "text", 
                "value" => input($insertQuery['title'] ), 
                "name"  => "Pavadinimas"
            ],
            $lang['admin']['metaTitle']  => [
                "type"  => "text", 
                "value" => input($insertQuery['meta_title'] ), 
                "name"  => "metaPavadinimas"
            ],
            $lang['admin']['metaDescription']  => [
                "type"  => "text", 
                "value" => input($insertQuery['meta_desc'] ), 
                "name"  => "metaAprasymas"
            ],
            $lang['admin']['metaKeywords']  => [
                "type"  => "text", 
                "value" => input($insertQuery['meta_keywords'] ), 
                "name"  => "metaKeywords"
            ],
            $lang['admin']['statusID'] => [
                "type"  => "switch", 
                "value" => 1, 
                "name"  => "rodymas",
                'form_line' => 'form-not-line',
                'checked'   => (input($insertQuery['status_id']) === 1)
            ],
            "Friendly url:"             => [
                "type"      => "select", 
                "value"     =>  [
                    '/'=> '/', 
                    ';'=> ';', 
                    '0'=> $lang['admin']['off']
                ], 
                "selected"  => $insertQuery['friendly_url'], 
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
        lentele($lang['admin']['pageassembler_settings'], $formClass->form());


}
?>
    <div class='modal-insert-place'></div>
    
    <script src="../dievai/js/menuclick.js" async></script>
    <script src="../dievai/js/class.insertblock.js" async></script>

<?php   

}
?>
