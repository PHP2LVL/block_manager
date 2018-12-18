<div class="row" id='<?php echo $content['parentId'];?>' orderID='<?php echo $content['orderID'];?>' data-filename ='text_blocks' data-filename ='pricing_block' onclick="addClassBox(this)">
    <div class="pricing_table table-style-1">
        <div class="pricing-title">
            <h2><?php echo $content[0]['value'];?></h2>
        </div>
        <div class="table-container">
            <div class="table-column">
                <div class="table-content">
                    <div class="table-header">
                        <h3><?php echo $content[1]['value'];?></h3>
                    </div>
                    
                    <div class="table-detail">
                        <ul class="table-option">
                            <li><b><?php echo $content[2]['value'];?></b><?php echo $content[3]['value'];?></li>
                            <li><b><?php echo $content[4]['value'];?></b><?php echo $content[5]['value'];?></li>
                            <li><b><?php echo $content[6]['value'];?></b><?php echo $content[7]['value'];?></li>
                            <li><b><?php echo $content[8]['value'];?></b><?php echo $content[9]['value'];?></li>
                        </ul>
                        
                        <div class="table-price">
                            <span class="dv-price"><?php echo $content[10]['value'];?></span><span class="price"><?php echo $content[11]['value'];?></span>
                            <p><?php echo $content[12]['value'];?></p>
                        </div>
                        
                        <div class="button-container">
                            <a href="#" title="Sign up">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-column column-active">
                <div class="table-content">
                    <div class="table-header">
                        <h3>Pro</h3>
                    </div>
                    
                    <div class="table-detail">
                        <ul class="table-option">
                            <li><b>20GB</b> Storage</li>
                            <li><b>10</b> Email Addresses</li>
                            <li><b>5</b> Domains</li>
                            <li><b>Endless</b> Support</li>
                        </ul>
                        
                        <div class="table-price">
                            <span class="dv-price">$</span><span class="price">49</span>
                            <p>per month</p>
                        </div>
                        
                        <div class="button-container">
                            <a href="#" title="Sign up">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-column">
                <div class="table-content">
                    <div class="table-header">
                        <h3>Value</h3>
                    </div>
                    
                    <div class="table-detail">
                        <ul class="table-option">
                            <li><b>20GB</b> Storage</li>
                            <li><b>10</b> Email Addresses</li>
                            <li><b>5</b> Domains</li>
                            <li><b>Endless</b> Support</li>
                        </ul>
                        
                        <div class="table-price">
                            <span class="dv-price">$</span><span class="price">69</span>
                            <p>per month</p>
                        </div>
                        
                        <div class="button-container">
                            <a href="#" title="Sign up">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>