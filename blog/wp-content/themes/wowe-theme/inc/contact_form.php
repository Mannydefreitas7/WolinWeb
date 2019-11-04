<?php 
function form_submissions_display() {
    global $wpdb;
  
    $id = $wpdb->get_results( 'SELECT `ID` FROM ' . $wpdb->prefix . 'form_submission');
    $fullname = $wpdb->get_results( 'SELECT `name` FROM ' . $wpdb->prefix . 'form_submission`');
    $email = $wpdb->get_results( 'SELECT `email` FROM ' . $wpdb->prefix . 'form_submission');
    $phone = $wpdb->get_results( 'SELECT `phone` FROM ' . $wpdb->prefix . 'form_submission');
    $message = $wpdb->get_results( 'SELECT `message` FROM ' . $wpdb->prefix . 'form_submission');
  
    $db_rows = $wpdb->get_results( 'SELECT * FROM wowe_form_submission');
    ?>
    <style>
      .form_submissions_admin tr:nth-child(1) {
        background: #d5ebff !important;
      }
      .form_submissions_admin tr:nth-child(1) > th {
        font-weight: bold;
      }
      .form_submissions_admin tr:nth-child(odd) {
        background: #f1f1f1;
      }
    </style>
      <div class="wrap">
        <h2>Form Submissions</h2>
  <br>
  <br>
  <table class="widefat form_submissions_admin">
      <tr>
          <th class="row-title"><?php esc_attr_e( 'ID'); ?></th>
      <th><?php esc_attr_e( 'Name' ); ?></th>
      <th><?php esc_attr_e( 'Email' ); ?></th>
      <th><?php esc_attr_e( 'Phone' ); ?></th>
      <th><?php esc_attr_e( 'Message' ); ?></th>
    </tr>
    <?php foreach ($db_rows as $row) { ?>
      <tr>
          <td class="row-title"><label for="tablecell"><?php echo $row->ID ?></label></td>
      <td><?php echo $row->name ?></td>
      <td><?php echo $row->email ?></td>
      <td><?php echo $row->phone ?></td>
      <td><?php echo $row->message ?></td>
    </tr>
    <?php } ?>
  </table>
    </div>
  
    <?php
  }

  function wolinweb_contact_form() {

    $content = '';

    $content .= '<form method="post" class="form">';
    $content .= '<div class="container">';
    $content .= '<input class="input input_text" type="text" name="full_name" placeholder="Your Full Name" />';
    $content .= '</br>';
    $content .= '<input class="input input_text" type="text" name="email_address" placeholder="Your Email Address" />';
    $content .= '</br>';
    $content .= '<input class="input input_text" type="text" name="phone_number" placeholder="Phone Number" />';
    $content .= '</br>';
    $content .= '<textarea class="input input_textarea" name="message" placeholder="Your Message"></textarea>';
    $content .= '</br>';
    $content .= '<button class="btn btn-outline" type="button" name="form_submission" >Submit</button>';
    $content .= '</div>';
    $content .= '</form>';

    return $content;
}

function contact_form_capture() {

global $wpdb;


  if(array_key_exists('form_submission', $_POST)) {

    $fullname = $_POST['full_name'];
    $email = $_POST['email_address'];
    $phone = $_POST['phone_number'];
    $message = $_POST['message'];
    $to = 'manuel@wolinweb.com';
    $subject = 'New Contact Form!';
    $body = '';

    $body .= 'Name: ' . $fullname . '<br>';
    $body .= 'Email: ' . $email . '<br>';
    $body .= 'Phone: ' . $phone . '<br>';
    $body .= 'Message: ' . $message . '<br>';  

    add_filter('wp_mail_content_type', 'set_html_content_type');

    wp_mail($to,$subject,$body);

    remove_filter('wp_mail_content_type', 'set_html_content_type');
    $table = $wpdb->prefix . 'form_submission';
    $data = array('name' => $fullname, 'email' => $email, 'phone' => $phone,  'message' => $message);
    $format =  array('%s','%s','%s','%s');
    
    $success=$wpdb->insert( $table, $data, $format );
    if($success){
      echo 'data has been save' ; 
  } else {
     echo '<h2>Didnt work :(';
  }
    
  }
} 
  ?>