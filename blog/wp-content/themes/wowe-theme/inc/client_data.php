<?php 
function client_data_form_display() {
    global $wpdb; 
    $states = array('AL', 'AK', 'AS', 'AZ', 'AR', 'CA', 'CO', 'CT', 'DE', 'DC', 'FM', 'FL', 'GA', 'GU', 'HI', 'ID', 'IL', 'IN', 'IA', 'KS', 'KY', 'LA', 'ME', 'MH', 'MD', 'MA', 'MI', 'MN', 'MS', 'MO', 'MT', 'NE', 'NV', 'NH', 'NJ', 'NM', 'NY', 'NC', 'ND', 'MP', 'OH', 'OK', 'OR', 'PW', 'PA', 'PR', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VT', 'VI', 'VA', 'WA', 'WV', 'WI', 'WY', 'AE', 'AA', 'AP');
    ?>
    <style>
    .client_data form {
        margin-top: 20px;
    }
    .client_data .dashicons-admin-users {
        width: 30px;
        height: 30px;
        font-size: 30px;
    }
    .client_data h3 {
    margin: 0;
    }
    .client_data .regular-text {
    margin-bottom: 20px;
    }
    .client_data .small-text {
    padding: 10px;
    width: 10%;
}
    .client_data .regular-text, 
    .client_data .all-options {
    padding: 10px;
    }
    .client_data .button-primary {
    padding: 5px 10px;
    height: auto;
    font-size: 20px;
    margin-top: 20px;
}
    </style>
<div class="wrap client_data">
    <h1 class="wp-heading-inline"><span class="dashicons dashicons-admin-users"></span>
<?php esc_attr_e( 'Client Data' ); ?></h1>
    <hr class="wp-header-end">
    <p>Enter Here the Client Information form the form we received :)</p>
    <form method="post">
        <h3><?php esc_attr_e( 'Name' ); ?></h3>
        <input type="text" name="client_name" placeholder="<?php esc_attr_e( 'Enter Name Here' ); ?>" class="regular-text" />
        <br>
        <h3><?php esc_attr_e( 'Business Name' ); ?></h3>
        <input type="text" name="client_business_name" placeholder="<?php esc_attr_e( 'Enter Business Name' ); ?>" class="regular-text" />
       <br>
        <h3><?php esc_attr_e( 'Phone Number' ); ?></h3>
        <input type="text" name="client_phone" placeholder="<?php esc_attr_e( 'Enter Phone Number' ); ?>" class="regular-text" />
        <br>
        <h3><?php esc_attr_e( 'Email' ); ?></h3>
        <input type="text" name="client_email" placeholder="<?php esc_attr_e( 'Enter Email Address' ); ?>" class="regular-text" />
       <br>
        <h3><?php esc_attr_e( 'Address' ); ?></h3>
        <input type="text" class="all-options" name="street" placeholder="Street"/><br>
        <input type="text" class="all-options" name="city" placeholder="City"/><br><br>
        <select name="state" id="">
            <option selected="selected" value=""><?php esc_attr_e( 'Select State' ); ?></option>
            <?php foreach ($states as $state) { ?>
            <option value=""><?php echo $state ?></option>
            <?php } ?>
        </select><input type="text" name="client_zip" class="small-text" placeholder="ZIP" />
        <br>
        <input type="button" name="client-submit" id="submitted" value="Submit :)" class="button-primary"/>
    </form>
</div>

<?php 

    global $wpdb;  
        
        $name = $_POST['client_name'];
        $email = $_POST['client_email'];
        $phone = $_POST['client_phone'];
        $businessname = $_POST['client_business_name'];
        $street = $_POST['street'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['client_zip'];
    
        $table = $wpdb->prefix . 'client_data';
        $data = array(
            'name' => $name, 
            'businessname' => $businessname, 
            'phone' => $phone,  
            'email' => $email, 
            'street' => $street, 
            'city' => $city,  
            'state' => $state, 
            'zip' => $zip, 
        );
        
        if(isset($_POST['submitted'])) {
        $success=$wpdb->insert( $table, $data );

        if($success){
          echo 'data has been save' ; 
      } else {
         echo '<h2>Didnt work :(</h2>';
      }
        
    }

}
    

?>