<?php

include_once 'functions/functions.pageassembler.php';
echo '<link rel="stylesheet" href="css/page-builder.css">';


if ( !defined( "OK" ) ) {
	redirect( 'location: http://' . $_SERVER["HTTP_HOST"] );
}

if(BUTTONS_BLOCK) {
	lentele($lang['admin']['pageassembler'], buttonsMenu(buttons('pageassembler')));
}

if (isset($url['c'])) {
    if ($url['c'] == 'main') {
        $extensionPrefix = "../extensions";
        $blockList = $extensionPrefix . '/page_assembler/block_list.json';
        $blockPath = $extensionPrefix . json_decode(file_get_contents($blockList))->text->col_2_text_1_img;
        $blockJSON = file_get_contents($blockPath,true);
        $json = json_decode($blockJSON, true);
        
        if (empty($_POST)){
            $content = $json['content'];
        }
        

        $backEndHtmlFile = $extensionPrefix . $json['configurations']['backEndHtmlFile'];
        if ( isset( $_POST ) && !empty( $_POST ) && isset( $_POST['saveBlockInfo'] ) ) {

            $content = $json['content'];
            $i=0;
            array_pop($_POST);
            foreach ($_POST as $row) {
                $content[$i]['value'] = $row;
                $i++;
            }
            include $backEndHtmlFile;


        }
        if (empty($_POST)){
        $settings = array();
        $settings["Form"] = [ 
             
                "action" 	=> "", 
                "method" 	=> "post", 
                "enctype" 	=> "", 
                "id" 		=> "", 
                "class" 	=> "", 
                "name" 		=> ""
            
        ];

        $settings[""] = [
				"type" 		=> "submit", 
				"name" 		=> "saveBlockInfo", 
				"value" 	=> $lang['admin']['save'], 
				'form_line'	=> 'form-not-line',
        ];
        
       
        $formClass = new Form($settings);
        lentele($lang['admin']['pageassembler_add'], $formClass->form());
        ?>         
    <script src="../dievai/js/manuimage.js"></script>
    <?php } 
    }
    
    if ($url['c'] == 'edit'){
        if (isset($_SESSION['page-assembler-pageId']) && !isset( $_GET['pageId'] )){
            $pageId = $_SESSION['page-assembler-pageId'];
        } else if (isset( $_GET['pageId'] )) {
            $pageId = $_GET['pageId'];
            $_SESSION['page-assembler-pageId'] = $_GET['pageId'];
        }
        if (isset($pageId) && pageAssemblerDBexist('pa_data')){
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
        
            if (isset( $_GET['insertBlock'] ) ) {
                $blockName = $_GET['insertBlock'];
                $blockType = $_GET['blockType'];
                $extensionPrefix = "../extensions";
                $blockList = $extensionPrefix . '/page_assembler/block_list.json';
                $blockPath = $extensionPrefix . json_decode(file_get_contents($blockList))->$blockType->$blockName; //col_2_text_1_img;
                $blockJSON = file_get_contents($blockPath,true);
                $json = json_decode($blockJSON, true);
                $content = $json['content'];

                foreach ($content as $key => $element) {
                    //echo "<pre>"; print_r($element); echo "</pre>";
                    if ($element['type'] == 'span'){
                        $settings[$element['name']] = [
                            'type'      =>      'string',
                            'value'     =>      editor('spaw', 'standartinis', $element['name'], $element['value']),
                            'name'      =>      $element['name'],
                            
                        ];
                    } else {
                        $settings[$element['name']] = [
                            'type'      =>      $element['type'],
                            'value'     =>      $element['value'],
                            'name'      =>      $element['name']
                            
                        ];
                    }
                }
            }

            if (isset( $_POST['addblock'] ) ) {
                
                $content = $json['content'];
                $i=0;
                array_pop($_POST);
                foreach ($_POST as $row) {
                    $content[$i]['value'] = $row;
                    $i++;
                }
                $contentToDb = json_encode($content);
                //var_dump($contentToDb);
                //echo "<pre>"; print_r($content); echo "</pre>";
                $sql = "INSERT INTO `" . LENTELES_PRIESAGA . "pa_data` (page_id,type,lang, content) VALUES (" . escape($pageId) . ", " . escape($blockPath) . ", " . escape( lang() ) . ", " .escape( $contentToDb ) . ")";
                mysql_query1($sql);
                unset($sql);
                
            }

            

                $sql = "SELECT * FROM `" . LENTELES_PRIESAGA . "pa_data` WHERE page_id = " . escape($pageId) . " ORDER BY ID ASC";
                $pageContent = mysql_query1($sql);
                unset($sql);
                if (!$pageContent){
                    $_SESSION['page-assembler-pageId'] = null;
                    redirect(
                        url("?id," . $url['id'] . ";c," . $url['c']),
                        "header",
                        [
                            'type'		=> 'success',
                            'message' 	=> $lang['admin']['pa-noPage']
                        ]
                    );
                } else {
                    $extensionPrefix = "../extensions";
                    echo '<div id="page-builder-zone">';
                    foreach ($pageContent as $block => $value) {
                        
                        $blockPath = $pageContent[$block]['type'];                    
                        $blockJSON =  $pageContent[$block]['content'];
                        //$json = json_decode($blockJSON, true);                    
                        $content = json_decode($blockJSON, true);
                        // echo $pageContent[$block]['id'] . "<br>";
                        //echo "<pre>"; print_r($content); echo "</pre>";
                        $localBlockConfig = json_decode( file_get_contents($blockPath,true) , true);
                        $content['orderID'] = $pageContent[$block]['order_id'];
                        $content['parentId'] = $pageContent[$block]['parent_id'];
                        $backEndHtmlFile = $extensionPrefix . $localBlockConfig['configurations']['backEndHtmlFile'];
                        include $backEndHtmlFile;
                        
                    } 
                    
                    $blockList = $extensionPrefix . '/page_assembler/block_list.json';
                    $blockPath = $extensionPrefix . json_decode(file_get_contents($blockList))->team->team1;
                    
                }
        }
        
        $settings[""] = [
            "type" 		=> "submit", 
            "name" 		=> "addblock", 
            "value" 	=> $lang['admin']['save'], 
            'form_line'	=> 'form-not-line',
        ];
    
   
        $formClass = new Form($settings);
        lentele($lang['admin']['pageassembler_add'], $formClass->form());

        ?>
        <div class="card">
			<div class="header">
				<h2>
                    Add New Block
                </h2>
			</div>
			<div class="body clearfix">
                <?php
                    $block_list_json = file_get_contents('../extensions/page_assembler/block_list.json');
                    $block_list = json_decode($block_list_json, true);
                    $categoriesCount  = 0;
                ?>
                    
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                    <?php foreach ($block_list as $key => $category){ $categoriesCount ++; ?>
                        <li role="presentation"<?php echo ($categoriesCount === 1 ? ' class="active"' : ''); ?>>
                            <a href="#<?php echo $key; ?>" data-toggle="tab">
                                <?php echo ucfirst($key.' blocks'); ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                <?php $pathArray = explode('/' , $_SERVER['REQUEST_URI']); ?>
                <?php for ($i = 0; $i < (sizeof($pathArray)-1); $i++):?>
                <?php $out[] = $pathArray[$i] ?>
                <?php endfor ?>
                <?php $realPath = implode('/', $out); ?> 
                <?php $categoriesCount = 0; ?>
                    <?php foreach ($block_list as $key => $category){ $categoriesCount ++; ?>
                        <?php $categoryName = $key; ?>
                        <div role="tabpanel" class="tab-pane fade <?php echo ($categoriesCount === 1 ? ' active in' : ''); ?>" id="<?php echo $key ?>">
                            <b><?php echo ucfirst($key); ?></b>
                            <p>
                                <?php foreach ($category as $key => $block){ ?>
                                    <li>
                                        <?php echo '<a tabindex="-1" class="add-block test" href="'.$realPath.'/admin;a,pageAssembler;c,edit;pageid,'.$_GET['pageId'].';insertBlock,'.$key.';blockType,'.$categoryName.'">' ?>
                                            <?php echo ucfirst($key.' block') ?>
                                        </a>
                                    </li>
                                <?php } ?>
                            </p>
                        </div>
                    <?php } ?>
                </div>
			</div>
		</div>
    </div>
    <script>
        function CssFileItraukimas(){
            var link = document.createElement( "link" );
            src="../dievai/css/Test.css"; //pakeisti css faila i reikiama
            link.href = src;
            link.type = "text/css";
            link.rel = "stylesheet";
            link.media = "screen,print";

            document.getElementsByTagName( "head" )[0].appendChild( link );
            }
    </script>
    <script type="text/javascript" src="js/page-assembler.js"></script>
    <script src="js/blocks.js"></script>   
            
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
        echo '<a href="http://localhost:8081/2lvl/Tadas/tadasm/dievai/admin;a,pageAssembler;c,edit;pageId,1;insertBlock,col_2_text_1_img;blockType,text">Page1</a>';
        pageAssemblerDBexist('pa_page_settings');
        $formClass = new Form($settings);
        lentele($lang['admin']['pageassembler_list'], $formClass->form());
    }
    if ($url['c'] == 'settings') {
        

        if (isset($_POST) && !empty($_POST) && isset($_POST['Konfiguracija'])) {
            $title =  escape($_POST['Pavadinimas']);
            $metaTitle = escape($_POST['metaPavadinimas']);
            $metaDescription =  escape($_POST['metaAprasymas']);
            $metaKeywords = escape($_POST['metaKeywords']);
            $friendlyUrl = escape($_POST['F_urls']);

            $insertQuery =  mysql_query1("INSERT INTO `" . LENTELES_PRIESAGA . "pa_page_settings`
            (`title`,`meta_title`,`meta_desc`,`meta_keywords`,`friendly_url`) 
            VALUES (" . $title . "," . $metaTitle ."," . $metaDescription . "," . $metaKeywords ."," . $friendlyUrl .")");
            
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
            //$conf = [];
            "Form" => [
                "action"    => "", 
                "method"    => "post", 
                "name"      => "reg"
            ],
            $lang['admin']['title']  => [
                "type"  => "text", 
                "value" => input($result['title'] ), 
                "name"  => "Pavadinimas"
            ],
            $lang['admin']['metaTitle']  => [
                "type"  => "text", 
                "value" => input($result['meta_title'] ), 
                "name"  => "metaPavadinimas"
            ],
            $lang['admin']['metaDescription']  => [
                "type"  => "text", 
                "value" => input($result['meta_desc'] ), 
                "name"  => "metaAprasymas"
            ],
            $lang['admin']['metaKeywords']  => [
                "type"  => "text", 
                "value" => input($result['meta_keywords'] ), 
                "name"  => "metaKeywords"
            ],
            
            "Friendly url:"             => [
                "type"      => "select", 
                "value"     =>  [
                    '/'=> '/', 
                    ';'=> ';', 
                    '0'=> $lang['admin']['off']
                ], 
                "selected"  => $result['friendly_url'], 
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
    //Section for editing page settings
    if ($url['c'] == 'settings' && isset($url['p'])){
        var_dump($_GET);
        echo $url['p'];
    }
}
?>