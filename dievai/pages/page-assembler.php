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
    }
        ?>
        </div>
        <script src="js/blocks.js"></script>
        <script src="../dievai/js/manuimage.js"></script>
    <?php }
    
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
                    $blockPath = $extensionPrefix . json_decode(file_get_contents($blockList))->text->col_2_text_1_img;
                    
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
        <script type="text/javascript" src="js/page-assembler.js"></script>
        <?php
    }


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