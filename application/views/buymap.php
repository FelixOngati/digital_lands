<script type="text/javascript">
        $( document ).ready(function() {
            $( "#form_holder" ).submit(function( event ) {
               event.preventDefault();
               jQuery('#popupbox').toggle();
            });
        });
</script>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">                        
                        <p class="intro-text">You have requested to buy map from Digital Lannds</p>
                        <p class="intro-text">Go to Your MPESA MENU-></p>
                        <p class="intro-text">Lipa na MPESA-></p>
                        <p class="intro-text">Buy Goods and send Ksh.<b>500</b> to <b>Till Number 324076</b></p>
                        <p class="intro-text">Click Continue when done.</p>
                        <?php?>
                        <?php
                        $data = array('id' => "form_holder");
                        echo form_open('buymap/place_request',$data)
                        ;?>
                        <p>
                        <?php $attributes = array('style' => 'color: #000;');
                        echo form_submit('submit','Continue');?>&nbsp;
                        <?php echo form_submit('cancel','Cancel');?></p>                                         
                    </div>
                </div>
            </div>
        </div>
    </header>

